<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }
    

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
