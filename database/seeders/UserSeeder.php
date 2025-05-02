<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,

       ]);

        User::create([
            'name' => 'Normal User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2,

        ]);

        User::create([
            'name' => 'Coordinator',
            'email' => 'coordinator@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 3,

        ]);
    }
}
