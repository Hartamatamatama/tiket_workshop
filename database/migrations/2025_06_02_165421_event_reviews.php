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
        Schema::create('event_reviews', function (Blueprint $table) {
            $table->id('event_review_id');
            $table->foreignId('event_id')->constrained('events', 'event_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->tinyInteger('rating'); // 1 - 5
            $table->text('comment')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users', 'user_id');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
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
