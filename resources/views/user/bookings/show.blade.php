@extends('user.layouts.user')
@section('title', 'Booking | Digital Mastery')
@section('content')
<main class="container mx-auto px-6 py-16 md:py-16">
    {{-- Booking List --}}
    <div class="grid grid-cols-1 gap-6">
        {{-- Booking Card --}}
        @if($detail_booking)
        <div>
            <div
                class="bg-blue-950 border-blue-400/30 border hover:border-blue-500 transition duration-300 rounded-lg shadow p-6 mb-3 mx-1.5">
                <h2 class="md:text-2xl text-xl font-bold text-blue-500 mb-4">{{ $detail_booking->event->title ?? '-' }}
                </h2>
                <ul class="space-y-4">
                    <li class="cursor-pointer">
                        <p><strong>Total Harga:</strong> Rp{{ number_format(10000,0,',','.')}}</p>
                        <p><strong>Lokasi:</strong> {{ $detail_booking->event->location }}</p>
                        <p><strong>Tanggal & Waktu: </strong> {{ $detail_booking->event->date }},
                            {{ $detail_booking->event->time  }}
                        </p>
                        <p><strong>Kuantitas: </strong> {{ $detail_booking->quantity }}</p>
                        <p><strong>Status: </strong> {{ $detail_booking->status }}</p>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Upload Transfer Section --}}
        <h1>Upload Bukti Pembayaran</h1>

        <form action="{{ route('payment.store', $detail_booking->payment->payment_method_id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="proof" class="form-label block mb-3">Upload Bukti (jpg/png)</label>
                <input type="file" name="proof" id="proof" class="form-input p-3 block rounded-md cursor-pointer"
                    accept="image/png, image/jpeg" onchange="previewImage(event)" required>

                {{-- Preview --}}
                <div class="mt-4">
                    <img id="imagePreview" class="max-w-xs rounded-md shadow" style="display: none;" />
                </div>
            </div>

            <div class="pt-6">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 btn-glow text-white px-8 py-4 rounded-full font-semibold text-lg transition duration-300">
                    Kirim Bukti
                </button>
            </div>
        </form>
        @else
        <p class="text-gray-300">Kamu belum booking event apapun.</p>
        @endif
    </div>
</main>
@endsection
@push('scripts')
<script src="{{ asset('js/preview-upload.js') }}"></script>
@endpush

