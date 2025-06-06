<?php
namespace Database\Seeders;

use App\Models\EventReview;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder {
    public function run() {
        EventReview::insert([
            ['event_id' => 1, 'user_id' => 1, 'rating' => 5, 'comment' => 'Great event!', 'verified_by' => 3, 'status' => 'approved', 'created_at' => now(), 'updated_at' => now()],
            ['event_id' => 2, 'user_id' => 2, 'rating' => 4, 'comment' => 'Informative session', 'verified_by' => 1, 'status' => 'approved', 'created_at' => now(), 'updated_at' => now()],
            ['event_id' => 3, 'user_id' => 3, 'rating' => 3, 'comment' => 'It was okay', 'verified_by' => 1, 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
            ['event_id' => 4, 'user_id' => 4, 'rating' => 2, 'comment' => 'Could be better', 'verified_by' => 2, 'status' => 'rejected', 'created_at' => now(), 'updated_at' => now()],
            ['event_id' => 5, 'user_id' => 5, 'rating' => 4, 'comment' => 'Nice presentation', 'verified_by' => 3, 'status' => 'approved', 'created_at' => now(), 'updated_at' => now()],
            ['event_id' => 6, 'user_id' => 6, 'rating' => 5, 'comment' => 'Excellent experience!', 'verified_by' => 1, 'status' => 'approved', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
