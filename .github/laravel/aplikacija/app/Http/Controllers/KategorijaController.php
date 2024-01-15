<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategorijaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategorije = Kategorija::all();
        if(is_null($kategorije)){
            return response()->json('Kategorije nisu pronadjene', 404);
        }
        return  response()->json($kategorije);
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
            'naziv'=> 'required|string|max:100',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $kategorija = Kategorija::create([
            'naziv' => $request->naziv_jela,
        ]);

        return response()->json(['Kategorija je sacuvana', $kategorija]); 
    }

    /**
     * Display the specified resource.
     */
    public function show($kategorija_id)
    {
        $kategorija = Kategorija::find($kategorija_id);//find vraca 1 podatak

        if(is_null($kategorija)){
            return response()->json('Kategorija nije pronadjena.', 404);
        }
        return response()->json($kategorija);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategorija $kategorija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kategorija_id)
    {
        $validator = Validator::make($request->all(), [
            'naziv'=> 'required|string|max:100',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $kategorija = Kategorija::find($kategorija_id);
     
        $kategorija->naziv = $request->naziv;

        $kategorija->save();
     
        return response()->json(['Kategorija je azurirana', $kategorija]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kategorija_id)
    {
        $kategorija = Kategorija::find($kategorija_id);
        $kategorija->delete();
 
        return response()->json(['Kategorija je uspesno obrisana', 204]);
    }
}
