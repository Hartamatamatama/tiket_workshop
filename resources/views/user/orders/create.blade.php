@extends('layouts.user')

@section('title', 'Pesan Tiket')

@section('content')
<h1>Pesan Tiket untuk {{ $event->name }}</h1>
<form action="{{ route('order.store', $event->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="quantity" class="form-label">Jumlah Tiket (Maks 3)</label>
        <input type="number" name="quantity" id="quantity" class="form-control" max="3" min="1" required>
    </div>
    <button type="submit" class="btn btn-success">Lanjut ke Pembayaran</button>
</form>
@endsection