@extends('layouts.app')

@section('content')
<div>
    <h2>{{ isset($programmer) ? 'Edit Programmer' : 'Tambah Programmer' }}</h2>
    <form action="{{ isset($programmer) ? route('programmers.update', $programmer->id_programmer) : route('programmers.store') }}" method="POST">
        @csrf
        @if (isset($programmer))
        @method('PUT')
        @endif
        <div>
            <label>Nama:</label>
            <input type="text" name="nama_programmer" value="{{ $programmer->nama_programmer ?? '' }}" required>
        </div>
        <div>
            <label>Keahlian:</label>
            <input type="text" name="keahlian" value="{{ $programmer->keahlian ?? '' }}" required>
        </div>
        <div>
            <label>Bahasa:</label>
            <input type="text" name="bahasa" value="{{ $programmer->bahasa ?? '' }}" required>
        </div>
        <button type="submit">{{ isset($programmer) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection
