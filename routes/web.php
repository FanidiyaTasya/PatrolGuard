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

Route::resource('/guard', GuardController::class);

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/profile', function () {
    return view('profile');
});
