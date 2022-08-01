<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\API\LoginUserRequest;
use App\Http\Requests\API\RegisterUserRequest;

class UserController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $credentials = [
            'name' => strtolower($request->validated('name')),
            'email' => $request->validated('email'),
            'password' => Hash::make($request->validated('password')),
        ];

        $user = User::create($credentials);

        return response()->json(['data' => $user], 201);
    }

    public function login(LoginUserRequest $request)
    {
        $credentials = [
            'email' => $request->validated('email'),
            'password' => $request->validated('password')
        ];
        
        if(Auth::attempt($credentials)):
            return response()->json([
                'data' => Auth::user(),
            ], 200);
        endif;
            
        return response()->json([
            'message' => 'The provided credentials do not match our record'
        ], 422);
    }
}
