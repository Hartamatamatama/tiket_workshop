<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Event;
use App\Models\User;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role', 'user')->first();
        $event = Event::first();

        Order::create([
            'user_id' => $user->id,
            'event_id' => $event->id,
            'ticket_quantity' => 2,
            'status' => 'pending',
        ]);
    }
}
