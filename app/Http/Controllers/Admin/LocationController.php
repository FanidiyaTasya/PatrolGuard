<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Generator;

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
    /*
    ada 3 cara, 
    1. masuk database jd svg, blm coba kl download bisa apa ga
    2. masuk database pathnya, jd nnt download dr folder gt tp gbisa muncul gmbarnya
    3. ga masuk database jd nnt downloadny lngsung krn pke library, tp hrs install extension
    */

    // public function store(Request $request) {
    //     $validatedData = $request->validate([
    //         'location_name' => 'required',
    //     ]);
    //     $barcode = QrCode::size(100)->generate($validatedData['location_name']);
    //     // dd($barcode); 

    //     // $qrcode = new Generator;
    //     // $qr = $qrcode->size(200)->generate(request()->get($validatedData['location_name']));
    //     // dd($qr);

    //     Location::create([
    //         'location_name' => $validatedData['location_name'],
    //         'barcode' => $barcode,
    //     ]);

    //     session()->flash('toast_message', 'Lokasi berhasil disimpan.');
    //     return redirect('/location');
    // }

    // // jdkan png masukin folder
    // public function store(Request $request) {
    //     $validatedData = $request->validate([
    //         'location_name' => 'required',
    //     ]);
    //     $qrCode = QrCode::size(300)->generate($validatedData['location_name']);
    //     // $qrCode = QrCode::format('png')->size(300)->errorCorrection('H')->generate($validatedData['location_name']);
    //     // $base64QRCode = 'data:image/png;base64,' . base64_encode($qrCode);

    //     $filename = 'barcode_' . time() . '.png';
    //     Storage::disk('public')->put('qr-code/' . $filename, $qrCode);

    //     Location::create([
    //         'location_name' => $validatedData['location_name'],
    //         'barcode' => 'qr-code/' . $filename,
    //     ]);

    //     session()->flash('toast_message', 'Lokasi berhasil disimpan.');
    //     return redirect('/location');
    // }

    /**
     * Display the specified resource.
     */
    public function show(Location $location) {
        $location = Location::findOrFail($location->id);
        return view('pages.location.show', compact('location'), [
            'title' => 'Location'
        ]);
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
    public function destroy(Location $location) {
        Location::destroy($location->id);
        session()->flash('toast_message', 'Data has been deleted!');
        return redirect('/location');
    }
}
