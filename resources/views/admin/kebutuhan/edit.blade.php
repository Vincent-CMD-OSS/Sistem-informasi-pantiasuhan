    <h2>Edit Kebutuhan</h2>

    <form action="{{ route('admin.kebutuhan.update', $kebutuhan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Judul:</label>
            <input type="text" name="judul" value="{{ old('judul', $kebutuhan->judul) }}" required>
        </div>

        <div>
            <label>Deskripsi:</label>
            <textarea name="deskripsi" required>{{ old('deskripsi', $kebutuhan->deskripsi) }}</textarea>
        </div>

        <div>
            <label>Jumlah:</label>
            <input type="number" name="jumlah_kebutuhan" value="{{ old('jumlah_kebutuhan', $kebutuhan->jumlah_kebutuhan) }}" required>
        </div>

        <div>
            <label>Satuan:</label>
            <input type="text" name="satuan" value="{{ old('satuan', $kebutuhan->satuan) }}" required>
        </div>

        <div>
            <label>Kategori:</label>
            <input type="text" name="kategori" value="{{ old('kategori', $kebutuhan->kategori) }}" required>
        </div>

        <div>
            <label>Status:</label>
            <select name="status">
                <option value="Belum Terpenuhi" {{ $kebutuhan->status == 'Belum Terpenuhi' ? 'selected' : '' }}>Belum Terpenuhi</option>
                <option value="Sebagian Terpenuhi" {{ $kebutuhan->status == 'Sebagian Terpenuhi' ? 'selected' : '' }}>Sebagian Terpenuhi</option>
                <option value="Sudah Terpenuhi" {{ $kebutuhan->status == 'Sudah Terpenuhi' ? 'selected' : '' }}>Sudah Terpenuhi</option>
            </select>
        </div>

        <div>
            <label>Batas Waktu:</label>
            <input type="date" name="batas_waktu" value="{{ old('batas_waktu', $kebutuhan->batas_waktu) }}">
        </div>

        <div>
            <label>Gambar Sekarang:</label><br>
            <img src="{{ asset('storage/' . $kebutuhan->gambar) }}" width="150">
        </div>

        <div>
            <label>Ubah Gambar (opsional):</label>
            <input type="file" name="gambar">
        </div>

        <button type="submit">Simpan Perubahan</button>
    </form>
