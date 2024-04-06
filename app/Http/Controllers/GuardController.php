<?php

namespace App\Http\Controllers;

use App\Models\Guard;
use Illuminate\Http\Request;

class GuardController extends Controller {
    
    public function showGuard() {
        $guards = Guard::all();
        return view('guard.guard', compact('guards'));
    }

    public function formInsert() {
        return view('guard.insert');
    }

    public function insert(Request $request) {

    }

    public function formupdate(){

    }

    public function update() {

    }

    public function delete() {

    }
    
}
