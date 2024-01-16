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

// Login/ logout
Route::get('login', [App\Http\Controllers\SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [App\Http\Controllers\SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [App\Http\Controllers\SessionsController::class, 'destroy'])->middleware('auth');

// Todo profile
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'create'])->middleware('auth');

// Todo add store profile

Route::get('add-store', [App\Http\Controllers\StoreController::class, 'create'])->middleware('auth');
Route::post('add-store', [App\Http\Controllers\StoreController::class, 'store'])->middleware('auth');