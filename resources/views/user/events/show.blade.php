@extends('layouts.user')

@section('title', $event->name)

@section('content')
<h1>{{ $event->name }}</h1>
<p>{{ $event->venue->name }} - {{ $event->date }}</p>
<p>Kategori: {{ $event->category->name }}</p>
<p>{{ $event->description }}</p>
<a href="{{ route('order.create', $event->id) }}" class="btn btn-success">Pesan Tiket</a>
@endsection