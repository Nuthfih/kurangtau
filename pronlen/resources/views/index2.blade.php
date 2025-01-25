@extends('layouts.app')

@section('content')
<div>
    <h2>Daftar Programmer</h2>
    <a href="{{ route('programmers.create') }}">Tambah Programmer</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Keahlian</th>
                <th>Bahasa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programmers as $programmer)
            <tr>
                <td>{{ $programmer->nama_programmer }}</td>
                <td>{{ $programmer->keahlian }}</td>
                <td>{{ $programmer->bahasa }}</td>
                <td>
                    <a href="{{ route('programmers.edit', $programmer->id_programmer) }}">Edit</a>
                    <form action="{{ route('programmers.destroy', $programmer->id_programmer) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
