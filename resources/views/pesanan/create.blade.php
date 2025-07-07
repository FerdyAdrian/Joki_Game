@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
<div class="container mt-4">
    <h3>Buat Pesanan Joki Game</h3>
    <form action="{{ route('pesanan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="game" class="form-label">Game</label>
            <input type="text" class="form-control" id="game" name="game" value="{{ request('game') }}" readonly>
        </div>
        <div class="mb-3">
            <label for="user_id_game" class="form-label">User ID Game</label>
            <input type="text" class="form-control" id="user_id_game" name="user_id_game" required>
        </div>
        <div class="mb-3">
            <label for="nickname" class="form-label">Nickname Akun Game</label>
            <input type="text" class="form-control" id="nickname" name="nickname" required>
        </div>
        <div class="mb-3">
            <label for="password_game" class="form-label">Password Akun Game</label>
            <input type="password" class="form-control" id="password_game" name="password_game" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Catatan Tambahan (opsional)</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Buat Pesanan</button>
>>>>>>> 69ba2de8f2b718dd3cb9432885f6b174a2472149
    </form>
</div>
@endsection 