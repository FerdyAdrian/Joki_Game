@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Kelola Data Joki</h3>
    <a href="{{ route('joki.create') }}" class="btn btn-success mb-3">Tambah Joki</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jokis as $joki)
            <tr>
                <td>{{ $joki->name }}</td>
                <td>{{ $joki->email }}</td>
                <td>
                    <a href="{{ route('joki.edit', $joki->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('joki.destroy', $joki->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 