<?php

use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ScheduleController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth.guard')->group(function () {
    // dashboard
    Route::get('/get-user', [UserController::class, 'getUser']);
    Route::get('/today-presence', [AttendanceController::class, 'getToday']);
    Route::get('/history-presence', [AttendanceController::class, 'getAll']);
    Route::post('/permission', [AttendanceController::class, 'postPermission']);
    Route::get('/today-report', [ReportController::class, 'hasReportedToday']);
    Route::post('/check-in', [AttendanceController::class, 'checkIn']);
    Route::post('/check-out', [AttendanceController::class, 'checkOut']);
    
    // schedule
    Route::get('/schedule', [ScheduleController::class, 'show']);

    // report
    Route::get('/history-report', [ReportController::class, 'getAll']);
    Route::post('/report/store', [ReportController::class, 'postReport']);
    
    Route::post('/logout', [UserController::class, 'logout']);
});