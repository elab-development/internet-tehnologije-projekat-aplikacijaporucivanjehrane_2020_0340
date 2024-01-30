<?php

namespace App\Http\Controllers;

use App\Http\Resources\RestoranKategorijaResource;
use App\Models\Restoran;
use App\Models\RestoranKategorija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RestoranKategorijaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restorani_kategorije = RestoranKategorija::all();
        return RestoranKategorijaResource::collection($restorani_kategorije);
        /*
        if(is_null($restorani_kategorije)){
            return response()->json('Restorani nisu pronadjeni', 404);
        } 
        return  response()->json($restorani_kategorije);*/
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
            'restoran_id' => 'required',
            'kategorija_id'=> 'required',
            
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $restoran_kategorija = RestoranKategorija::create([
            'restoran_id' => $request->restoran_id,
            'kategorija_id' => $request->kategorija_id,
            
        ]);

        return response()->json(['Restoran i kategorija su sacuvani', new RestoranKategorijaResource($restoran_kategorija)]);
    }

    /**
     * Display the specified resource.
     */
    public function show($restoranKategorija_id)
    {
         $restoranKategorija = RestoranKategorija::find($restoranKategorija_id);//find vraca 1 podatak
       
       
         if(is_null($restoranKategorija)){
              return response()->json('Restoran nije pronadjen.', 404);
         }
         return new RestoranKategorijaResource($restoranKategorija);
        
        }

    public function spojiPodatke(){
    $podaci = Restoran::join('restoran_kategorijas', 'restorans.id', '=', 'restoran_kategorijas.restoran_id')
        ->join('kategorijas', 'kategorijas.id', '=', 'restoran_kategorijas.kategorija_id')
        ->select('restorans.*', 'kategorijas.naziv as kategorija_naziv')
        ->get();

    // Vratite podatke kao JSON odgovor
    return response()->json(['podaci' => $podaci]);
}

public function restoraniZaKategoriju($kategorija_id)
{
    try {
        $podaci = Restoran::join('restoran_kategorijas', 'restorans.id', '=', 'restoran_kategorijas.restoran_id')
            ->join('kategorijas', 'kategorijas.id', '=', 'restoran_kategorijas.kategorija_id')
            ->select('restorans.*', 'kategorijas.naziv as kategorija_naziv')
            ->where('kategorijas.id', $kategorija_id)
            ->get();

        return response()->json(['podaci' => $podaci]);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Došlo je do greške prilikom dohvatanja podataka.'], 500);
    }
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RestoranKategorija $restoranKategorija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $restoranKategorija_id)
    {
        $validator = Validator::make($request->all(), [
            'restoran_id' => 'required',
            'kategorija_id'=> 'required',
            
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $restoran_kategorija = RestoranKategorija::find($restoranKategorija_id);
     
        $restoran_kategorija->restoran_id = $request->restoran_id;
        $restoran_kategorija->kategorija_id = $request->kategorija_id;
       

        $restoran_kategorija->save();
     
        return response()->json(['Restoran i kategorija su azurirani', new RestoranKategorijaResource($restoran_kategorija)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($restoranKategorija_id)
    {
        $restoran_kategorija =RestoranKategorija::find($restoranKategorija_id);
        $restoran_kategorija->delete();
 
        return response()->json(['Restoran i kategorija su uspesno obrisani', 204]);
    }
}
