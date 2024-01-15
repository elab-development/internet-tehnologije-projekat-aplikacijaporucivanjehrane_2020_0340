<?php

namespace App\Http\Controllers;

use App\Models\Restoran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RestoranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restorani = Restoran::all();
        
        if(is_null($restorani)){
            return response()->json('Restorani nisu pronadjeni', 404);
        } 
        return  response()->json($restorani);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:100',
            'email'=> 'required|string|email|max:255|unique:users',
            'opis'=>'required|string|max:255',
            'adresa'=> 'required|string|max:100',
            'ocena'=> 'required|string|max:5',
            
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $restoran = Restoran::create([
            'naziv' => $request->naziv,
            'email' => $request->email,
            'opis' => $request->opisjela,
            'adresa' => $request->adresa,
            'ocena' => $request->ocena,
        ]);

        return response()->json(['Restoran je sacuvan']);
    }

    /**
     * Display the specified resource.
     */
    public function show($restoran_id)
    {
       $restoran = Restoran::find($restoran_id);//find vraca 1 podatak
       
       
       if(is_null($restoran)){
            return response()->json('Restoran nije pronadjen.', 404);
        }
       
        return  response()->json($restoran);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restoran $restoran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $restoran_id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:100',
            'adresa'=> 'required|string|max:100',
            'opis'=>'required',
            'ocena'=> 'required|decimal|max:5',
            'email'=> 'required|string|email|max:255|unique:users',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $restoran = Restoran::find($restoran_id);
     
        $restoran->naziv = $request->naziv;
        $restoran->email = $request->email;
        $restoran->opis = $request->opisjela;
        $restoran->adresa = $request->adresa;
        $restoran->ocena = $request->ocena;

        $restoran->save();
     
        return  response()->json($restoran);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($restoran_id)
    {
        
        $restoran = Restoran::find($restoran_id);
        $restoran->delete();
 
        return response()->json(['Restoran je uspesno obrisan', 204]);
    }
}
