<?php

use App\Http\Controllers\GuardController;
use App\Http\Controllers\ScheduleController;
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

// Menampilkan form untuk menambahkan jadwal
Route::get('/formSchedule', function () {
    return view('schedule.insert-schedule');
});
// Menyimpan jadwal baru ke dalam database
Route::post('/addSchedule', [ScheduleController::class, 'addSchedule'])->name('schedule.add');
// Menampilkan daftar jadwal
Route::get('/schedule', [ScheduleController::class, 'showSchedule']);


Route::get('/report', function () {
    return view('report');
});

Route::get('/profile', function () {
    return view('profile');
});