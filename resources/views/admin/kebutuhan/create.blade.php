<div class="container mt-4">
    <h2>Tambah Kebutuhan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Ada kesalahan:<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.kebutuhan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label>Jumlah Kebutuhan</label>
            <input type="number" name="jumlah_kebutuhan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-select" required>
                <option value="Belum Terpenuhi">Belum Terpenuhi</option>
                <option value="Sebagian Terpenuhi">Sebagian Terpenuhi</option>
                <option value="Sudah Terpenuhi">Sudah Terpenuhi</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Dibuat</label>
            <input type="date" name="tanggal_dibuat" class="form-control">
        </div>

        <div class="mb-3">
            <label>Batas Waktu</label>
            <input type="date" name="batas_waktu" class="form-control">
        </div>

        <div class="mb-3">
            <label>Gambar (Opsional)</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.kebutuhan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
