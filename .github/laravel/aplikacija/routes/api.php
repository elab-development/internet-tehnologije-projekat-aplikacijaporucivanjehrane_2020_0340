<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\NarudzbinaController;
use App\Http\Controllers\NarudzbinaProizvodController;
use App\Http\Controllers\ProizvodController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\RestoranKategorijaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users', [UserController::class, 'index'])->middleware('proveraRole:admin');
Route::get('/users/{id}', [UserController::class, 'show'])->middleware('proveraRole:admin');

Route::post('/users', [UserController::class, 'store'])->middleware('proveraRole:admin');
Route::put('/users/{id}', [UserController::class, 'update'])->middleware('proveraRole:admin');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->middleware('proveraRole:admin');


//Route::resource('/users', UserController::class);
Route::get('/restorani', [RestoranController::class, 'index']);
Route::get('/restorani/{id}', [RestoranController::class, 'show']);

Route::post('/restorani', [RestoranController::class, 'store'])->middleware('proveraRole:admin');
Route::put('/restorani/{id}', [RestoranController::class, 'update'])->middleware('proveraRole:admin');
Route::delete('/restorani/{id}', [RestoranController::class, 'destroy'])->middleware('proveraRole:admin');
//Route::resource('/restorani', RestoranController::class);

Route::get('/narudzbine', [NarudzbinaController::class, 'index'])->middleware('proveraRole:admin,dostavljac');
Route::get('/narudzbine/{id}', [NarudzbinaController::class, 'show'])->middleware('proveraRole:admin,dostavljac');

Route::post('/narudzbine', [NarudzbinaController::class, 'store'])->middleware('proveraRole:admin, dostavljac, user');
Route::put('/narudzbine/{id}', [NarudzbinaController::class, 'update'])->middleware('proveraRole:admin, dostavljac');
Route::delete('/narudzbine/{id}', [NarudzbinaController::class, 'destroy'])->middleware('proveraRole:admin');
//Route::resource('/narudzbine', NarudzbinaController::class);

Route::get('/kategorije', [KategorijaController::class, 'index']);
Route::get('/kategorije/{id}', [KategorijaController::class, 'show']);

Route::post('/kategorije', [KategorijaController::class, 'store'])->middleware('proveraRole:admin');
Route::put('/kategorije/{id}', [KategorijaController::class, 'update'])->middleware('proveraRole:admin');
Route::delete('/kategorije/{id}', [KategorijaController::class, 'destroy'])->middleware('proveraRole:admin');
//Route::resource('/kategorije', KategorijaController::class);

Route::get('/proizvodi', [ProizvodController::class, 'index']);
Route::get('/proizvodi/{id}', [ProizvodController::class, 'show']);

Route::post('/proizvodi', [ProizvodController::class, 'store'])->middleware('proveraRole:admin');
Route::put('/proizvodi/{id}', [ProizvodController::class, 'update'])->middleware('proveraRole:admin');
Route::delete('/proizvodi/{id}', [ProizvodController::class, 'destroy'])->middleware('proveraRole:admin');
//Route::resource('/proizvodi', ProizvodController::class);

Route::resource('/rk', RestoranKategorijaController::class);
Route::resource('/np', NarudzbinaProizvodController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/kes', [CacheController::class, 'index']);

Route::get('/spoji-podatke', [RestoranKategorijaController::class, 'spojiPodatke']);
Route::get('/restorani-za-kategoriju/{kategorija_id}', [RestoranKategorijaController::class, 'restoraniZaKategoriju']);
Route::get('/proizvodi-za-restoran/{restoranId}', [ProizvodController::class, 'proizvodiZaRestoran']);
Route::get('/restoran/{id}/koordinate', [RestoranController::class, 'getRestoranKoordinate']);
Route::get('/svi-restorani/koordinate', [RestoranController::class, 'getSviRestoraniKoordinate']);
Route::get('/restorani-koordinate', [RestoranController::class, 'getRestoraniKoordinatee']);
