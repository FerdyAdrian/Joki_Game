@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Pesanan Saya (Joki)</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Game</th>
                <th>Deskripsi</th>
                <th>Customer</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
                <td>{{ $p->game }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ $p->customer->name ?? '-' }}</td>
                <td>{{ ucfirst(str_replace('_', ' ', $p->status)) }}</td>
                <td>
                    @if($p->status == 'diproses')
                        <form action="{{ route('pesanan.konfirmasiSelesaiJoki', $p->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-success btn-sm">Konfirmasi Selesai</button>
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