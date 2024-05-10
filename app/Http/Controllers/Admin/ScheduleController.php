<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guard;
use App\Models\Schedule;
use App\Models\Shift;
use Illuminate\Http\Request;

class ScheduleController extends Controller {

    public function index(Request $request) {
        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
    
        $guardId = $request->input('guard');

        $schedules = Schedule::when($guardId,
        function ($query) use ($guardId) {
            $query->where('guard_id', $guardId);
        })->latest('id')->paginate(10);

        return view('pages.schedule.schedule', [
            'title' => 'Data Jadwal',
            'shifts'=> Shift::all(),
            'guards' => Guard::all(),
            'schedules' => $schedules
        ]);
    }

    public function createGuard() {
        return view('pages.schedule.insert', [
            'title' => 'Data Jadwal',
            'guards' => Guard::all(),
            'shifts' => Shift::all()
        ]);
    }

    public function storeGuard(Request $request) {
        $validatedData = $request->validate([
            'guard_id' => 'required',
            'shift_id' => 'required',
            'day' => 'required'
        ]);
        Schedule::create($validatedData);
        session()->flash('toast_message', 'Data has been added!');
        return redirect('/schedules');
    }

    public function editGuard($id) {
        return view('pages.schedule.edit', [
            'title' => 'Presensi',
            'schedule' => Schedule::find($id),
            'shifts' => Shift::all(),
            'guards' => Guard::all(),
        ]);
    }

    public function updateGuard(Request $request, $id) {
        $rules = $request->validate([
            'guard_id' => 'required',
            'shift_id' => 'required',
            'day' => 'required'
        ]);
    
        Schedule::where('id', $id)->update($rules);
        session()->flash('toast_message', 'Data has been added!');
        return redirect('/schedules');
    }

    public function destroyGuard($id) {
        $schedule = Schedule::find($id);
        $schedule->delete();
        session()->flash('toast_message', 'Data has been deleted!');
        return back();
    }

    public function createShift() {
        return view('pages.schedule.insert',
        [
            'title' => 'Data Jadwal'
        ]);
    }

    public function storeShift(Request $request) {
        $validatedData = $request->validate([
            'shift_name' => 'required',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);
        Shift::create($validatedData);
        session()->flash('toast_message', 'Data has been added!');
        return redirect('/schedules');
    }

    public function editShift($id) {
        $shift = Shift::find($id);
        return response()->json([
            'id' => $shift->id,
            'shift_name' => $shift->shift_name,
            'start_time' => $shift->start_time,
            'end_time' => $shift->end_time,
        ]);
    }

    public function updateShift(Request $request, $id) {
        $rules = [
            'shift_name' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
        ];
        $validatedData = $request->validate($rules);
        $shift = Shift::findOrFail($id);
        // dd($request->all());
        $shift->update($validatedData);

        session()->flash('toast_message', 'Data has been updated!');
        return redirect('/schedules');
    }

    public function destroyShift($id) {
        $shift = Shift::find($id);
        $shift->delete();
        session()->flash('toast_message', 'Data has been deleted!');
        return back();
    }
}