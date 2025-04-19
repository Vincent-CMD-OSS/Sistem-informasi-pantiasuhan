<div class="filter-container">
    <button class="btn-tambah" id="btnShowForm">Tambah Galeri</button>
    <div class="filter-dropdown">
        <div class="filter-button">
            Filter: Terbaru <i class="fas fa-chevron-down"></i>
        </div>
        <div class="filter-dropdown-content">
            <a href="#">Terbaru</a>
            <a href="#">Terlama</a>
            <a href="#">A-Z</a>
            <a href="#">Z-A</a>
        </div>
    </div>
</div>

<table class="kegiatan-list">
    <thead>
        <tr>
            <th>Nama Kegiatan</th>
            <th>Tanggal</th>
            <th>Lokasi</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kegiatan as $item)
            <tr>
                <td>{{ $item->nama_kegiatan }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal_kegiatan)->format('d-m-Y') }}</td>
                <td>{{ $item->lokasi }}</td>
                <td class="deskripsi">{{ $item->deskripsi }}</td>
                <td><img src="{{ asset($item->gambar_utama) }}" alt="{{ $item->nama_kegiatan }}"></td>
                <td>
                    <button onclick="showEditForm('{{ $item->kegiatan_id }}')" class="btn btn-edit">Edit</button>
                    <form action="{{ route('admin.kegiatan.destroy', $item->kegiatan_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="pagination">
    <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
    <li><a href="#" class="active">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
</div>