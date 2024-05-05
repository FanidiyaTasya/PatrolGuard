<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Guard;
use App\Models\Shift;
use Illuminate\Http\Request;

class AttendanceController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('presence.attendance', [
            'title' => 'Presensi',
            'attendances' => Attendance::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('presence.create', [
            'title' => 'Presensi',
            'guards' => Guard::all(),
            'shifts' => Shift::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'shift_id' => 'required|exists:shifts,id',
            'guard_id' => 'required|exists:guards,id',
        ]);

        if (Attendance::where('date', $validatedData['date'])
                ->where('shift_id', $validatedData['shift_id'])
                ->where('guard_id', $validatedData['guard_id'])
                ->exists()) {
        return redirect('/presence')->with('toast_error', 'Data already exists!');
        }

        Attendance::create($validatedData);
        return redirect('/presence')->with('toast_success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $attendance = Attendance::findOrFail($id);
        
        return view('presence.show', [
            'title' => 'Presensi',
            'attendance' => $attendance,
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $attendance = Attendance::findOrFail($id);
        return view('presence.edit', [
            'title' => 'Presensi',
            'attendance' => $attendance,
            'shifts' => Shift::all(),
            'guards' => Guard::all(),
        ]);
    }    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $rules = $request->validate([
            'date' => 'required',
            'shift_id' => 'required',
            'guard_id' => 'required'
        ]);
    
        Attendance::where('id', $id)->update($rules);
        return redirect('/presence')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $shift = Attendance::find($id);
        $shift->delete();
        return back()->with('toast_success', 'Data has been deleted!');
    }
}
