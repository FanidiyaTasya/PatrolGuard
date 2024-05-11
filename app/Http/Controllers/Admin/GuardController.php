<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class GuardController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $title = 'Delete!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $guards = Guard::paginate(5);
        return view('pages.guard.guard', compact('guards'), [
            'title' => 'Data Satpam'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('pages.guard.create', [
            'title' => 'Data Satpam'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'email' => 'required|email|unique:guards,email',
            'password' => 'required|min:6',
            'phone_number' => 'required',
            'address' => 'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        if ($request->hasFile('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('photo-profile');
        }

        Guard::create($validatedData);
        // return redirect('/guard')->with('toast_success','Data has been added!');
        session()->flash('toast_message', 'Data has been added!');
        return redirect('/guard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guard $guard) {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guard $guard) {
        return view('pages.guard.edit', [
            'title' => 'Data Satpam',
            'guard' => $guard
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guard $guard) {
        $rules = [
            'name' => 'required',
            'birth_date' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'phone_number' => 'required',
            'address' => 'required',
        ];
        if ($request->email != $guard->email) {
            $rules['email'] = 'required|email|unique:guards,email';
        }

        if ($request->filled('password')) {
            $rules['password'] = 'min:6';
        }
        $validatedData = $request->validate($rules);

        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        if ($request->file('photo')) {
            if ($guard->photo) {
                Storage::delete($guard->photo);
            }
            $validatedData['photo'] = $request->file('photo')->store('photo-profile');
        }
        $guard->update($validatedData);
    
        session()->flash('toast_message', 'Data has been updated!');
        // return redirect('/guard')->with('toast_success','Data has been updated!');
        return redirect('/guard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guard $guard) {
        Guard::destroy($guard->id);
        // return redirect('/guard')->with('toast_success','Data has been deleted!');
        session()->flash('toast_message', 'Data has been deleted!');
        return redirect('/guard');
    }
}
