@extends('layouts.app')

@section('content')
<div class="card-game fadeInUp">
    <h2>Pesanan Tersedia</h2>
    <table class="table table-hover table-bordered bg-white rounded">
        <thead>
            <tr>
                <th>#</th>
                <th>Game</th>
                <th>Deskripsi</th>
                @if(auth()->user()->role === 'admin')
                    <th>Customer</th>
                @endif
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->game }}</td>
                <td>{{ $p->deskripsi }}</td>
                @if(auth()->user()->role === 'admin')
                    <td>{{ $p->customer->name ?? '-' }}</td>
                @endif
                <td>
                    @if(auth()->user()->role === 'joki')
                        <form action="{{ route('pesanan.terima', $p->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-game btn-sm">Terima</button>
                        </form>
                        <form action="{{ route('pesanan.tolak', $p->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-danger btn-sm">Tolak</button>
                        </form>
                    @else
                        <span class="text-muted">-</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
