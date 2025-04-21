<?php
namespace App\Http\Controllers;

use App\Models\Kebutuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class KebutuhanController extends Controller
{
    public function index()
    {
        $data = Kebutuhan::orderBy('created_at', 'desc')->get();
        return view('admin.pages.kebutuhanPanti', compact('data'));
    }

    public function create()
    {
        return view('admin.kebutuhan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_kebutuhan' => 'nullable|integer',
            'satuan' => 'nullable|string|max:50',
            'kategori' => 'required|string|max:100',
            'status' => 'required|in:Belum Terpenuhi,Sebagian Terpenuhi,Sudah Terpenuhi',
            'tanggal_dibuat' => 'nullable|date',
            'batas_waktu' => 'nullable|date',
            'gambar' => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('kebutuhan', 'public');
        }

        Kebutuhan::create($data);

        return redirect()->route('admin.kebutuhan.index')->with('success', 'Kebutuhan berhasil ditambahkan!');
    }

    public function edit(Kebutuhan $kebutuhan)
    {
        return view('admin.kebutuhan.edit', compact('kebutuhan'));
    }

    // public function update(Request $request, Kebutuhan $kebutuhan)
    // {
    //     $request->validate([
    //         'judul' => 'required|string|max:255',
    //         'deskripsi' => 'nullable|string',
    //         'jumlah_kebutuhan' => 'nullable|integer',
    //         'satuan' => 'nullable|string|max:50',
    //         'kategori' => 'required|string|max:100',
    //         'status' => 'required|in:Belum Terpenuhi,Sebagian Terpenuhi,Sudah Terpenuhi',
    //         'tanggal_dibuat' => 'nullable|date',
    //         'batas_waktu' => 'nullable|date',
    //         'gambar' => 'nullable|image|max:2048',
    //     ]);

    //     $data = $request->all();

    //     if ($request->hasFile('gambar')) {
    //         $data['gambar'] = $request->file('gambar')->store('kebutuhan', 'public');
    //     }

    //     $kebutuhan->update($data);

    //     return redirect()->route('kebutuhan.index')->with('success', 'Kebutuhan berhasil diperbarui!');
    // }

    public function update(Request $request, Kebutuhan $kebutuhan)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_kebutuhan' => 'nullable|integer',
            'satuan' => 'nullable|string|max:50',
            'kategori' => 'required|string|max:100',
            'status' => 'required|in:Belum Terpenuhi,Sebagian Terpenuhi,Sudah Terpenuhi',
            'tanggal_dibuat' => 'nullable|date',
            'batas_waktu' => 'nullable|date',
            'gambar' => 'nullable|image',
        ]);

        $data = $request->only([
            'judul',
            'deskripsi',
            'jumlah_kebutuhan',
            'satuan',
            'kategori',
            'status',
            'tanggal_dibuat',
            'batas_waktu',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($kebutuhan->gambar);
            $data['gambar'] = $request->file('gambar')->store('kebutuhan', 'public');
        }

        $kebutuhan->update($data);

        return redirect()->route('admin.kebutuhan.index')->with('success', 'Kebutuhan berhasil diperbarui!');
    }

    public function destroy(Kebutuhan $kebutuhan)
    {
        $kebutuhan->delete();
        return redirect()->route('admin.kebutuhan.index')->with('success', 'Kebutuhan berhasil dihapus!');
    }

    public function showPublic()
    {
        $kebutuhan = Kebutuhan::orderBy('created_at', 'desc')->get();
        return view('public.kebutuhan.index', compact('kebutuhan'));
    }

    public function show(Kebutuhan $kebutuhan)
    {
        return view('admin.kebutuhan.show', compact('kebutuhan'));
    }

}
