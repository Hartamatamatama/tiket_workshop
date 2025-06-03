<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->latest()->get();
        return view('user.orders.index', compact('orders'));
    }

    public function create(Event $event)
    {
        return view('user.orders.create', compact('event'));
    }

    public function store(Request $request, Event $event)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:3',
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'event_id' => $event->id,
            'quantity' => $request->quantity,
            'status' => 'pending',
        ]);

        return redirect()->route('payment.show', $order->id);
    }
}
