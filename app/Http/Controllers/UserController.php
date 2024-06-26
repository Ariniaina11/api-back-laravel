<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Get all users
    public function users(){
        $users = User::all();

        return response()->json([
            'users' => $users,
            'message' => 'Users',
            'code' => 200 // Success
        ]);
    }

    // Store user data to DB
    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        // Response
        return response()->json([
            'message' => 'User stored successfuly',
            'code' => 200
        ]);
    }
}
