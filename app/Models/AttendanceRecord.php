<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model {
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function attendance() {
        return $this->belongsTo(Attendance::class);
    }

    public function guardRelation() {
        return $this->belongsTo(Guard::class, 'guard_id');
    }
}
