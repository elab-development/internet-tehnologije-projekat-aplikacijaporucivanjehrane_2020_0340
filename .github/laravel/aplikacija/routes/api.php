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


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


//Route::resource('/users', UserController::class);

Route::resource('/restorani', RestoranController::class);
Route::resource('/narudzbine', NarudzbinaController::class);
Route::resource('/kategorije', KategorijaController::class);
Route::resource('/proizvodi', ProizvodController::class);

Route::resource('/rk', RestoranKategorijaController::class);
Route::resource('/np', NarudzbinaProizvodController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    Route::resource('proizvodi', ProizvodController::class)->only(['update','store','destroy'])->middleware('proveraRole:admin');

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/kes', [CacheController::class, 'index']);

Route::get('/spoji-podatke', [RestoranKategorijaController::class, 'spojiPodatke']);
Route::get('/restorani-za-kategoriju/{kategorija_id}', [RestoranKategorijaController::class, 'restoraniZaKategoriju']);
Route::get('/proizvodi-za-restoran/{restoranId}', [ProizvodController::class, 'proizvodiZaRestoran']);
