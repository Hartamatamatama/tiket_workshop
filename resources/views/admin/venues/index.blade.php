@extends('layouts.admin')

@section('content')
    <h2>Daftar {{ ucfirst($type) }}</h2>
    <a href="{{ route('admin.' . $type . '.create') }}">+ Tambah</a>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->name }} -
                <a href="{{ route('admin.' . $type . '.edit', $item->id) }}">Edit</a> |
                <form action="{{ route('admin.' . $type . '.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
