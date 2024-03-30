<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Checking login
    public function checkingLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            return response()->json([
                'message' => 'Credentials accepted',
                'code' => 200
            ]);
        }

        return response()->json([
            'message' => 'User not found',
            'code' => 401
        ]);
    }
}
