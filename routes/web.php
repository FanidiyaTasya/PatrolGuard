<?php

use Illuminate\Support\Facades\Route;


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
