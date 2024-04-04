<?php

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

Route::get('/guard', function () {
    return view('guard');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/profile', function () {
    return view('profile');
});
