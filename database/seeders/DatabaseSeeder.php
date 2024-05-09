<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Attendance;
use App\Models\Guard;
use App\Models\Schedule;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        Admin::create([
            'name' => 'Fanidiya Tasya',
            'email' => 'tasya@gmail.com',
            'password' => bcrypt('1234')
        ]);
        Guard::factory()->count(3)->create();

        Shift::create([
            'shift_name' => 'Shift 1',
            'start_time' => '06:00:00',
            'end_time' => '14:00:00'
        ]);

        Shift::create([
            'shift_name' => 'Shift 2',
            'start_time' => '14:00:00',
            'end_time' => '22:00:00'
        ]);

        Shift::create([
            'shift_name' => 'Shift 3',
            'start_time' => '22:00:00',
            'end_time' => '06:00:00'
        ]);

        Schedule::factory()->count(15)->create();

        Attendance::create([
            'shift_id' => '1',
            'guard_id' => '1',  
            // 'date' => '2023-08-24',
            'check_in_time' => '06:00:00',
            'check_out_time' => '10:00:00',
            'status' => 'Hadir'
        ]);
    }
}
