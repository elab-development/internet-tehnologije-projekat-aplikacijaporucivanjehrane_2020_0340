<?php

namespace App\Http\Controllers;

use App\Models\NarudbinaProizvod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NarudzbinaProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $narudzbina_proizvodi = NarudbinaProizvod::all();
       
        if(is_null($narudzbina_proizvodi)){
            return response()->json('Restorani nisu pronadjeni', 404);
        } 
        return  response()->json($narudzbina_proizvodi);
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
            'narudzbina_id' => 'required',
            'proizvod_id'=>'required',
            'kolicina'=> 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $narudzbina_proizvodi = NarudbinaProizvod::create([
            'narudzbina_id' => $request->narudzbina_id,
            'proizvod_id' => $request->proizvod_id,
            'kolicina' => $request->kolicina,
        ]);

        return response()->json(['Proizvod i narudzbina su sacuvani', $narudzbina_proizvodi]);
    }

    /**
     * Display the specified resource.
     */
    public function show($narudzbinaProizvod_id)
    {
        $narudzbinaProizvod = NarudbinaProizvod::find($narudzbinaProizvod_id);//find vraca 1 podatak

        if(is_null($narudzbinaProizvod)){
            return response()->json('NarudzbinaProizvod nije pronadjen.', 404);
        }
        return  response()->json($narudzbinaProizvod);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NarudbinaProizvod $narudbinaProizvod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $narudzbinaProizvod_id)
    {
        $validator = Validator::make($request->all(), [
            'narudzbina_id' => 'required',
            'proizvod_id'=>'required',
            'kolicina'=> 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }


        $narudzbina_proizvod = NarudbinaProizvod::find($narudzbinaProizvod_id);
        $narudzbina_proizvod->narudzbina_id = $request->narudzbina_id;
        $narudzbina_proizvod->proizvod_id = $request->proizvod_id;
        $narudzbina_proizvod->kolicina = $request->kolicina;
       

        $narudzbina_proizvod->save();
     
        return response()->json(['Narudzbina i proizvod su azurirani',$narudzbina_proizvod]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $narudzbinaProizvod_id)
    {
        $narudzbina_proizvod = NarudbinaProizvod::find($narudzbinaProizvod_id);
        $narudzbina_proizvod->delete();
 
        return response()->json(['Narudzbina i proizvod su uspesno obrisani', 204]);
    }
}
