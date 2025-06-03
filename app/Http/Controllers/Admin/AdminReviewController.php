<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function index() {
        return view('admin.reviews.index', ['reviews' => EventReview::with('user', 'event')->get()]);
    }

    public function approve($id) {
        $review = EventReview::findOrFail($id);
        $review->status = 'approved';
        $review->verified_by = auth()->id();
        $review->save();

        return redirect()->route('admin.reviews.index');
    }
}
