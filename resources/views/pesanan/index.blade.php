@extends('layouts.app')

@section('content')
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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
                <td>{{ $p->game }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ ucfirst(str_replace('_', ' ', $p->status)) }}</td>
                <td>
                    @if($p->joki)
                        {{ $p->joki->name }}
                    @else
                        -
                    @endif
                </td>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 