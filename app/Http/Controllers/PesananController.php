<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    // Customer: Buat pesanan
    public function create() {
        return view('pesanan.create');
    }
    public function store(Request $request) {
        $request->validate([
            'game' => 'required',
            'deskripsi' => 'nullable',
        ]);
        Pesanan::create([
            'customer_id' => Auth::id(),
            'game' => $request->game,
            'deskripsi' => $request->deskripsi,
            'status' => 'menunggu_pembayaran',
        ]);
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dibuat!');
    }

    // Customer: Lihat status pesanan
    public function index() {
        $pesanan = Pesanan::where('customer_id', Auth::id())->get();
        return view('pesanan.index', compact('pesanan'));
    }

    // Customer: Konfirmasi pesanan selesai
    public function konfirmasiSelesai($id) {
        $pesanan = Pesanan::findOrFail($id);
        if ($pesanan->customer_id == Auth::id()) {
            $pesanan->status = 'selesai';
            $pesanan->save();
        }
        return redirect()->back();
    }

    // Customer: Upload bukti pembayaran
    public function uploadBukti(Request $request, $id) {
        $pesanan = Pesanan::findOrFail($id);
        if ($pesanan->customer_id == Auth::id()) {
            $request->validate([
                'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $file = $request->file('bukti_pembayaran');
            $path = $file->store('bukti_pembayaran', 'public');
            $pesanan->bukti_pembayaran = $path;
            $pesanan->status = 'menunggu_konfirmasi';
            $pesanan->save();
        }
        return redirect()->back();
    }

    // Admin: Konfirmasi pembayaran
    public function konfirmasiPembayaran($id) {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status = 'diproses';
        $pesanan->save();
        return redirect()->back();
    }

    // Joki: Lihat pesanan yang tersedia
    public function pesananTersedia() {
        $pesanan = Pesanan::where('status', 'diproses')->whereNull('joki_id')->get();
        return view('pesanan.tersedia', compact('pesanan'));
    }

    // Joki: Terima pesanan
    public function terimaPesanan($id) {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->joki_id = Auth::id();
        $pesanan->status = 'diproses';
        $pesanan->save();
        return redirect()->back();
    }

    // Joki: Tolak pesanan
    public function tolakPesanan($id) {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status = 'ditolak';
        $pesanan->save();
        return redirect()->back();
    }

    // Joki: Konfirmasi selesai
    public function konfirmasiSelesaiJoki($id) {
        $pesanan = Pesanan::findOrFail($id);
        if ($pesanan->joki_id == Auth::id()) {
            $pesanan->status = 'selesai';
            $pesanan->waktu_selesai = now();
            $pesanan->save();
        }
        return redirect()->back();
    }

    // Joki: Daftar pesanan yang diambil oleh joki login
    public function pesananJoki() {
        $pesanan = Pesanan::where('joki_id', Auth::id())->get();
        return view('pesanan.joki', compact('pesanan'));
    }

    // Admin: Daftar semua pesanan
    public function pesananAdmin() {
        $pesanan = Pesanan::all();
        return view('pesanan.admin', compact('pesanan'));
    }
} 