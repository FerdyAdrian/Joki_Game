@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="card-game" style="max-width:500px;margin:auto;">
    <h2>Profil Saya</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('profil.update') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="contact_info" class="form-label">Kontak</label>
            <input type="text" class="form-control" id="contact_info" name="contact_info" value="{{ $user->contact_info }}">
        </div>
        <button type="submit" class="btn btn-game">Update Profil</button>
=======
<div class="container mt-5">
    <h2>Profil Akun</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ url('/profil') }}">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="mb-3">
            <label>Kontak (WhatsApp/No HP)</label>
            <input type="text" name="contact_info" class="form-control" value="{{ old('contact_info', $user->contact_info) }}">
        </div>
        <!-- Tambahkan field lain jika perlu -->
        <button type="submit" class="btn btn-primary">Simpan</button>
>>>>>>> 69ba2de8f2b718dd3cb9432885f6b174a2472149
    </form>
</div>
@endsection
