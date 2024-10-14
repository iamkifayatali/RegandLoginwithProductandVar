<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductValidation;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(ProductValidation $request)
 
    {  
        $Products = new Products();
        $Products->name =$request->name;
        $Products->price =$request->price;
        $Products->detail =$request->detail; 
        $Products->save();
        return response()->json([
            'Products'=> $Products,
            
        ]);
    }

    public function read()
    {
    // $Products = Products::all();
    $Products = Products::with(['varieties:p_id,color,size'])->get()->makeHidden(['created_at', 'updated_at']);
    
    return response()->json($Products);
        
    }

    public function update(ProductValidation $request, $id)
    {
       
        $Products = Products::find($id);
        $Products->name =$request->name;
        $Products->price =$request->price;
        $Products->detail =$request->detail; 
        $Products->save();
        return response()->json([
            'Products'=> $Products,
            
        ]);
    }

    public function delete($id)
    {
        $Products = Products::find($id);
        $Products->delete();
        return response()->json('Products deleted successfully.');
    }

}
