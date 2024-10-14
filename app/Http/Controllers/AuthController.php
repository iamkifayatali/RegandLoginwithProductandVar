<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginPostRequest $request)
 
    { 
        $email = User::where("email",$request->email)->first();
        if (!$email) {
            return response()->json(['you email is incorrect ,  Please check and type again'] ,400);
        }
        
// if ($user->password != $request->password) {
//     // dd(Hash::make($request->password));
//     return response()->json(['password is incorrect please look again'] ,200);
// }





    $credentials = $request->only ('email','password');
       
        if (!auth::attempt($credentials)) {
            return response()->json(['you password is incorrect, check again'] ,400);
        }
    


    // if (!Auth::attempt($credentials)) {
    //     throw ValidationException::withMessages([
    //         'email' , 'password' => ['your email is incorrect' , 'password is incorrect'],
    //     ]);
    // }

 

   
   

    // $user = Auth::user();

     
        return response()->json([
            'status' => 'success',
            'message' => 'User logged in successfully',
            'name' => $email->name,
            'token' => $email->createToken('auth_token')->plainTextToken,
            
        ]);
    }

    public function logout(Request $request)
     {
        
        $request->user()->currentAccessToken()->delete();
                return response()->json(
                    [
                        'status' => 'success',
                        'message' => 'logged out successfully' ,
                    ]);
  }

public function log()
{
  return response()->json ([
  'status' =>
  'success',
  'message' => 'You are AUTHINCATED in. Thanks!'
  ]) ;
  }
}





