@extends('layouts.admin')

@section('content')
    <h2>Review Event</h2>
    <ul>
        @foreach($reviews as $review)
            <li>
                {{ $review->user->name }} - "{{ $review->comment }}" ({{ $review->status }})
                @if($review->status !== 'approved')
                    <form method="POST" action="{{ route('admin.reviews.approve', $review->id) }}">
                        @csrf
                        <button type="submit">Setujui</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
