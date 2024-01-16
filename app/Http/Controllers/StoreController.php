<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store; // Import the Store model
use App\Models\User;
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

        User::where('id', auth()->id())->update(['type' => 'store']);

        return redirect('/home')->with('success', 'Your profile has been updated to store owenr!');
    }
}
