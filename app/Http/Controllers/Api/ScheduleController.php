<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller {
    
    public function index($id) {
        // $schedules = Schedule::where('guard_id', $id)->get();
        // return response()->json(['data' => $schedules]);
        
        $schedules = Schedule::where('guard_id', $id)->get();
        return ScheduleResource::collection($schedules);
    }
}
