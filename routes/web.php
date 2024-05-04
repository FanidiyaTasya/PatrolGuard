<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuardController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;


Route::get("/", [AuthController::class, 'signin'])->name('sign-in');
Route::post("/", [AuthController::class, 'authenticate']);
Route::get('/sign-up', function () {
    return view('auth.sign-up');
});
Route::post("/logout", [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth:admin');
Route::resource('/guard', GuardController::class)->middleware('auth:admin');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/schedules', [ScheduleController::class, 'index']);
    
    Route::prefix('/schedules/guard')->group(function () {
        Route::get('/create', [ScheduleController::class, 'createGuard']);
        Route::post('/store', [ScheduleController::class, 'storeGuard']);
    });

    Route::prefix('/schedules/shift')->group(function () {
        Route::post('/store', [ScheduleController::class, 'storeShift']);
        Route::get('/{id}/edit', [ScheduleController::class, 'editShift']);
        Route::put('/{id}', [ScheduleController::class, 'updateShift']);
        Route::delete('/{id}/delete', [ScheduleController::class, 'destroyShift']);
    });
});

Route::get('/location', function () {
    notify()->success('Laravel Notify is awesome!');
    return view('location.location', ['title'=> 'Data Lokasi']);
});

Route::get('/presence', function () {
    notify()->success('Laravel Notify is awesome!');
    return view('presence.presence', ['title'=> 'Presensi']);
});

Route::get('/report', function () {
    return view('report', ['title'=> 'Laporan']);
});