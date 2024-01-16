<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store; // Import the Store model
use Illuminate\Validation\Rules\Unique;

class StoreController extends Controller
{
    public function create()
    {
        return view('store.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255', 'unique:stores,name'],
            'location' => 'required',
            'work_hours' => 'required',
        ]);

        Store::create($attributes);

        return redirect('/home')->with('success', 'Your store profile has been created!');
    }
}
