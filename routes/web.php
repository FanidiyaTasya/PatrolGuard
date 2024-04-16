<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuardController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get("/", [AuthController::class, 'signin'])->name('sign-in');
Route::post("/", [AuthController::class, 'authenticate']);
Route::post("/logout", [AuthController::class, 'logout']);

Route::get('/sign-up', function () {
    return view('auth.sign-up');
});
Route::get('/dashboard', function () {
    // if (Auth::guard('admin')->check()) {
    //     notify()->success('Halo selamat datang ' . Auth::guard('admin')->user()->name);
    // }
    return view('dashboard', ['title' => 'Dashboard']);
})->middleware('auth:admin');
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