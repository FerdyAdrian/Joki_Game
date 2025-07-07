@extends('layouts.app')

@section('content')
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
    </form>
</div>
@endsection
