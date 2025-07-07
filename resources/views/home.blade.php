@extends('layouts.app')

@section('content')
<div class="card-game">
    <h2 style="font-family:'Orbitron',Arial,sans-serif;color:#1de9b6;text-shadow:0 0 12px #1de9b6;">Dashboard</h2>
    <p>Selamat datang di platform Joki Game <b>Haftap</b>! Pilih menu di samping untuk mulai memesan atau mengelola pesanan Anda.</p>
    <a href="/pesanan" class="btn btn-game mt-3">+ Buat Pesanan Baru</a>
    <hr>
    <h4 class="mt-4 mb-3" style="font-family:'Orbitron',Arial,sans-serif;color:#1de9b6;">Produk Joki Game Populer</h4>
    <div class="d-flex flex-wrap justify-content-center">
        <div class="produk-game m-2">
            <img src="/img/mobile-legends.png" alt="Mobile Legends">
            <h5>Mobile Legends</h5>
            <div class="text-muted mb-2">Joki Rank ML dari Bronze hingga Mythic</div>
            <a href="/pesanan/create?game=Mobile Legends" class="btn btn-game btn-sm">Pesan Sekarang</a>
        </div>
        <div class="produk-game m-2">
            <img src="/img/pubg.png" alt="PUBG">
            <h5>PUBG Mobile</h5>
            <div class="text-muted mb-2">Joki PUBG untuk mencapai tier tinggi</div>
            <a href="/pesanan/create?game=PUBG" class="btn btn-game btn-sm">Pesan Sekarang</a>
        </div>
        <div class="produk-game m-2">
            <img src="/img/free-fire.png" alt="Free Fire">
            <h5>Free Fire</h5>
            <div class="text-muted mb-2">Joki FF untuk rank Heroic dan Grandmaster</div>
            <a href="/pesanan/create?game=Free Fire" class="btn btn-game btn-sm">Pesan Sekarang</a>
        </div>
        <div class="produk-game m-2">
            <img src="/img/valorant.png" alt="Valorant">
            <h5>Valorant</h5>
            <div class="text-muted mb-2">Joki Valorant untuk rank competitive</div>
            <a href="/pesanan/create?game=Valorant" class="btn btn-game btn-sm">Pesan Sekarang</a>
        </div>
    </div>
</div>
@endsection
