<?php
// File: app/Http/Controllers/PendiriController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendiri;
use App\Models\ProfilPanti;
use Illuminate\Support\Facades\Storage;

class PendiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil = ProfilPanti::first();

        if (!$profil) {
            return view('admin.profil.index', [
                'profil' => null,
                'pendiri' => collect(), // return empty collection
            ]);
        }

        $pendiri = Pendiri::where('profil_panti_id', $profil->id)->get();

        return view('admin.profil.index', compact('profil', 'pendiri'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pengurus' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profil_panti_id' => 'required|exists:profil_panti,id'
        ]);

        $data = $request->all();
        
        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pendiri', $filename);
            $data['foto'] = $filename;
        }

        Pendiri::create($data);

        return redirect()->route('admin.profil.index')
                ->with('success', 'Pendiri berhasil ditambahkan!')
                ->with('active_tab', 'pengurus'); // Set active tab to pengurus
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pendiri = Pendiri::findOrFail($id);
        return view('admin.pendiri.edit', compact('pendiri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pengurus' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'profil_panti_id' => 'required|exists:profil_panti,id'
        ]);

        $pendiri = Pendiri::findOrFail($id);
        $data = $request->all();
        
        // Handle file upload
        if ($request->hasFile('foto')) {
            // Delete old image if it exists
            if ($pendiri->foto && Storage::exists('public/pendiri/' . $pendiri->foto)) {
                Storage::delete('public/pendiri/' . $pendiri->foto);
            }
            
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/pendiri', $filename);
            $data['foto'] = $filename;
        }

        $pendiri->update($data);

        return redirect()->route('admin.profil.index')
                ->with('success', 'Pendiri berhasil diperbarui!')
                ->with('active_tab', 'pengurus'); // Set active tab to pengurus
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pendiri = Pendiri::findOrFail($id);
        
        // Delete image file if it exists
        if ($pendiri->foto && Storage::exists('public/pendiri/' . $pendiri->foto)) {
            Storage::delete('public/pendiri/' . $pendiri->foto);
        }
        
        $pendiri->delete();

        return redirect()->route('admin.profil.index')
                ->with('success', 'Pendiri berhasil dihapus!')
                ->with('active_tab', 'pengurus'); // Set active tab to pengurus
    }

    public function show($id)
    {
        $profil = ProfilPanti::findOrFail($id);
        $pendiri = Pendiri::where('profil_panti_id', $id)->get(); // Ambil data pendiri berdasarkan profil_panti_id
        return view('profil.show', compact('profil', 'pendiri'));
    }
}