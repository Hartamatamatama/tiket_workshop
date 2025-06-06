<?php
namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder {
    public function run() {
        Event::insert([
            ['title' => 'Tech Talk 1', 'description' => 'Tech event 1', 'location' => 'Hall A', 'date' => '2025-06-15', 'time' => '10:00:00', 'price' => 100.00, 'quota' => 50, 'status' => 'available', 'category_id' => 1, 'venue_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Business Bootcamp', 'description' => 'Business strategies', 'location' => 'Hall B', 'date' => '2025-06-16', 'time' => '14:00:00', 'price' => 150.00, 'quota' => 80, 'status' => 'available', 'category_id' => 2, 'venue_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Art for Everyone', 'description' => 'Creative art event', 'location' => 'Studio A', 'date' => '2025-06-17', 'time' => '13:00:00', 'price' => 90.00, 'quota' => 60, 'status' => 'available', 'category_id' => 3, 'venue_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Music & Sound', 'description' => 'Music insights', 'location' => 'Studio B', 'date' => '2025-06-18', 'time' => '15:00:00', 'price' => 120.00, 'quota' => 70, 'status' => 'available', 'category_id' => 4, 'venue_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Healthy Living', 'description' => 'Health workshop', 'location' => 'Room C', 'date' => '2025-06-19', 'time' => '09:00:00', 'price' => 80.00, 'quota' => 40, 'status' => 'available', 'category_id' => 5, 'venue_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Edu Talk', 'description' => 'Education seminar', 'location' => 'Auditorium', 'date' => '2025-06-20', 'time' => '11:00:00', 'price' => 110.00, 'quota' => 100, 'status' => 'available', 'category_id' => 6, 'venue_id' => 6, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

