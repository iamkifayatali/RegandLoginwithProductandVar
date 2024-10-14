<?php

namespace App\Http\Controllers;
use App\Http\Requests\VariticesValidation;
use App\Models\Products;
use App\Models\Varieties;
use DB;
use Illuminate\Http\Request;

class VarietiesController extends Controller
{
    public function create(VariticesValidation $request)
 
    {  
       
       
     
   
        $varieties = new Varieties();
        $varieties->color =$request->color;
        $varieties->size =$request->size;
        $varieties->Quantity=$request->Quantity;
        $varieties->p_id=$request->p_id;
  
        $varieties->save();
        return response()->json([
            'varieties'=> $varieties,
            
        ]);
    }

    public function viewV(Request $request, $id)
    {

        $varietiest = Varieties::where('p_id', '=', $id)->get();;
        // $varietiest = Varieties::where('$id' '=' '$p_id')->get();
       

        return response()->json($varietiest);
    }
    



    public function read()
    {
    $varieties = Varieties::all();
    return response()->json($varieties);
        
    }

    public function update(VariticesValidation $request, $id)
    {
      

        $varieties = Varieties::find($id);
        $varieties->color =$request->color;
        $varieties->size =$request->size;
        $varieties->Quantity=$request->Quantity;
        
  
        $varieties->save();
        return response()->json([
            'varieties'=> $varieties,
            
        ]);
    }

    public function delete($id)
    {
        $varieties = Varieties::find($id);
        $varieties->delete();
        return response()->json('type deleted successfully.');
    }

}
