<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleRequest;
use App\Http\Requests\ShiftRequest;
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

    public function storeGuard(ScheduleRequest $request) {
        $validatedData = $request->validated();
        Schedule::create($validatedData);
        return redirect('/schedules')->with('success', 'Berhasil menambah data!');
    }

    public function editGuard($id) {
        return view('pages.schedule.edit', [
            'title' => 'Presensi',
            'schedule' => Schedule::find($id),
            'shifts' => Shift::all(),
            'guards' => Guard::all(),
        ]);
    }

    public function updateGuard(ScheduleRequest $request, $id) {
        $rules = $request->validated();
    
        Schedule::where('id', $id)->update($rules);
        return redirect('/schedules')->with('success', 'Berhasil mengubah data!');
    }

    public function destroyGuard($id) {
        $schedule = Schedule::find($id);
        $schedule->delete();
        return back()->with('success', 'Berhasil mengahapus data!');
    }

    public function createShift() {
        return view('pages.schedule.insert',
        [
            'title' => 'Data Jadwal'
        ]);
    }

    public function storeShift(ShiftRequest $request) {
        $validatedData = $request->validated();
        Shift::create($validatedData);
        if ($request->ajax()) {
            return response()->json(['success' => 'Berhasil menambah data!']);
        }
        return redirect('/schedules')->with('success', 'Berhasil menambah data!');
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

    public function updateShift(ShiftRequest $request, $id) {
        $validatedData = $request->validated();
        $shift = Shift::findOrFail($id);
        // dd($request->all());
        $shift->update($validatedData);
        if ($request->ajax()) {
            return response()->json(['success' => 'Berhasil mengubah data!']);
        }
        return redirect('/schedules')->with('success', 'Berhasil mengubah data!');
    }

    public function destroyShift($id) {
        $shift = Shift::find($id);
        $shift->delete();
        return back()->with('success', 'Berhasil menghapus data!');
    }
}