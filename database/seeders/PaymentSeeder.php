<?php
namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder {
    public function run() {
        Payment::insert([
            ['ticket_id' => 1, 'payment_method_id' => 1, 'user_id' => 1, 'payment_date' => now(), 'proof_of_payment' => 'proof1.jpg', 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
            ['ticket_id' => 2, 'payment_method_id' => 2, 'user_id' => 2, 'payment_date' => now(), 'proof_of_payment' => 'proof2.jpg', 'status' => 'verified', 'created_at' => now(), 'updated_at' => now()],
            ['ticket_id' => 3, 'payment_method_id' => 3, 'user_id' => 3, 'payment_date' => now(), 'proof_of_payment' => 'proof3.jpg', 'status' => 'rejected', 'created_at' => now(), 'updated_at' => now()],
            ['ticket_id' => 4, 'payment_method_id' => 4, 'user_id' => 4, 'payment_date' => now(), 'proof_of_payment' => 'proof4.jpg', 'status' => 'verified', 'created_at' => now(), 'updated_at' => now()],
            ['ticket_id' => 5, 'payment_method_id' => 5, 'user_id' => 5, 'payment_date' => now(), 'proof_of_payment' => 'proof5.jpg', 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
            ['ticket_id' => 6, 'payment_method_id' => 6, 'user_id' => 6, 'payment_date' => now(), 'proof_of_payment' => 'proof6.jpg', 'status' => 'verified', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
