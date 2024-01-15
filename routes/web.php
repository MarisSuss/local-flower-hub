<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});

// Registration
Route::get('register', [App\Http\Controllers\UserController::class, 'create'])->middleware('guest');
Route::post('register', [App\Http\Controllers\UserController::class, 'store'])->middleware('guest');

// Todo edit profile

// Login/ logout
Route::get('login', [App\Http\Controllers\SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [App\Http\Controllers\SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [App\Http\Controllers\SessionsController::class, 'destroy'])->middleware('auth');


