<?php
namespace Database\Seeders;

use App\Models\BookingTicket;
use Illuminate\Database\Seeder;

class BookingTicketSeeder extends Seeder {
    public function run() {
        BookingTicket::insert([
            ['user_id' => 1, 'event_id' => 1, 'quantity' => 2, 'total_price' => 200.00, 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'event_id' => 2, 'quantity' => 1, 'total_price' => 150.00, 'status' => 'paid', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'event_id' => 3, 'quantity' => 3, 'total_price' => 270.00, 'status' => 'cancelled', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 4, 'event_id' => 4, 'quantity' => 1, 'total_price' => 120.00, 'status' => 'paid', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 5, 'event_id' => 5, 'quantity' => 2, 'total_price' => 160.00, 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 6, 'event_id' => 6, 'quantity' => 1, 'total_price' => 110.00, 'status' => 'paid', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
