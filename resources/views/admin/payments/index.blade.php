@extends('layouts.admin')

@section('content')
    <h2>Data Pembayaran</h2>
    <ul>
        @foreach($payments as $payment)
            <li>
                {{ $payment->user->name }} - {{ $payment->amount }} - {{ $payment->status }}
                @if($payment->status !== 'verified')
                    <form method="POST" action="{{ route('admin.payments.verify', $payment->id) }}">
                        @csrf
                        <button type="submit">Verifikasi</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
