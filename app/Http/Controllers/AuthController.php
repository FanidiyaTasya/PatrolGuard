<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    public function signin() {
        return view("auth.sign-in");
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/dashboard');
        }
        return back()->withInput($request->only('email'))->with('error', 'Login failed!');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
