<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReportResource;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller {

    public function getAll() {
        $guardId = Auth::guard('guard')->id();
        $report = Report::where('guard_id', $guardId)->orderBy('created_at', 'desc')->get();
        return ReportResource::collection($report);
    }

    public function hasReportedToday() {
        $attendedToday = AttendanceController::hasAttendedToday();

        if ($attendedToday) {
            $guardId = Auth::guard('guard')->id();
            $today = Carbon::today();

            $report = Report::where('guard_id', $guardId)
                ->whereDate('created_at', $today)
                ->first();

            return response()->json(['reported_today' => !is_null($report)]);
        } else {
            return response()->json(['reported_today' => true]);
        }
    }

    public function postReport(Request $request) {
        $validated = $request->validate([
            'location_id' => 'required',
            'status' => 'required|in:Aman,Tidak Aman',
            'description' => 'required|string|max:255',
            'attachment' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $validated['guard_id'] = Auth::guard('guard')->id();

        if ($request->hasFile('attachment')) {
            $validated['attachment'] = $request->file('attachment')->store('report-attachments', 'public');
        }
        $report = Report::create($validated);

        return response()->json([
            'message' => 'Report created successfully',
            'data' => new ReportResource($report)
        ], 201);
    }
}
