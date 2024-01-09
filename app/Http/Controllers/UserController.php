<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Create a new user
    public function create()
    {
        return view('user.create');
    }

    // Store a new user
    public function store()
    {
        // Validate the user
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'confirmed', 'min:7', 'max:255'],
        ]);

        // Create and save the user
        User::create($attributes);

        // Return to home page
        return redirect('/');
    }
}
