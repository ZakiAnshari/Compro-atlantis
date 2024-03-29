<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    
    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if(Auth::user()->status != 'active'){
                Session::flash('status', 'failesdsssssss');
                Session::flash('message', 'Your account is not active yet. Please contact admin!');
                return  redirect('/login');
            }

            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('dashboard')->with('success', 'Selamat Datang Admin');
            }
            
            if(Auth::user()->role_id == 2){
                return redirect('dashboard');
            }
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Login Gagal');
        return redirect('/login');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
