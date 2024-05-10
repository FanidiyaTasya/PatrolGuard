<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        // notify()->success('Laravel Notify is awesome!');
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
        // Validasi request
        $request->validate([
            'location_name' => 'required|string|max:255|unique:lokasis',
        ]);

        // Simpan nama lokasi ke dalam database
        $lokasi = Location::create([
            'location_name' => $request->location_name,
        ]);

        // Generate barcode dari nama lokasi
        $barcode = $this->generateBarcode($request->location_name);

        // Simpan barcode ke dalam database
        $lokasi->barcode = $barcode;
        $lokasi->save();

        return redirect()->route('lokasi.index')->with('success', 'Lokasi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
    }
}
