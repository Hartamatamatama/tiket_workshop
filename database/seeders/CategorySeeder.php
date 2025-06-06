<?php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    public function run() {
        Category::insert([
            ['name' => 'Technology', 'description' => 'Events about tech', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business', 'description' => 'Business workshops', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Art', 'description' => 'Artistic events', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Music', 'description' => 'Music-related workshops', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Health', 'description' => 'Health & Wellness', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Education', 'description' => 'Educational workshops', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

