<?php

use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ScheduleController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth.guard')->group(function () {
    // dashboard
    Route::get('/today-presence', [AttendanceController::class, 'getToday']);
    Route::get('/history-presence', [AttendanceController::class, 'getAll']);
    Route::get('/report/today', [ReportController::class, 'hasReportedToday']);

    Route::get('/history-report', [ReportController::class, 'getAll']);
    
    // schedule
    Route::get('/schedule', [ScheduleController::class, 'show']);
    
    // Route::get('/get-user', [UserController::class, 'getUser']);
    Route::post('/logout', [UserController::class, 'logout']);
});