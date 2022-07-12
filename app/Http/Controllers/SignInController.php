<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function index()
    {
        return view('signin.index', [
            'active' => 'signin',
            'title' => 'Sign In'
        ]);
    }

    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email:dns|max:255',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Email atau password salah.');
    }

    public function unauthenticate(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
