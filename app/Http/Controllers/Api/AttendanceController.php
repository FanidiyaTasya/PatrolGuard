<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttendanceResource;
use App\Models\Attendance;
use App\Models\Permission;
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
                                  ->orderBy('updated_at', 'desc')
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

    public function checkIn(Request $request, $id) {
        $validated = $request->validate([
            'check_in_time' => 'required|date_format:H:i:s',
        ]);

        $attendance = Attendance::findOrFail($id);
        $attendance->update([
            'check_in_time' => $validated['check_in_time'],
            'status' => 'Hadir',
        ]);

        return response()->json(['message' => 'Successfully made a presence.'], 200);
    }

    public function checkOut(Request $request, $id) {
        $validated = $request->validate([
            'check_in_time' => 'required|date_format:H:i:s',
        ]);

        $attendance = Attendance::findOrFail($id);
        $attendance->update([
            'check_in_time' => $validated['check_in_time'],
        ]);

        return response()->json(['message' => 'Successfully made a presence.'], 200);
    }

    public static function hasAttendedToday() {
        $guardId = Auth::guard('guard')->id();
        $today = Carbon::today()->toDateString();
        $attendance = Attendance::where('guard_id', $guardId)
                                ->where('date', $today)
                                ->whereNotNull('check_in_time')
                                ->first();

        return !is_null($attendance);
    }

    public function postPermission(Request $request) {
        $validated = $request->validate([
            'permission_date' => 'required',
            'reason' => 'required|string|max:150',
            'information' => 'nullable|file|max:2048'
        ]);
        $validated['guard_id'] = Auth::guard('guard')->id();

        if ($request->hasFile('information')) {
            $validated['information'] = $request->file('information')->store('permission-files', 'public');
        }
        $permission = Permission::create($validated);

        return response()->json([
            'message' => 'Permission created successfully', 
            'data' => $permission
        ], 201);
    }
}
