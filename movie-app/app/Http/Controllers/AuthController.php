<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'role' => 'required',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('success','Registration successfully');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validateData)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect('/dasboard')->with('success', 'Login Successfully as Admin');
            } else {
                return redirect('/')->with('success', 'Login Successfully');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ]);
    }

}
