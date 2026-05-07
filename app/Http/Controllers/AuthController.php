<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function login_post(Request $request)
    {
        // var_dump($request->all());
        // exit();

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau sandi tidak sesuai.',
        ])->onlyInput('email');
    }

    public function daftar()
    {
        return view('daftar');
    }
}
