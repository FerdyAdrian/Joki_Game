@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="card-game">
    <h2>Pesanan Tersedia</h2>
    <table class="table table-hover table-bordered bg-white rounded">
        <thead>
            <tr>
                <th>#</th>
                <th>Game</th>
                <th>Deskripsi</th>
=======
<div class="container mt-4">
    <h3>Pesanan Tersedia untuk Joki</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Game</th>
                <th>Deskripsi</th>
                <th>Customer</th>
>>>>>>> 69ba2de8f2b718dd3cb9432885f6b174a2472149
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
<<<<<<< HEAD
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->game }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>
                    <a href="#" class="btn btn-game btn-sm">Ambil Pesanan</a>
=======
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
>>>>>>> 69ba2de8f2b718dd3cb9432885f6b174a2472149
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 