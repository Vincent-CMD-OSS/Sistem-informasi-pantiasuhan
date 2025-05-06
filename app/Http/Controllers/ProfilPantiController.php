<?php

namespace App\Http\Controllers;

use App\Models\TentangPantiFoto;
use Illuminate\Http\Request;
use App\Models\TentangPanti;
use App\Models\ProfilPanti;
use App\Models\Pendiri;
use Illuminate\Support\Facades\Storage;

class ProfilPantiController extends Controller
{
    // TAMPILKAN PROFIL & PENDIRI (ADMIN)
    public function index()
    {
        $profil = ProfilPanti::first();
        $pendiri = $profil ? Pendiri::where('profil_panti_id', $profil->id)->get() : collect();

        return view('admin.pages.profile', compact('profil', 'pendiri'));
    }

    // SIMPAN / UPDATE PROFIL
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required|string',
    //         'tentang' => 'nullable|string',
    //         'visi' => 'nullable|string',
    //         'misi' => 'nullable|string',
    //         'alamat' => 'nullable|string',
    //         'nomor_telepon' => 'nullable|string',
    //         'email' => 'nullable|email',
    //     ]);

    //     ProfilPanti::updateOrCreate(['id' => 1], $request->all());

    //     return redirect()->back()->with('success', 'Profil panti berhasil diperbarui!');
    // }

    // SIMPAN / UPDATE PROFIL
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
        'tujuan' => 'nullable|string',
        'sejarah_singkat' => 'nullable|string',
        'makna_nama' => 'nullable|string',
    ]);

    // Update or create ProfilPanti
    ProfilPanti::updateOrCreate(
        ['id' => 1], 
        $request->except(['tujuan', 'sejarah_singkat', 'makna_nama'])
    );

    // Update or create TentangPanti
    TentangPanti::updateOrCreate(
        ['id' => 1], 
        $request->only(['tujuan', 'sejarah_singkat', 'makna_nama'])
    );

    return redirect()->back()->with('success', 'Profil panti berhasil diperbarui!');
}

    // TAMPILKAN PROFIL (USER)
    public function show()
    {
        $profil = ProfilPanti::first();
        return view('profil.show', compact('profil'));
    }

    // TAMPILKAN PROFIL & PENDIRI (USER)
    // public function showPublic()
    // {
    //     $profil = ProfilPanti::first();
    //     $pendiri = Pendiri::all();
    //     return view('user.pages.profilPanti', compact('profil', 'pendiri'));
    // }

    // TAMPILKAN PROFIL & PENDIRI (USER)
public function showPublic()
{
    $profil = ProfilPanti::first();
    $pendiri = Pendiri::all();
    $tentang = TentangPanti::first();
    
    // Merge tentang data into profil object for easy access in the view
    if ($tentang) {
        $profil->tujuan = $tentang->tujuan;
        $profil->sejarah_singkat = $tentang->sejarah_singkat;
        $profil->makna_nama = $tentang->makna_nama;
    }
    
    return view('user.pages.profilPanti', compact('profil', 'pendiri'));
}

    // ----------------------------
    // CRUD UNTUK PENDIRI
    // ----------------------------

    // SIMPAN PENDIRI
    // public function storePendiri(Request $request)
    // {
    //     $request->validate([
    //         'nama_pengurus' => 'required|string|max:255',
    //         'jabatan' => 'required|string|max:255',
    //         'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'profil_panti_id' => 'required|exists:profil_panti,id'
    //     ]);

    //     $data = $request->all();

    //     if ($request->hasFile('foto')) {
    //         $file = $request->file('foto');
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $file->storeAs('public/pendiri', $filename);
    //         $data['foto'] = $filename;
    //     }

    //     Pendiri::create($data);

    //     return redirect()->route('admin.profil.index')
    //             ->with('success', 'Pendiri berhasil ditambahkan!')
    //             ->with('active_tab', 'pengurus');
    // }

    public function storePendiri(Request $request)
{
    $request->validate([
        'nama_pengurus' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'profil_panti_id' => 'required|exists:profil_panti,id'
    ]);

    $data = $request->all();

    if ($request->hasFile('foto')) {
        // Buat folder jika belum ada
        // if (!Storage::exists('public/pendiri')) {
        //     Storage::makeDirectory('public/pendiri');
        // }

        // Simpan file foto
        $file = $request->file('foto');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/pendiri', $filename);
        $data['foto'] = $filename;
    }

    // Simpan ke database
    Pendiri::create($data);

    return redirect()->route('admin.profil.index')
            ->with('success', 'Pendiri berhasil ditambahkan!')
            ->with('active_tab', 'pengurus');
}


    // EDIT FORM PENDIRI
    public function editPendiri($id)
    {
        $pendiri = Pendiri::findOrFail($id);
        return view('admin.pendiri.edit', compact('pendiri'));
    }

    // UPDATE PENDIRI
    public function updatePendiri(Request $request, $id)
    {
        $request->validate([
            'nama_pengurus' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'profil_panti_id' => 'required|exists:profil_panti,id'
        ]);

        $pendiri = Pendiri::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('foto')) {
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
                ->with('active_tab', 'pengurus');
    }

    // HAPUS PENDIRI
    public function destroyPendiri($id)
    {
        $pendiri = Pendiri::findOrFail($id);

        if ($pendiri->foto && Storage::exists('public/pendiri/' . $pendiri->foto)) {
            Storage::delete('public/pendiri/' . $pendiri->foto);
        }

        $pendiri->delete();

        return redirect()->route('admin.profil.index')
                ->with('success', 'Pendiri berhasil dihapus!')
                ->with('active_tab', 'pengurus');
    }

    // TAMPILKAN PENDIRI BERDASARKAN ID PROFIL
    public function showPendiriByProfil($id)
    {
        $profil = ProfilPanti::findOrFail($id);
        $pendiri = Pendiri::where('profil_panti_id', $id)->get();
        return view('profil.show', compact('profil', 'pendiri'));
    }




    // TAMPILKAN FORM TENTANG PANTI
// public function showTentang()
// {
//     $tentang = TentangPanti::first();
//     return view('admin.pages.tentang-panti', compact('tentang'));
// }

// SIMPAN / UPDATE TENTANG PANTI
// public function storeTentang(Request $request)
// {
//     $request->validate([
//         'tujuan' => 'nullable|string',
//         'sejarah_singkat' => 'nullable|string',
//         'makna_nama' => 'nullable|string',
//     ]);

//     TentangPanti::updateOrCreate(['id' => 1], $request->only('tujuan', 'sejarah_singkat', 'makna_nama'));

//     return redirect()->back()->with('success', 'Informasi tentang panti berhasil diperbarui!');
// }

}
