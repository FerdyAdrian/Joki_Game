@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Semua Pesanan (Admin)</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Game</th>
                <th>Deskripsi</th>
                <th>Customer</th>
                <th>Joki</th>
                <th>Status</th>
                <th>Bukti Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
                <td>{{ $p->game }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ $p->customer->name ?? '-' }}</td>
                <td>{{ $p->joki->name ?? '-' }}</td>
                <td>{{ ucfirst(str_replace('_', ' ', $p->status)) }}</td>
                <td>
                    @if($p->bukti_pembayaran)
                        <img src="{{ asset('storage/'.$p->bukti_pembayaran) }}" width="80"/>
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if($p->status == 'menunggu_konfirmasi')
                        <form action="{{ route('pesanan.konfirmasiPembayaran', $p->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-primary btn-sm">Konfirmasi Pembayaran</button>
                        </form>
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