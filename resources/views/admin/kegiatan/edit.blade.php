<h1>Edit Kegiatan</h1>

<form action="{{ route('admin.kegiatan.update', $kegiatan->kegiatan_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}" required><br>
    <textarea name="deskripsi" required>{{ $kegiatan->deskripsi }}</textarea><br>
    <input type="text" name="lokasi" value="{{ $kegiatan->lokasi }}" required><br>
    <input type="date" name="tanggal_kegiatan" value="{{ $kegiatan->tanggal_kegiatan }}" required><br>

    <p>Gambar Saat Ini:</p>
    <img src="{{ asset($kegiatan->gambar_utama) }}" style="max-width:150px;"><br>

    <input type="file" name="gambar_utama"><br>
    <button type="submit">Update</button>
</form>

<br>
<button type="button" onclick="backToList()" class="btn btn-secondary">Kembali</button>
