<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    
    public function index() {
        if (Auth::guard('admin')->check()) {
            notify()->success('Halo selamat datang ' . Auth::guard('admin')->user()->name);
        }
        return view('pages.dashboard', [
            'title' => 'Dashboard'
        ]);
    }
}
