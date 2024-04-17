<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Guard;
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
    }
}
