<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller {
    public function login(Request $request) {
        return view("sign-in");
    }

    public function actionLogin(Request $request) {
        $data = [
            'username' => $request->input('username'),
            'password' =>$request->input('password')
        ];
    }
}
