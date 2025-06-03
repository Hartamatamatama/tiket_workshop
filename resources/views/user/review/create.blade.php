@extends('layouts.user')

@section('title', 'Tulis Ulasan')

@section('content')
<h1>Ulasan untuk {{ $event->name }}</h1>
<form action="{{ route('review.store', $event->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="rating" class="form-label">Rating (1-5)</label>
        <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
    </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Komentar</label>
        <textarea name="comment" id="comment" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Kirim Ulasan</button>
</form>
@endsection
