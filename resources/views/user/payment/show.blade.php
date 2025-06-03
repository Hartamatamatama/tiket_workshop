@extends('layouts.user')

@section('title', 'Upload Bukti Pembayaran')

@section('content')
<h1>Upload Bukti Pembayaran</h1>
<form action="{{ route('payment.store', $order->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="proof" class="form-label">Upload Bukti (jpg/png)</label>
        <input type="file" name="proof" id="proof" class="form-control" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-primary">Kirim Bukti</button>
</form>
@endsection