<div class="kegiatan-form">
    <div class="form-header">
        <h3>Tambah Kegiatan</h3>
    </div>
    
    <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan</label>
            <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" placeholder="Nama galeri" required>
        </div>
        
        <div class="form-group">
            <label for="tanggal_kegiatan">Tanggal</label>
            <input type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" id="lokasi" name="lokasi" class="form-control" placeholder="F4QP+JCP, Nalela, Kec. Parsea, Toba, Sumatera Utara 22386" required>
        </div>
        
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi kegiatan..." required></textarea>
        </div>
        
        <div class="form-group">
            <label for="gambar_utama">Gambar</label>
            <div class="file-upload">
                <button type="button" class="file-upload-btn">Tambah Foto</button>
                <input type="file" id="gambar_utama" name="gambar_utama" accept="image/*" required onchange="previewImage(this)">
                <span class="file-name" id="file-name-display"></span>
            </div>
            <div class="image-preview" id="image-preview"></div>
        </div>
        
        <div class="thumbnail-container" id="thumbnail-container">
            <!-- Thumbnails will be added here via JavaScript -->
        </div>
        
        <div class="form-actions">
            <button type="button" onclick="backToList()" class="btn btn-secondary">Kembali</button>
            <button type="submit" class="btn btn-tambah">Tambah</button>
        </div>
    </form>
</div>