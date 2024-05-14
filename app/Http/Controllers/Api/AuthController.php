<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GuardResource;
use App\Models\Guard;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $guard = Guard::where('email', $credentials['email'])->first();

        if (!$guard || !Hash::check($credentials['password'], $guard->password)) {
            return response()->json(['error' => 'Invalid email or password'], 401);
        }
        $token = Str::random(60);
        $guard->update(['token' => $token]);
    
        return new GuardResource($guard);
    }

    public function logout(Request $request) {
        $token = $request->header('Authorization');
        if (!$token) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        $guard = Guard::where('token', $token)->first();
        if ($guard) {
            $guard->update(['token' => null]);
            return response()->json(['message' => 'Successfully logged out'], 200);
        } else {
            return response()->json(['error' => 'Invalid token'], 401);
        }
    }
}