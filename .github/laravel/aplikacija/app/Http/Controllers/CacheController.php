<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function index()
    {
         $key = 'cached_users';
         $users = Cache::get($key);
 
         if (!$users) {
             $users = User::all();
 
             Cache::put($key, $users, now()->addMinutes(60));
         }
 
         return response()->json(["Uspesno kesiranje podataka", $users]);
    }
}
