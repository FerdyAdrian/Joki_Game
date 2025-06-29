@extends('layouts.app')

@section('content')
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
    </form>
</div>
@endsection
