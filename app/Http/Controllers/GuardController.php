<?php

namespace App\Http\Controllers;

use App\Models\Guard;
use Illuminate\Http\Request;

class GuardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $guards = Guard::all();
        return view('guard.guard', compact('guards'), 
        [
            'title' => 'Data Satpam'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('guard.create',
        [
            'title' => 'Data Satpam'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // $validate = $request->validate([
        //     'fullname' => 'required|max:150',
        //     'email' => 'required',
        //     'phone_number' => 'required',
        //     'birth_date' => 'required',
        // ]);
        // Guard::create($validate);

        $validatedData = $request->validate([
            'fullname' => 'required',
            'birth_date' => 'required',
            'email' => 'required|email|unique:guards,email',
            'password' => 'required|min:6',
            'phone_number' => 'required',
            'address' => 'required',
        ], [
            'fullname.required' => 'Kolom Nama harus diisi',
            'birth_date.required' => 'Tanggal Lahir harus diisi',
            'email.required' => 'Kolom Email harus diisi',
            'email.email' => 'Format Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Kolom Password harus diisi',
            'password.min' => 'Password harus memiliki minimal 6 karakter',
            'phone_number.required' => 'Kolom Nomor Telepon harus diisi',
            'address.required' => 'Kolom Alamat harus diisi',
        ]);
        
        Guard::create($validatedData);
        return redirect('/guard')->with('success','Berhasil ditambahkan!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Guard $guard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guard $guard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guard $guard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guard $guard)
    {
        //
    }
}
