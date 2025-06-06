<?php
namespace Database\Seeders;

use App\Models\Venue;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder {
    public function run() {
        Venue::insert([
            ['name' => 'Venue 1', 'address' => 'Address 1', 'capacity' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Venue 2', 'address' => 'Address 2', 'capacity' => 200, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Venue 3', 'address' => 'Address 3', 'capacity' => 150, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Venue 4', 'address' => 'Address 4', 'capacity' => 250, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Venue 5', 'address' => 'Address 5', 'capacity' => 80, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Venue 6', 'address' => 'Address 6', 'capacity' => 300, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
