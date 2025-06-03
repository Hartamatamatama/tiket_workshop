@extends('layouts.user')

@section('title', 'Tiket Saya')

@section('content')
<h1 class="mb-4">Tiket Saya</h1>
<table class="table">
    <thead>
        <tr>
            <th>Event</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->event->name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->status }}</td>
                <td><a href="{{ route('payment.show', $order->id) }}" class="btn btn-sm btn-primary">Bayar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection