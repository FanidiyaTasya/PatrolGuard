<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LocationController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('pages.location.location', [
            'title'=> 'Data Lokasi',
            'locations' => Location::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validate = $request->validate([
            'location_name' => 'required',
        ]);
        Location::create($validate);
        if ($request->ajax()) {
            return response()->json(['success' => 'Berhasil menambah data!']);
        }
        return redirect('/location')->with('success', 'Berhasil menambah data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location) {
        $pdf = Pdf::loadview('pages.location.show', compact('location'));
        return $pdf->download('barcode.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location) {
        return response()->json([
            'id' => $location->id,
            'location_name' => $location->location_name,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location) {
        $validatedData = $request->validate([
            'location_name' => 'required',
        ]);
        $location->update($validatedData);
        if ($request->ajax()) {
            return response()->json(['success' => 'Berhasil mengubah data!']);
        }
        return redirect('/location')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location) {
        Location::destroy($location->id);
        return redirect('/location')->with('success', 'Berhasil menghapus data!');
    }
}
