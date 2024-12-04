<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function resetPassword(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:8',
                'password_confirmation' => 'required|string|same:password',
            ]);

            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return response()->json(['error' => 'Korisnik nije pronadjen'], 404);
            }
            
            $user->password = Hash::make($request->password);
            $user->save();
    
            return response()->json(['message' => 'Lozinka je uspesno resetovana']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
