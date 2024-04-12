<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guard extends Model {
    use HasFactory;
    
    protected $table = "guards";
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'nik','fullname_guard','birth_date','email_guard',
    //     'password_guard','phone_number','address','photo'
    // ];

    public $timestamps = false;
}
