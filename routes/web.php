<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\EventController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\ReviewController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');

Route::get('/about', function () {
    return view('about');
})->name('about');

// User authentication routes
Route::get('/login', function () {
    return view('login');
})->name('login');

// AUTH USER ROUTES
Route::middleware(['auth'])->group(function () {
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

    Route::get('/order/{event}', [OrderController::class, 'create'])->name('order.create');
    Route::post('/order/{event}', [OrderController::class, 'store'])->name('order.store');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('/payment/{order}', [PaymentController::class, 'show'])->name('payment.show');
    Route::post('/payment/{order}', [PaymentController::class, 'store'])->name('payment.store');

    Route::get('/review/{event}', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/review/{event}', [ReviewController::class, 'store'])->name('review.store');
});

// Admin routes
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('events', AdminEventController::class);
    Route::resource('venues', AdminVenueController::class);
    Route::resource('categories', AdminCategoryController::class);

    Route::get('payments', [AdminPaymentController::class, 'index'])->name('payments.index');
    Route::post('payments/{id}/verify', [AdminPaymentController::class, 'verify'])->name('payments.verify');

    Route::get('reviews', [AdminReviewController::class, 'index'])->name('reviews.index');
    Route::post('reviews/{id}/approve', [AdminReviewController::class, 'approve'])->name('reviews.approve');
});

