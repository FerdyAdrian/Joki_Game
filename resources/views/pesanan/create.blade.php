@extends('layouts.app')

@section('content')
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
    </form>
</div>
@endsection 