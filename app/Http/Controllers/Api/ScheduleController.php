<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller {

    public function show() {
        $guardId = Auth::guard('guard')->id();
        $schedules = Schedule::with(['guardRelation', 'shift'])->where('guard_id', $guardId)->get();
        return ScheduleResource::collection($schedules);
    }
}