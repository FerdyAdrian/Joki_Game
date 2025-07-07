<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tampilkan daftar joki
    public function index() {
        $jokis = User::where('role', 'joki')->get();
        return view('joki.index', compact('jokis'));
    }

    // Form tambah joki
    public function create() {
        return view('joki.create');
    }

    // Simpan joki baru
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'joki',
        ]);
        return redirect()->route('joki.index')->with('success', 'Joki berhasil ditambahkan!');
    }

    // Form edit joki
    public function edit($id) {
        $joki = User::findOrFail($id);
        return view('joki.edit', compact('joki'));
    }

    // Update joki
    public function update(Request $request, $id) {
        $joki = User::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$joki->id,
        ]);
        $joki->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('joki.index')->with('success', 'Joki berhasil diupdate!');
    }

    // Hapus joki
    public function destroy($id) {
        $joki = User::findOrFail($id);
        $joki->delete();
        return redirect()->route('joki.index')->with('success', 'Joki berhasil dihapus!');
    }
} 