@extends('layouts.app')

@section('content')
<div class="card-game" style="max-width:900px;margin:auto;">
    <h2 class="mb-4 text-center">Use Case Diagram - Aplikasi Joki Game</h2>
    <div class="mb-3">
        <strong>Aktor:</strong>
        <ul>
            <li>Pelanggan</li>
            <li>Admin</li>
            <li>Penjoki</li>
        </ul>
    </div>
    <div class="mb-3">
        <strong>Diagram Use Case:</strong>
        <div class="bg-light p-3 rounded">
            <pre class="mermaid">
@startuml
left to right direction
actor Pelanggan
actor Admin
actor Penjoki

rectangle "Aplikasi Joki Game" {
  Pelanggan -- (Registrasi Akun)
  Pelanggan -- (Login)
  Pelanggan -- (Pesan Jasa Joki)
  Pelanggan -- (Lihat Status Pesanan)
  Pelanggan -- (Chat Penjoki)

  Penjoki -- (Login)
  Penjoki -- (Lihat Daftar Pesanan)
  Penjoki -- (Ambil Pesanan)
  Penjoki -- (Update Status Pesanan)
  Penjoki -- (Chat Pelanggan)

  Admin -- (Login)
  Admin -- (Kelola User)
  Admin -- (Kelola Pesanan)
  Admin -- (Kelola Penjoki)
  Admin -- (Lihat Laporan)
}
@enduml
            </pre>
        </div>
    </div>
    <div class="alert alert-info mt-3">
        <b>Catatan:</b> Diagram di atas dapat di-copy ke <a href="https://mermaid.live/" target="_blank">mermaid.live</a> atau <a href="https://plantuml.com/" target="_blank">PlantUML</a> untuk visualisasi.
    </div>
</div>
@endsection 