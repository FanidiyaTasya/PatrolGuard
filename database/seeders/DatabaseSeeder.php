<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
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
        Guard::create([
            'name' => 'Guard',
            'email' => 'guard@gmail.com',
            'password' => bcrypt('1234')
        ]);
        Guard::factory()->count(5)->create();

        Shift::create([
            'shift_name' => 'Shift 1',
            'start_time' => '07:00:00',
            'end_time' => '15:00:00'
        ]);

        Schedule::create([
            'guard_id' => 1,
            'shift_id' => 1,
            'day' => 'Senin'
        ]);
    }
}
