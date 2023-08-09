<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function connexion(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)  && Auth::user()->role_id === 1) {
            $request->session()->regenerate();

             return redirect()->intended('/index');

        }
        if (Auth::attempt($credentials)  && Auth::user()->role_id === 2) {
            $request->session()->regenerate();

             return redirect()->intended('/index');

        }
        if (Auth::attempt($credentials)  && Auth::user()->role_id === 3) {
            $request->session()->regenerate();

            return redirect()->intended('http://127.0.0.1:8000/reservation');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }



}
