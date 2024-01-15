<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        
        if(is_null($users)){
            return response()->json('Korisnici nisu pronadjeni', 404);
        } 
        return  response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //za cuvanje novog korisnika u bazi
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email'=> 'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8',
            'address'=> 'required|string|max:100',
            'phone_number'=> 'required|string|min:10',
            'role' => 'required|string|max:100'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'role' => $request->role,
        ]);

        $user = User::create($request->all()); 
        return response()->json($user, 201);
    
    }

    /**
     * Display the specified resource.
     */
    public function show($user_id)
    {
        
        $user = User::find($user_id);//find vraca 1 podatak

        if(is_null($user)){
            return response()->json('Korisnik nije pronadjen.', 404);
        }
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email'=> 'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8',
            'address'=> 'required|string|max:100',
            'phone_number'=> 'required|string|min:10',
            'role' => 'required|string|max:100'
        ]);

        if($validator->fails()){
            return response()->json(["Validacija nije uspesna",$validator->errors()]);
        }

        $user = User::find($user_id);
     
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->role = $request->role;

        $user->save();
     
        return response()->json(['Korisnik je azuriran']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
 
        return response()->json(['Korisnik je uspesno obrisan', 204]);
    }
}
