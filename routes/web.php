<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('home');
});

// Stores
Route::get('add-store', function () {
    return view('add-store');
});

// User

Route::get('register', [App\Http\Controllers\UserController::class, 'create']);
Route::post('register', [App\Http\Controllers\UserController::class, 'store']);
