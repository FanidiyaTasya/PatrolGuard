<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Shift;
use Illuminate\Http\Request;

class ScheduleController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $shifts = Shift::all();
        $schedules = Schedule::all();
        return view('schedule.schedule', compact('shifts', 'schedules'),
        [
            'title' => 'Data Jadwal'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('schedule.insert',
        [
            'title' => 'Data Jadwal'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
