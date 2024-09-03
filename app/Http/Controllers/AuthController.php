<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //% Validate
        $attributes = $request->validate([
            'name' => ['required', 'min:2', 'max:40'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        //% Create a user
        $user = User::create($attributes);
        //% Log in
        Auth::login($user);
        //% Redirect
        return to_route('dashboard')->with('success', 'Congratulations! Account created successfully.');
    }
}
