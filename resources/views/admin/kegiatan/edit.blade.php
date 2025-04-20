<div class="kegiatan-form">
    <div class="form-header">
        <h3>Edit Kegiatan</h3>
    </div>
    
    <form action="{{ route('admin.kegiatan.update', $kegiatan->kegiatan_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan</label>
            <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" required>
        </div>
        
        <div class="form-group">
            <label for="tanggal_kegiatan">Tanggal</label>
            <input type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" class="form-control" value="{{ $kegiatan->tanggal_kegiatan }}" required>
        </div>
        
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" id="lokasi" name="lokasi" class="form-control" value="{{ $kegiatan->lokasi }}" required>
        </div>
        
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control" required>{{ $kegiatan->deskripsi }}</textarea>
        </div>
        
        <div class="form-group">
            <label>Gambar Saat Ini:</label>
            <div class="image-preview">
                <img src="{{ asset($kegiatan->gambar_utama) }}" alt="Current Image" style="max-width: 200px;">
            </div>
        </div>
        
        <div class="form-group">
            <label for="gambar_utama">Ganti Foto</label>
            <div class="file-upload">
                <button type="button" class="file-upload-btn">Pilih Foto Baru</button>
                <input type="file" id="gambar_utama" name="gambar_utama" accept="image/*" onchange="previewImage(this)">
                <span class="file-name" id="file-name-display"></span>
            </div>
            
            <div id="new-image-preview" style="display:none; margin-top: 15px;">
                <p><strong>Gambar Baru yang Dipilih:</strong></p>
                <div class="image-preview">
                    <img id="preview-img" src="" alt="Preview" style="max-width: 200px;">
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <button type="button" onclick="backToList()" class="btn btn-secondary">Kembali</button>
            <button type="submit" class="btn btn-tambah">Update</button>
        </div>
    </form>
</div>

<script>
    function previewImage(input) {
        const previewContainer = document.getElementById('new-image-preview');
        const previewImg = document.getElementById('preview-img');
        const fileNameDisplay = document.getElementById('file-name-display');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                // Display file name
                fileNameDisplay.textContent = input.files[0].name;
                
                // Show preview container
                previewContainer.style.display = 'block';
                
                // Update preview image
                previewImg.src = e.target.result;
            }
            
            reader.readAsDataURL(input.files[0]);
        } else {
            previewContainer.style.display = 'none';
        }
    }
</script>