@extends('layouts.admin')

@section('content')
    <h1>Dashboard Admin</h1>
    <ul>
        <li>Total Event: {{ $totalEvents }}</li>
        <li>Total Pembayaran: {{ $totalPayments }}</li>
        <li>Total Review: {{ $totalReviews }}</li>
    </ul>
@endsection
