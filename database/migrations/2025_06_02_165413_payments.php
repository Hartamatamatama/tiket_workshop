<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignId('ticket_id')->constrained('booking_tickets', 'booking_ticket_id');
            $table->foreignId('payment_method_id')->constrained('payment_methods', 'payment_method_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->date('payment_date');
            $table->string('proof_of_payment');
            $table->enum('status', ['pending', 'verified', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
