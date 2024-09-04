<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert Admin User
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), // Ganti dengan password yang aman
            'role' => 1, // Role 1 for Admin
        ]);

        // Insert Regular User
        DB::table('users')->insert([
            'name' => 'PSI',
            'email' => 'adminPSI@gmail.com',
            'password' => Hash::make('adminPSI123'), // Ganti dengan password yang aman
            'role' => 2, // Role 2 for Regular PSI
        ]);
    }
}
