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
        $report = Report::where('guard_id', $guardId)->get();
        return ReportResource::collection($report);
    }
    
    public function hasReportedToday() {
        $guardId = Auth::guard('guard')->id();
        $today = Carbon::today();
        
        $report = Report::where('guard_id', $guardId)
                        ->whereDate('created_at', $today)
                        ->first();

        return response()->json(['reported_today' => !is_null($report)]);
    }
}
