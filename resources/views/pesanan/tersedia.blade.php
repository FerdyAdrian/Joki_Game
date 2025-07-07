@extends('layouts.app')

@section('content')
<div class="card-game">
    <h2>Pesanan Tersedia</h2>
    <table class="table table-hover table-bordered bg-white rounded">
        <thead>
            <tr>
                <th>#</th>
                <th>Game</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->game }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>
                    <a href="#" class="btn btn-game btn-sm">Ambil Pesanan</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 