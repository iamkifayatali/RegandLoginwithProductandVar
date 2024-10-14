<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePostRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $users = User::all();
    return response()->json($users);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
 
    {      
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->password = $request->password;
        $user->c_password = $request->c_password;
        $user->remember_token = $request->remember_token;
        $user->save();
        return response()->json([
            'user'=> $user,
             'token' => $user->createToken('auth_token')->plainTextToken,
            
        ]);
    }
    public function userUpdate(StorePostRequest $request, $id)
    {

      
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->c_password = $request->input('c_password');
        $user->save();
        return response()->json($user);
        
    }
  
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json('User deleted successfully.');
    }
}
