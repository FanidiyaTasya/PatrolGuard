<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttendanceResource;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller {
    
    public function getAll() {
        $guardId = Auth::guard('guard')->id();
        $attendances = Attendance::where('guard_id', $guardId)
                                  ->whereNotNull('check_in_time')
                                  ->whereNotNull('check_out_time')
                                  ->whereNotNull('status')
                                  ->get();
        return AttendanceResource::collection($attendances);
    }

    public function getToday() {
        $guardId = Auth::guard('guard')->id();
        $today = Carbon::today()->toDateString();
        $attendance = Attendance::where('guard_id', $guardId)
            ->where('date', $today)
            ->get();
        
        return AttendanceResource::collection($attendance);
    }

    public function postCheckIn(Request $request) {
        
    }
}
