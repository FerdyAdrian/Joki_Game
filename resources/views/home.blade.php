@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="card-game">
    <h2>Dashboard</h2>
    <p>Selamat datang di platform Joki Game <b>Haftap</b>! Pilih menu di samping untuk mulai memesan atau mengelola pesanan Anda.</p>
    <a href="/pesanan" class="btn btn-game mt-3">+ Buat Pesanan Baru</a>
</div>
=======
<div class="container mt-5">
    <div class="card shadow-lg mx-auto" style="max-width: 700px; border-radius: 1.2rem;">
        <div class="card-body text-center">
            <img src="/img/LOGO HAFTAP.jpg" alt="Logo Haftap" style="height: 70px; margin-bottom: 15px;">
            <h3 class="mb-2">Selamat datang di <span style="color:#1de9b6">Haftap</span>!</h3>
            <p class="mb-1">Halo, <b>{{ Auth::user()->name }}</b></p>
            <p class="mb-3">Role: <span class="badge bg-info text-dark">{{ ucfirst(Auth::user()->role) }}</span></p>
            <div class="row justify-content-center mb-4">
                <div class="col-12 mb-2">
                    <h5 class="mb-3">Pilih Game untuk Joki</h5>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <a href="{{ url('pesanan/create?game=Mobile Legends') }}" class="text-decoration-none">
                        <div class="card h-100 shadow-sm border-0 hover-shadow" style="border-radius:1rem;">
                            <div class="card-body p-2">
                                <img src="/img/mobile-legends.png" alt="Mobile Legends" class="game-img">
                                <div class="mt-2 fw-bold text-dark">Mobile Legends</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <a href="{{ url('pesanan/create?game=PUBG') }}" class="text-decoration-none">
                        <div class="card h-100 shadow-sm border-0 hover-shadow" style="border-radius:1rem;">
                            <div class="card-body p-2">
                                <img src="/img/pubg.png" alt="PUBG" class="game-img">
                                <div class="mt-2 fw-bold text-dark">PUBG</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <a href="{{ url('pesanan/create?game=Free Fire') }}" class="text-decoration-none">
                        <div class="card h-100 shadow-sm border-0 hover-shadow card-game" style="border-radius:1rem;">
                            <div class="card-body p-2">
                                <img src="/img/free-fire.png" alt="Free Fire" class="game-img">
                                <div class="mt-2 fw-bold text-dark">Free Fire</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <a href="{{ url('pesanan/create?game=Valorant') }}" class="text-decoration-none">
                        <div class="card h-100 shadow-sm border-0 hover-shadow" style="border-radius:1rem;">
                            <div class="card-body p-2">
                                <img src="/img/valorant.png" alt="Valorant" class="game-img">
                                <div class="mt-2 fw-bold text-dark">Valorant</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-grid gap-2 mb-2">
                @if(Auth::user()->role == 'customer')
                    <a href="{{ route('pesanan.index') }}" class="btn btn-primary">Pesanan Saya</a>
                @endif
                @if(Auth::user()->role == 'joki')
                    <a href="{{ route('pesanan.joki') }}" class="btn btn-success">Pesanan Saya (Joki)</a>
                    <a href="{{ route('pesanan.tersedia') }}" class="btn btn-info">Pesanan Tersedia</a>
                @endif
                @if(Auth::user()->role == 'admin')
                    <a href="{{ route('pesanan.admin') }}" class="btn btn-warning">Kelola Semua Pesanan</a>
                    <a href="{{ route('joki.index') }}" class="btn btn-info">Kelola Data Joki</a>
                @endif
                <a href="/usecase-jokigame" class="btn btn-outline-secondary">Lihat Use Case</a>
            </div>
            <hr>
            <small class="text-muted">Aplikasi Joki Game <b>Haftap</b> &copy; {{ date('Y') }}</small>
        </div>
    </div>
</div>

<style>
.game-img {
    max-width: 80px;
    max-height: 60px;
    object-fit: contain;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
>>>>>>> 69ba2de8f2b718dd3cb9432885f6b174a2472149
@endsection
