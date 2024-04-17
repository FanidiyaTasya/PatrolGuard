<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuardController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ShiftController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get("/", [AuthController::class, 'signin'])->name('sign-in');
Route::post("/", [AuthController::class, 'authenticate']);
Route::get('/sign-up', function () {
    return view('auth.sign-up');
});
Route::post("/logout", [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth:admin');
Route::resource('/guard', GuardController::class)->middleware('auth:admin');
Route::resource('/schedule', ScheduleController::class)->middleware('auth:admin');


// // Menampilkan daftar jadwal
// Route::get('/schedule', [ScheduleController::class, 'showSchedule']);
// // Menampilkan form untuk menambahkan jadwal
// Route::get('/schedule/add', [ScheduleController::class,'showInsertSchedule']);
// // Menyimpan jadwal baru ke dalam database
// Route::post('/schedule/add', [ScheduleController::class, 'addSchedule'])->name('schedule.add');

Route::get('/location', function () {
    return view('location.location', ['title'=> 'Data Lokasi']);
});

Route::get('/report', function () {
    return view('report', ['title'=> 'Laporan']);
});