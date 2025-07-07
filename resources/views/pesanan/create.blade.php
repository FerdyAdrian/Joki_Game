@extends('layouts.app')

@section('content')
<div class="card-game" style="max-width:500px;margin:auto;">
    <h2>Buat Pesanan</h2>
    <form method="POST" action="{{ route('pesanan.store') }}">
        @csrf
        <div class="mb-3">
            <label for="game" class="form-label">Game</label>
            <select class="form-control" id="game" name="game" required>
                <option value="">Pilih Game</option>
                <option value="Mobile Legends">Mobile Legends</option>
                <option value="PUBG">PUBG</option>
                <option value="Free Fire">Free Fire</option>
                <option value="Valorant">Valorant</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-game">Buat Pesanan</button>
    </form>
</div>
@endsection 