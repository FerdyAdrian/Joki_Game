@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Pesanan Tersedia untuk Joki</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Game</th>
                <th>Deskripsi</th>
                <th>Customer</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
                <td>{{ $p->game }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ $p->customer->name ?? '-' }}</td>
                <td>
                    <form action="{{ route('pesanan.terima', $p->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-primary btn-sm">Terima</button>
                    </form>
                    <form action="{{ route('pesanan.tolak', $p->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-danger btn-sm">Tolak</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 