@extends('layouts.admin')

@section('content')
    <h2>{{ isset($event) ? 'Edit' : 'Tambah' }} Event</h2>
    <form method="POST" action="{{ isset($event) ? route('admin.events.update', $event) : route('admin.events.store') }}">
        @csrf
        @if(isset($event)) @method('PUT') @endif

        <input type="text" name="name" placeholder="Nama Event" value="{{ old('name', $event->name ?? '') }}" required>
        <select name="category_id">
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" @selected(old('category_id', $event->category_id ?? '') == $cat->id)>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
        <select name="venue_id">
            @foreach($venues as $venue)
                <option value="{{ $venue->id }}" @selected(old('venue_id', $event->venue_id ?? '') == $venue->id)>
                    {{ $venue->name }}
                </option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
    </form>
@endsection
