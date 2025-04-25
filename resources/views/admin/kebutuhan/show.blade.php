<div class="card p-4">
    <h3>{{ $kebutuhan->judul }}</h3>
    <p><strong>Kategori:</strong> {{ $kebutuhan->kategori }}</p>
    <p><strong>Status:</strong> {{ $kebutuhan->status }}</p>
    <p><strong>Deskripsi:</strong> {{ $kebutuhan->deskripsi }}</p>
    @if ($kebutuhan->gambar)
        <p><img src="{{ asset('storage/' . $kebutuhan->gambar) }}" alt="Gambar" width="200"></p>
    @endif

    <div class="mt-3">
        <button onclick="showEditForm('{{ $kebutuhan->id }}')" class="btn btn-warning">Edit</button>

        <form action="{{ route('admin.kebutuhan.destroy', $kebutuhan->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger">Hapus</button>
        </form>

        <button onclick="backToList()" class="btn btn-secondary">Kembali</button>
    </div>
</div>