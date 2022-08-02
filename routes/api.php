<?php

use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Register user
Route::post('user/create', [UserController::class, 'register'])->name('user.register');

// Login user
Route::post('user/login', [UserController::class, 'login'])->name('user.login');

// Update user
Route::put('user/update/{id}', [UserController::class, 'update'])->name('user.update');

// Delete user
Route::delete('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

// Get a user
Route::get('user/{id}', [UserController::class, 'getUser'])->name('user.one');

// Get all users
Route::get('users', [UserController::class, 'getUsers'])->name('user.all');