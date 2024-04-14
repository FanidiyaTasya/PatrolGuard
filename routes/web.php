<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuardController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;


Route::get("/", [AuthController::class, 'signin']);
Route::post("/", [AuthController::class, 'authenticate']);

Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});
Route::resource('/guard', GuardController::class);

// Menampilkan daftar jadwal
Route::get('/schedule', [ScheduleController::class, 'showSchedule']);
// Menampilkan form untuk menambahkan jadwal
Route::get('/schedule/add', [ScheduleController::class,'showInsertSchedule']);
// Menyimpan jadwal baru ke dalam database
Route::post('/schedule/add', [ScheduleController::class, 'addSchedule'])->name('schedule.add');


Route::get('/location', function () {
    return view('location.location', ['title'=> 'Data Lokasi']);
});

Route::get('/report', function () {
    return view('report', ['title'=> 'Laporan']);
});