@extends('layouts.app')

@section('content')
<div class="card-game">
    <h2>Pesanan Saya</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-hover table-bordered bg-white rounded">
        <thead>
            <tr>
                <th>#</th>
                <th>Game</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->game }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td><span class="badge bg-info text-dark">{{ ucfirst(str_replace('_',' ',$p->status)) }}</span></td>
                <td>
                    @if($p->status == 'menunggu_pembayaran')
                        <a href="#" class="btn btn-game btn-sm">Upload Bukti</a>
                    @elseif($p->status == 'diproses')
                        <a href="#" class="btn btn-game btn-sm">Konfirmasi Selesai</a>
                    @else
                        -
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 