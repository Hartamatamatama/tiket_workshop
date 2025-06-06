@extends('user.layouts.user')
@section('title', 'Beranda | Digital Mastery')
@section('content')
<main class="container mx-auto px-6 py-16 md:py-16">
    {{-- Greeting Section --}}
    <h1 class="md:text-3xl text-2xl font-bold text-white mb-16">Selamat datang, <span class="text-blue-500 font-bold">{{ $user->name }}</span>!</h1>

    <div class="grid md:grid-cols-2 grid-cols-1">
    {{-- Informasi Akun --}}
        <div class="bg-blue-950 border-blue-400/30 border hover:border-blue-500 transition duration-300 rounded-lg shadow p-6 mb-3 mx-1.5">
            <h2 class="md:text-2xl text-xl font-bold text-blue-500 mb-4">Informasi Akun</h2>
            <div class="text-gray-300">
                <p><strong>Nama :</strong> {{ $user->name }}</p>
                <p><strong>Email :</strong> {{ $user->email }}</p>
                <p><strong>Bergabung Sejak :</strong> {{ $user->created_at->format('d M Y') }}</p>
            </div>
        </div>
        {{-- Booking Terbaru --}}
        <div class="bg-blue-950 border-blue-400/30 border hover:border-blue-500 transition duration-300 rounded-lg shadow p-6 mb-3 mx-1.5">
            <div class="flex items-center justify-between mb-4">
                <h2 class="md:text-2xl text-xl font-bold text-blue-500 mb-4">Booking Terbaru</h2>
                <a href="#" class="md:text-lg text-xl font-semibold text-blue-500 mb-4 cursor-pointer hover:text-blue-700 transition-all">Lihat Semua</a>
            </div>
            <div class="text-gray-300">
                @if($bookings->isEmpty())
                    <p>Kamu belum booking event apapun.</p>
                @else
                    <ul class="space-y-4">
                        @foreach($bookings as $booking)
                            <li class="cursor-pointer">
                                <p><strong>Event:</strong> {{ $booking->event->title ?? '-' }}</p>
                                <p><strong>Harga Tiket:</strong> Rp{{ number_format($booking->event->price,0,',','.')}}</p>
                                <p><strong>Tanggal Booking:</strong> {{ $booking->created_at->format('d M Y') }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        {{-- Payment Terbaru --}}
        <div class="bg-blue-950 border-blue-400/30 border hover:border-blue-500 transition duration-300 rounded-lg shadow p-6 mb-3 mx-1.5">
            <h2 class="md:text-2xl text-xl font-bold text-blue-500 mb-4">Pembayaran Terbaru</h2>
            <div class="text-gray-300">
                @if($payments->isEmpty())
                    <p>Tidak ada data pembayaran terbaru.</p>
                @else
                    <ul class="space-y-4">
                        @foreach($payments as $payment)
                            <li class="">
                                <p><strong>Nominal:</strong> Rp{{ number_format($payment->booking->total_price, 0, ',', '.') }}</p>
                                <p><strong>Status:</strong> {{ ucfirst($payment->status) }}</p>
                                <p><strong>Tanggal:</strong> {{ $payment->created_at->format('d M Y') }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>  
    </div>

    {{-- List Semua Event --}}
    <div class="bg-blue-950 border-blue-400/30 border hover:border-blue-500 transition duration-300 rounded-lg shadow p-6 mb-3 mx-1.5">
        <h2 class="md:text-2xl text-xl font-bold text-blue-500 mb-4">Semua Event</h2>
        <div class="text-gray-300">
            @if($event_lists->isEmpty())
                <p>Tidak ada data event.</p>
            @else
                <ul class="space-y-4">
                    @foreach($event_lists as $event)
                        <li class="">
                            <p><strong>Judul:</strong> {{ $event->title }}</p>
                            <p><strong>Kapasitas:</strong> {{ $event->description }}</p>
                            <p><strong>Alamat:</strong> {{ $event->location }}</p>
                            <p><strong>Harga:</strong> Rp{{ number_format($event->price, 0, ',', '.') }}</p>
                            <p><strong>Tanggal:</strong> {{ $event->date }}</p>

                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>  
    
</main>
@endsection
