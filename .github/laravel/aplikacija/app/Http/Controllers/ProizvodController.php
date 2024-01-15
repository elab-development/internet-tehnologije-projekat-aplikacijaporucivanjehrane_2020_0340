<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProizvodResource;
use App\Models\Proizvod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proizvodi = Proizvod::all();
        return ProizvodResource::collection($proizvodi);
        /*
        if(is_null($proizvodi)){
            return response()->json('Proizvodi nisu pronadjeni', 404);
        } 
        return  response()->json($proizvodi);*/
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
            'naziv_proizvoda' => 'required|string|max:100',
            'cena'=> 'required|numeric',
            'opis_proizvoda'=>'required',
            'kategorija_id'=> 'required',
            'prilozi'=> 'required|string|max:100',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $proizvod = Proizvod::create([
            'naziv_proizvoda' => $request->naziv_proizvoda,
            'cena' => $request->cena,
            'opis_proizvoda' => $request->opis_proizvoda,
            'kategorija_id' => $request->kategorija_id,
            'prilozi' => $request->prilozi,

        ]);

        return response()->json(['Proizvod je sacuvan', new ProizvodResource($proizvod)]);
    }

    /**
     * Display the specified resource.
     */
    public function show($proizvod_id)
    {
        $proizvod = Proizvod::find($proizvod_id);//find vraca 1 podatak
        
        
        if(is_null($proizvod)){
            return response()->json('Proizvod nije pronadjen.', 404);
        }
       // return response()->json($proizvod);
       return new ProizvodResource($proizvod);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proizvod $proizvod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $proizvod_id)
    {
        $validator = Validator::make($request->all(), [
            'naziv_proizvoda' => 'required|string|max:100',
            'cena'=> 'required|numeric',
            'opis_proizvoda'=>'required',
            'kategorija_id'=> 'required',
            'prilozi'=> 'required|string|max:100',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $proizvod = Proizvod::find($proizvod_id);
     
        $proizvod->naziv_proizvoda = $request->naziv_proizvoda;
        $proizvod->cena = $request->cena;
        $proizvod->opis_proizvoda = $request->opis_proizvoda;
        $proizvod->kategorija_id = $request->kategorija_id;
        $proizvod->prilozi = $request->prilozi;
        

        $proizvod->save();
     
        return response()->json(['Proizvod je azuriran', new ProizvodResource($proizvod)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($proizvod_id)
    {
        $proizvod = Proizvod::find($proizvod_id);
        $proizvod->delete();
 
        return response()->json(['Proizvod je uspesno obrisan', 204]);
    }
}
