<form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama_kegiatan" placeholder="Nama Kegiatan" required>
    <textarea name="deskripsi" placeholder="Deskripsi" required></textarea>
    <input type="text" name="lokasi" placeholder="Lokasi" required>
    <input type="date" name="tanggal_kegiatan" required>
    <input type="file" name="gambar_utama" accept="image/*" required>
    <button type="submit">Tambah Kegiatan</button>
</form>


<h1>Daftar Kegiatan</h1>

<!-- <a href="{{ route('admin.kegiatan.create') }}">Tambah Kegiatan Baru</a> -->

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Nama Kegiatan</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kegiatan as $item)
            <tr>
                <td><img src="{{ asset($item->gambar_utama) }}" style="max-width:100px;"></td>
                <td>{{ $item->nama_kegiatan }}</td>
                <td>{{ $item->lokasi }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal_kegiatan)->format('d M Y') }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <a href="{{ route('admin.kegiatan.edit', $item->kegiatan_id) }}">Edit</a> |
                    <form action="{{ route('admin.kegiatan.destroy', $item->kegiatan_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>