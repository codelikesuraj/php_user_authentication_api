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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user/create', [UserController::class, 'register'])->name('user.register');
Route::post('user/login', [UserController::class, 'login'])->name('user.login');
Route::put('user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
Route::get('user/{id}', [UserController::class, 'getUser'])->name('user.one');
Route::get('users', [UserController::class, 'getUsers'])->name('user.all');