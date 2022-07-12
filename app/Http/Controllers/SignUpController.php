<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signup.index', [
            'active' => 'signup',
            'title' => 'Sign Up'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email:dns|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/signin')->with('success', 'Berhasil mendaftar. Silahkan login.');
    }
}
