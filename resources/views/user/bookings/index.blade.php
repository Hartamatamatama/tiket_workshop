@extends('user.layouts.user')
@section('title', 'Booking | Digital Mastery')
@section('content')
<main class="container mx-auto px-6 py-16 md:py-16">
    {{-- Booking List --}}
    <div class="grid md:grid-cols-2 grid-cols-1 gap-6" >
        {{-- Booking Card --}}
        @if($bookings->isEmpty())
        <p class="text-gray-300">Kamu belum booking event apapun.</p>
        @else
        <div>
            @foreach($bookings as $booking)
            <div
                class="bg-blue-950 border-blue-400/30 border hover:border-blue-500 transition duration-300 rounded-lg shadow p-6 mb-3 mx-1.5">
                <h2 class="md:text-2xl text-xl font-bold text-blue-500 mb-4">{{ $booking->event->title ?? '-' }}</h2>
                <ul class="space-y-4">
                    <li class="cursor-pointer">
                        <p><strong>Total Harga:</strong> Rp{{ number_format($booking->total_price,0,',','.')}}</p>
                        <p><strong>Lokasi:</strong> {{ $booking->event->location }}</p>
                        <p><strong>Tanggal & Waktu: </strong> {{ $booking->event->date }}, {{ $booking->event->time  }}</p>
                        <p><strong>Kuantitas: </strong> {{ $booking->quantity }}</p>
                        <p><strong>Status: </strong> {{ $booking->status }}</p>
                    </li>
                </ul>
                <a href="{{ route('user.bookings.show', ['slug'=>$booking->booking_ticket_id]) }}" class="cursor-pointer text-blue-500">Lihat Detail</a>
            </div>
        @endforeach
        </div>
        @endif
    </div>
</main>
@endsection
