@extends('layouts.admin')

@section('content')
    <h2>Daftar Event</h2>
    <a href="{{ route('admin.events.create') }}">+ Tambah Event</a>

    <ul>
        @foreach ($events as $event)
            <li>{{ $event->name }} -
                <a href="{{ route('admin.events.edit', $event->id) }}">Edit</a> |
                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
