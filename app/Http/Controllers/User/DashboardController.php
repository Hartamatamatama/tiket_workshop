<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data user yang sedang login
        $user = auth()->user();

        // Ambil data terkait lainnya jika diperlukan, misalnya bookings, payments, atau reviews
        $bookings = $user->bookings()->latest()->take(5)->get();
        $payments = $user->payments()->latest()->take(5)->get();
        $reviews = $user->reviews()->latest()->take(5)->get();

        // Kembalikan view dashboard dengan data yang diperlukan
        return view('user.dashboard', compact('user', 'bookings', 'payments', 'reviews'));
    }
}
