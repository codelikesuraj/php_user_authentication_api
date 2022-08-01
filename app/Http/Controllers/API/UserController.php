<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\RegisterUserRequest;

class UserController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = User::create($request->validated());

        return response()->json(['data' => $user], 201);
    }
}
