@extends('layouts.user')

@section('title', 'Daftar Event')

@section('content')
<h1 class="mb-4">Semua Event</h1>
<div class="row">
    @foreach($events as $event)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <p class="card-text">{{ $event->venue->name }} - {{ $event->date }}</p>
                    <a href="{{ route('events.show', $event->slug) }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{ $events->links() }}
@endsection