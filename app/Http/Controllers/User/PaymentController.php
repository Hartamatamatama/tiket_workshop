<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show(Order $order)
    {
        return view('user.payment.show', compact('order'));
    }

    public function store(Request $request, BookingTicket $booking)
    {
        $request->validate([
            'proof' => 'required|image|max:2048',
        ]);

        $path = $request->file('proof')->store('payments', 'public');

        Payment::create([
            'order_id' => $booking->booking_ticket_id,
            'proof' => $path,
            'status' => 'waiting',
        ]);

        return redirect()->route('orders.index')->with('success', 'Bukti pembayaran dikirim.');
    }
}
