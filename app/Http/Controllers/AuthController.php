<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function authenticateWithPassword(Request $request)
    {
        return view('backend.authenticate-with-password',[
            'title' => ''
        ]);
    }

    public function processAuthenticateWithPassword(Request $request)
    {
        $password = $request->input('password');
        if ($password == 'Yohanes23') { // ganti 'password' dengan password yang diinginkan
            session(['authenticated' => true]);
            return redirect()->intended(route('account.index'));
        } else {
            return redirect()->route('authenticate-with-password')->withErrors('Password salah!');
        }
    }
}
