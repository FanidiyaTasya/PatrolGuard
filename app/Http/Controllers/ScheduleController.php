<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Guard;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function showSchedule()
    {
        // Mengambil data dari database
        $schedules = DB::table('schedules')->get();

        // Mengirim data ke view 
        return view('schedule.schedule', compact('schedules'));
    }

    // Menampilkan view insert dengan data guard
    public function showInsertSchedule()
    {
        // // Mendapatkan data guard dari database
        // $guards = Guard::all();

        // // Mengirim data ke view 'schedule.insert-schedule'
        // return view('schedule.insert-schedule', compact('guards'));
        return view('schedule.insert-schedule');
    }

    // Menambahkan jadwal baru
    public function addSchedule(Request $request)
    {
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
}