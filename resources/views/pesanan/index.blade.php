@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<div class="container mt-4">
    <h3>Daftar Pesanan Saya</h3>
    <a href="{{ route('pesanan.create') }}" class="btn btn-success mb-3">Buat Pesanan Baru</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Game</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Joki</th>
                <th>Kontak Joki</th>
                <th>Bukti Pembayaran</th>
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
                <td><span class="badge bg-info text-dark">{{ ucfirst(str_replace('_',' ',$p->status)) }}</span></td>
                <td>
                    @if($p->status == 'menunggu_pembayaran')
                        <a href="#" class="btn btn-game btn-sm">Upload Bukti</a>
                    @elseif($p->status == 'diproses')
                        <a href="#" class="btn btn-game btn-sm">Konfirmasi Selesai</a>
=======
                <td>{{ $p->game }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ ucfirst(str_replace('_', ' ', $p->status)) }}</td>
                <td>
                    @if($p->joki)
                        {{ $p->joki->name }}
>>>>>>> 69ba2de8f2b718dd3cb9432885f6b174a2472149
                    @else
                        -
                    @endif
                </td>
<<<<<<< HEAD
=======
                <td>
                    @if($p->joki && $p->joki->contact_info)
                        {{ $p->joki->contact_info }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if($p->bukti_pembayaran)
                        <img src="{{ asset('storage/'.$p->bukti_pembayaran) }}" width="80"/>
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if($p->status == 'menunggu_pembayaran')
                        <form action="{{ route('pesanan.uploadBukti', $p->id) }}" method="POST" enctype="multipart/form-data" class="d-inline">
                            @csrf
                            <input type="file" name="bukti_pembayaran" required class="form-control mb-2">
                            <button class="btn btn-warning btn-sm">Upload Bukti</button>
                        </form>
                    @endif
                    @if($p->status == 'diproses')
                        <form action="{{ route('pesanan.konfirmasiSelesai', $p->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-success btn-sm">Konfirmasi Selesai</button>
                        </form>
                    @endif
                </td>
>>>>>>> 69ba2de8f2b718dd3cb9432885f6b174a2472149
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 