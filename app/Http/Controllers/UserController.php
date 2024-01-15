<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Register page
    public function create()
    {
        return view('user.create');
    }

    // Store a new user
    public function store()
    {
        // Validate the user
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255', 'unique:users,name'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:7', 'max:255'],
        ]);

        // Create and save the user
        $user = User::create($attributes);

        auth()->login($user);

        // Return to home page
        return redirect('/')->with('success', 'Your account has been created!');
    }
}
