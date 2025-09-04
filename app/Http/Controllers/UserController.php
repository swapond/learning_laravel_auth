<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        $user = User::create($validated);

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'User registration failed.']);
        }

        return redirect()->route('login.get')->with('success', 'Registration successful. Please log in.');
    }

    public function login(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Login successful.');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        auth()->logout();
    }

    public function deepPage()
    {
        if (auth()->check()) {
            return view('deep');
        } else {
            return redirect()->route('login.get')->withErrors(['error' => 'You must be logged in to access the dashboard.']);
        }
    }

    // using gate in the controller

    public function dashboard()
    {
        // alternative
////        Gate::authorize('isAdmin'); // rest of the code will not execute if not admin
//        if (Gate::allows('isAdmin')) {
//            return view('dashboard');
//        } else {
//            return redirect()->route('login.get')->withErrors(['error' => 'You must be logged in to access the dashboard.']);
//        }
        return view('dashboard');
    }

    public function superAdmin()
    {
        Gate::authorize('isAdmin');
        return view('superAdmin');
    }

    public function profile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }

    //
}
