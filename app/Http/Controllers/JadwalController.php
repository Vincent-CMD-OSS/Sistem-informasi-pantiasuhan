<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalOperasional;
use App\Models\JadwalKhusus;

class JadwalController extends Controller
{
    // public function index()
    // {
    //     $jadwalOperasional = JadwalOperasional::all();
    //     $jadwalKhusus = JadwalKhusus::orderBy('tanggal', 'asc')->get();

    //     return view('admin.jadwal.index', compact('jadwalOperasional', 'jadwalKhusus'));
    // }

    public function index()
    {
        $jadwalOperasional = JadwalOperasional::all();
        $jadwalKhusus = JadwalKhusus::orderBy('tanggal', 'asc')->get();

        return view('admin.pages.operasional', compact('jadwalOperasional', 'jadwalKhusus'));
    }


    public function updateOperasional(Request $request)
    {
        $hari = $request->hari;
        $jam_buka = $request->jam_buka;
        $jam_tutup = $request->jam_tutup;
        $status = $request->status;

        for ($i = 0; $i < count($hari); $i++) {
            \App\Models\JadwalOperasional::updateOrCreate(
                ['hari' => $hari[$i]],
                [
                    'jam_buka' => $jam_buka[$i],
                    'jam_tutup' => $jam_tutup[$i],
                    'status' => $status[$i],
                ]
            );
        }

        return redirect()->back()->with('success', 'Jadwal operasional diperbarui!');
    }

    public function storeKhusus(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date|unique:jadwal_khusus,tanggal',
            'jam_buka' => 'required|date_format:H:i',
            'jam_tutup' => 'required|date_format:H:i',
            'status' => 'required|in:buka,tutup',
            'keterangan' => 'nullable|string'
        ]);

        JadwalKhusus::create($request->all());

        return redirect()->back()->with('success', 'Jadwal khusus berhasil ditambahkan.');
    }

    public function destroyKhusus($id)
    {
        JadwalKhusus::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Jadwal khusus berhasil dihapus.');
    }

    public function jadwalPublik()
    {
        $jadwalOperasional = \App\Models\JadwalOperasional::all();
        $jadwalKhusus = \App\Models\JadwalKhusus::orderBy('tanggal', 'asc')->get();

        return view('jadwal.publik', compact('jadwalOperasional', 'jadwalKhusus'));
    }

    public function operasional() 
    {
        return view('user.pages.operasional');
    }


}
