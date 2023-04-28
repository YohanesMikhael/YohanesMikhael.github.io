<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyadminController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view ('backend.login');
    }

    public function auth(Request $request) 
    {
        $validate = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function register()
    {
        return view ('backend.register');
    }

    public function store(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/myadmin');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/myadmin');
    }
}
