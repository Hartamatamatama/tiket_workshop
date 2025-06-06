<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run() {
        User::insert([
            ['name' => 'User 1', 'email' => 'user1@example.com', 'password' => Hash::make('password'), 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'User 2', 'email' => 'user2@example.com', 'password' => Hash::make('password'), 'role' => 'user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'User 3', 'email' => 'user3@example.com', 'password' => Hash::make('password'), 'role' => 'atasan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'User 4', 'email' => 'user4@example.com', 'password' => Hash::make('password'), 'role' => 'user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'User 5', 'email' => 'user5@example.com', 'password' => Hash::make('password'), 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'User 6', 'email' => 'user6@example.com', 'password' => Hash::make('password'), 'role' => 'user', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
