<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller {
    
    public function show($guardId) {
        $schedules = Schedule::with(['guardRelation', 'shift'])->where('guard_id', $guardId)->get();
        return ScheduleResource::collection($schedules);
        // return response()->json(['data' => $schedules]);
    }
}
