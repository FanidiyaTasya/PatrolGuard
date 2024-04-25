<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Shift;
use Illuminate\Http\Request;

class ScheduleController extends Controller {

    public function index() {
        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $shifts = Shift::all();
        $schedules = Schedule::all();
        return view('schedule.schedule', compact('shifts', 'schedules'),
        [
            'title' => 'Data Jadwal'
        ]);
    }

    public function createGuard() {
        return view('schedule.insert',
        [
            'title' => 'Data Jadwal'
        ]);
    }

    public function storeGuard(Request $request) {
        // Validasi input
        $request->validate([
            'guard_id' => 'required',
            'shift' => 'required',
            'tanggal' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        // Membuat jadwal baru
        Schedule::create([
            'guard_id' => $request->guard_id,
            'shift' => $request->shift,
            'tanggal' => $request->tanggal,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Jadwal berhasil ditambahkan!');
    }

    public function showGuard(Schedule $schedule) {
        // tampilan lihat detail datanya
    }

    public function editGuard(Schedule $schedule) {
        // tampilan form editnya
    }

    public function updateGuard(Request $request, Schedule $schedule) {
        // edit datanya
    }

    public function destroyGuard(Schedule $schedule) {
        // hapus datanya
    }

    public function createShift() {
        return view('schedule.insert',
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

        return redirect('/schedules')->with('toast_success', 'Data has been added!');
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
        return redirect('/schedules')->with('toast_success', 'Data has been updated!');
    }

    public function destroyShift($id) {
        $shift = Shift::find($id);
        $shift->delete();
        return redirect('/schedules')->with('toast_success', 'Data has been deleted!');
    }
}