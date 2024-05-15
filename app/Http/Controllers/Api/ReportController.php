<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReportResource;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller {
    
    public function getAll() {
        $guardId = Auth::guard('guard')->id();
        $attendances = Report::where('guard_id', $guardId)->get();
        return ReportResource::collection($attendances);
    }
}
