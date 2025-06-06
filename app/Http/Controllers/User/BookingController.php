<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\Event;
use App\Models\BookingTicket;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = BookingTicket::where('user_id', auth()->id())->latest()->get();
        return view('user.bookings.index', compact('bookings'));
    }

    public function show($slug)
    {
        $detail_booking = BookingTicket::where('user_id', auth()->id())
            ->where('booking_ticket_id', $slug)
            ->first();

        return view('user.bookings.show', compact('detail_booking'));
    }
}
