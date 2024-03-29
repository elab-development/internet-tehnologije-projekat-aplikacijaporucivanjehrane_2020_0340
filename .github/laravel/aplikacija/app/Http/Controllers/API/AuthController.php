<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        if($validator->fails())
            return response()->json($validator->errors());

       
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['data' => $user, 'access_token' => $token, 'token_type' =>'Bearer']);
    }
        
    public function login(Request $request){
        
        if(!Auth::attempt($request->only('email', 'password')))
            return response()->json(['message' => 'Neovlascen pristup', 401]);

        
        $user = User::where('email', $request->email)->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['message'=>"Zdravo ". $user->name. ", uspesno ste se ulogovali!",
         'access_token' => $token, 'token_type' =>'Bearer',"korisnik" => $user, "rola" => $user->role]);
    }
    
    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json(['message'=> 'Uspesno ste se izlogovali']);
    }
}
