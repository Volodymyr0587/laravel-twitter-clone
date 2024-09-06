<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

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

        //% Send welcome email
        Mail::to($user->email)->send(new WelcomeEmail($user));

        //% Log in
        Auth::login($user);

        //% Redirect
        return to_route('dashboard')->with('success', 'Congratulations! Account created successfully.');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
        //% validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //% attempt to login the user
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.',
            ]);
        }

        //% regenerate the session token
        request()->session()->regenerate();

        //% redirect
        return to_route('dashboard')->with('success', 'You are logged in now!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return to_route('dashboard')->with('success', 'You are logged out now!');
    }
}
