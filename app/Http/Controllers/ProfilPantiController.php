<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilPanti;

class ProfilPantiController extends Controller
{
    public function index()
    {
        $profil = ProfilPanti::first(); // Ambil data pertama
        return view('admin.profil.index', compact('profil'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'tentang' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'alamat' => 'nullable|string',
            'nomor_telepon' => 'nullable|string',
            'email' => 'nullable|email',
        ]);

        ProfilPanti::updateOrCreate(['id' => 1], $request->all());

        return redirect()->back()->with('success', 'Profil panti berhasil diperbarui!');
    }

    public function show()
    {
        $profil = ProfilPanti::first(); // ambil profil pertama
        return view('profil.show', compact('profil'));
    }

}