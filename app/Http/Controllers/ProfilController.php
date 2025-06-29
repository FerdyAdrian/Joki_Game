<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profil', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_info' => 'nullable|string|max:255',
            // tambahkan validasi lain sesuai kebutuhan
        ]);
        $user->name = $request->name;
        $user->contact_info = $request->contact_info;
        // tambahkan field lain jika perlu
        $user->save();

        return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui!');
    }
}
