<?php

use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth.guard')->group(function () {
    // dashboard
    Route::get('/today-presence', [AttendanceController::class, 'getToday']);
    Route::get('/history-presense', [AttendanceController::class, 'getAll']);
    
    Route::get('/schedule', [ScheduleController::class, 'show']);
    
    Route::get('/get-user', [UserController::class, 'getUser']);
    Route::post('/logout', [UserController::class, 'logout']);
});
