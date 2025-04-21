<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Menampilkan semua data donasi.
     */
    public function index()
    {
        $donasi = Donasi::all();
        return view('admin.donasi.index', compact('donasi'));
    }

    /**
     * Menampilkan form untuk menambahkan data donasi.
     */
    public function create()
    {
        return view('admin.donasi.create');
    }

    /**
     * Menyimpan data donasi baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_penerima' => 'required|string|max:100',
            'no_rek' => 'required|string|max:50',
        ]);

        Donasi::create([
            'nama_penerima' => $request->nama_penerima,
            'no_rek' => $request->no_rek,
        ]);

        return redirect()->route('admin.donasi.index')->with('success', 'Data donasi berhasil ditambahkan.');
    }

    /**
     * Menghapus data donasi berdasarkan ID.
     */
    public function destroy($id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();

        return redirect()->route('admin.donasi.index')->with('success', 'Data donasi berhasil dihapus.');
    }
}
