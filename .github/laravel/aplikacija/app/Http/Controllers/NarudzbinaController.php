<?php

namespace App\Http\Controllers;

use App\Http\Resources\NarudzbinaResource;
use App\Models\Narudzbina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NarudzbinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $narudzbine = Narudzbina::all();
        return NarudzbinaResource::collection($narudzbine);
        /*
        if(is_null($narudzbine)){
            return response()->json('Narudzbine nisu pronadjene', 404);
        } 
        return  response()->json($narudzbine);
        */
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id', //u tabeli users, kolona id
            'restoran_id'=> 'required|exists:restorani,id',
            'napomena'=>'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $narudzbina = Narudzbina::create([
            'user_id' => $request->user_id,
            'restoran_id' => $request->restoran_id,
            'napomena' => $request->napomena,
        ]);

        return response()->json(['Narudzbina je sacuvana', new NarudzbinaResource($narudzbina)]);
    }

    /**
     * Display the specified resource.
     */
    public function show($narudzbina_id)
    {
        
        $narudzbina = Narudzbina::find($narudzbina_id);//find vraca 1 podatak

        if(is_null($narudzbina)){
            return response()->json('Narudzbina nije pronadjena.', 404);
        }

        return new NarudzbinaResource($narudzbina);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Narudzbina $narudzbina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $narudzbina_id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'restoran_id'=> 'required|exists:restorani,id',
            'napomena'=>'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $narudzbina = Narudzbina::find($narudzbina_id);
     
        $narudzbina->user_id = $request->user_id;
        $narudzbina->restoran_id = $request->restoran_id;
        $narudzbina->napomena = $request->napomena;
        

        $narudzbina->save();
     
        return response()->json(['Narudzbina je azurirana', new NarudzbinaResource($narudzbina)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($narudzbina_id)
    {
        $narudzbina = Narudzbina::find($narudzbina_id);
        $narudzbina->delete();
 
        return response()->json(['Narudzbina je uspesno obrisana', 204]); 
    }
}
