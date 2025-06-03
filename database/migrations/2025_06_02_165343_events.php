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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->decimal('price', 10, 2);
            $table->integer('quota');
            $table->enum('status', ['available', 'unavailable'])->default('available');
            $table->foreignId('category_id')->constrained('categories', 'category_id');
            $table->foreignId('venue_id')->constrained('venues', 'venue_id');
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
