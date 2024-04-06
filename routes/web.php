<?php

use App\Http\Controllers\GuardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/form', function () {
    return view('guard.insert');
});

Route::get('/guard', [GuardController::class, 'showGuard']);

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/profile', function () {
    return view('profile');
});
