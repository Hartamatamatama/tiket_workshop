@extends('layouts.admin')

@section('content')
    <h2>{{ isset($item) ? 'Edit' : 'Tambah' }} {{ ucfirst($type) }}</h2>
    <form method="POST" action="{{ isset($item) ? route('admin.' . $type . '.update', $item) : route('admin.' . $type . '.store') }}">
        @csrf
        @if(isset($item)) @method('PUT') @endif

        <input type="text" name="name" value="{{ old('name', $item->name ?? '') }}" required placeholder="Nama {{ ucfirst($type) }}">
        <button type="submit">Simpan</button>
    </form>
@endsection
