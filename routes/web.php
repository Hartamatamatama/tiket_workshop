<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\EventController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminPaymentController;
use App\Http\Controllers\Admin\AdminReviewController;
use App\Http\Controllers\Admin\AdminVenueController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRoleMiddleware;

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
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->Middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->Middleware('guest');;
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// CHECK ROLE ROUTE
Route::middleware(['auth' , 'role:admin'])->get('/admin/dashboard', fn() => view('admin.dashboard'));
// Route::middleware('role:user')->get('/user/home', fn() => view('tickets'))->name('user.home');
// Route::middleware(['auth', CheckRole::class . ':atasan'])->get('/atasan/overview', fn() => view('atasan.overview'));

// AUTH USER ROUTES
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', fn() => view('user.dashboard'))->name('user.dashboard');

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

// AUTH ADMIN ROUTES
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('events', AdminEventController::class);
    Route::resource('venues', AdminVenueController::class);
    Route::resource('categories', AdminCategoryController::class);

    Route::get('payments', [AdminPaymentController::class, 'index'])->name('payments.index');
    Route::post('payments/{id}/verify', [AdminPaymentController::class, 'verify'])->name('payments.verify');

    Route::get('reviews', [AdminReviewController::class, 'index'])->name('reviews.index');
    Route::post('reviews/{id}/approve', [AdminReviewController::class, 'approve'])->name('reviews.approve');
});

