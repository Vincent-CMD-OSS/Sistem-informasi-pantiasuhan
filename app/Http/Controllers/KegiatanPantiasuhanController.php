<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPantiasuhan;
use Illuminate\Http\Request;

class KegiatanPantiasuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = KegiatanPantiasuhan::latest()->get();
        return view('admin.pages.kegiatan', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'gambar_utama' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $file = $request->file('gambar_utama');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/kegiatan'), $filename);

        KegiatanPantiasuhan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'gambar_utama' => 'uploads/kegiatan/' . $filename,
        ]);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }
    /**
     * Display the specified resource.
     */
    public function show(KegiatanPantiasuhan $kegiatanPantiasuhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $kegiatan = KegiatanPantiasuhan::findOrFail($id);
    //     return view('admin.kegiatan.edit', compact('kegiatan'));
    // }
    public function edit($id)
    {
        $kegiatan = KegiatanPantiasuhan::findOrFail($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kegiatan = KegiatanPantiasuhan::findOrFail($id);

        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'gambar_utama' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $data = $request->only(['nama_kegiatan', 'deskripsi', 'lokasi', 'tanggal_kegiatan']);

        if ($request->hasFile('gambar_utama')) {
            $file = $request->file('gambar_utama');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/kegiatan'), $filename);
            $data['gambar_utama'] = 'uploads/kegiatan/' . $filename;
        }

        $kegiatan->update($data);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kegiatan = KegiatanPantiasuhan::findOrFail($id);
        if (file_exists(public_path($kegiatan->gambar_utama))) {
            unlink(public_path($kegiatan->gambar_utama));
        }
        $kegiatan->delete();

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }

}