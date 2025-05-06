<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Panti & Pendiri</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/kebutuhan.css') }}" rel="stylesheet">
    <style>
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #f8f9fa;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }
        .card-body {
            padding: 20px;
        }
        .tab-navigation {
            display: flex;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .tab-item {
            flex: 1;
            text-align: center;
            padding: 15px;
            background-color: #f8f9fa;
            border-bottom: 3px solid transparent;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .tab-item.active {
            background-color: #fff;
            border-bottom: 3px solid #222;
            font-weight: bold;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .pengurus-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .pengurus-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .pengurus-card:hover {
            transform: translateY(-5px);
        }
        .pengurus-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .pengurus-info {
            padding: 15px;
        }
        .pengurus-name {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 5px;
        }
        .pengurus-role {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .pengurus-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .form-check-label {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .form-check-input {
            margin-right: 10px;
        }
        .btn-edit {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
        }
        .btn-hapus {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-edit:hover {
            background-color: #0069d9;
            color: white;
        }
        .btn-hapus:hover {
            background-color: #c82333;
        }
        .no-data-container {
            text-align: center;
            padding: 40px 0;
        }
        .no-data-icon {
            font-size: 4rem;
            color: #ddd;
            margin-bottom: 20px;
        }
        .no-data-text {
            font-size: 1.2rem;
            color: #666;
        }
        .form-error {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('admin.partials.asidebar', ['activeMenu' => 'profile'])

    <!-- Main Content -->
    <div class="main-content">
        @include('admin.partials.topbar')

        <div class="content-container">
            <div class="content-header">
                <h2><i class="fas fa-building me-2"></i> Profil Panti Asuhan</h2>
            </div>

            <div class="content-area">
                @if (session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                    </div>
                @endif

                <!-- Tab Navigation -->
                <div class="tab-navigation">
                    <div class="tab-item {{ !session('active_tab') || session('active_tab') == 'profil' ? 'active' : '' }}" data-tab="profil">
                        <i class="fas fa-info-circle me-2"></i>Informasi Panti
                    </div>
                    <div class="tab-item {{ session('active_tab') == 'pengurus' ? 'active' : '' }}" data-tab="pengurus">
                        <i class="fas fa-users me-2"></i>Pengurus & Pendiri
                    </div>
                </div>

                <!-- Tab Content: Profil -->
                <div id="profil-tab" class="tab-content {{ !session('active_tab') || session('active_tab') == 'profil' ? 'active' : '' }}">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="m-0"><i class="fas fa-edit me-2"></i>Edit Informasi Panti</h3>
                        </div>
                        <div class="card-body">
                            <!-- Form Profil Panti -->
                            <form action="{{ route('admin.profil.store') }}" method="POST" class="mb-5">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nama" class="form-label">Nama Panti</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $profil->nama ?? '') }}" required>
                                        </div>
                                        @error('nama')
                                            <div class="form-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Panti</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $profil->email ?? '') }}">
                                        </div>
                                        @error('email')
                                            <div class="form-error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nomor_telepon" class="form-label">No Telepon</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            <input type="text" name="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" value="{{ old('nomor_telepon', $profil->nomor_telepon ?? '') }}">
                                        </div>
                                        @error('nomor_telepon')
                                            <div class="form-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                            <input type="number" name="tahun_berdiri" class="form-control @error('tahun_berdiri') is-invalid @enderror" value="{{ old('tahun_berdiri', $profil->tahun_berdiri ?? '') }}">
                                        </div>
                                        @error('tahun_berdiri')
                                            <div class="form-error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3">{{ old('alamat', $profil->alamat ?? '') }}</textarea>
                                    </div>
                                    @error('alamat')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="slogan" class="form-label">Slogan</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-quote-left"></i></span>
                                        <input type="text" name="slogan" class="form-control @error('slogan') is-invalid @enderror" value="{{ old('slogan', $profil->slogan ?? '') }}">
                                    </div>
                                    @error('slogan')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="tentang" class="form-label">Tentang Kami</label>
                                    <textarea name="tentang" class="form-control @error('tentang') is-invalid @enderror" rows="5">{{ old('tentang', $profil->tentang ?? '') }}</textarea>
                                    @error('tentang')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="visi" class="form-label">Visi</label>
                                    <textarea name="visi" class="form-control @error('visi') is-invalid @enderror" rows="3">{{ old('visi', $profil->visi ?? '') }}</textarea>
                                    @error('visi')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="misi" class="form-label">Misi</label>
                                    <textarea name="misi" class="form-control @error('misi') is-invalid @enderror" rows="3">{{ old('misi', $profil->misi ?? '') }}</textarea>
                                    @error('misi')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="tujuan" class="form-label">Tujuan Dibentuk</label>
                                    <textarea name="tujuan" class="form-control @error('tujuan') is-invalid @enderror" rows="3">{{ old('tujuan', $tentang->tujuan ?? '') }}</textarea>
                                    @error('tujuan')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="sejarah_singkat" class="form-label">Sejarah Singkat</label>
                                    <textarea name="sejarah_singkat" class="form-control @error('sejarah_singkat') is-invalid @enderror" rows="4">{{ old('sejarah_singkat', $tentang->sejarah_singkat ?? '') }}</textarea>
                                    @error('sejarah_singkat')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="makna_nama" class="form-label">Makna Nama</label>
                                    <textarea name="makna_nama" class="form-control @error('makna_nama') is-invalid @enderror" rows="3">{{ old('makna_nama', $tentang->makna_nama ?? '') }}</textarea>
                                    @error('makna_nama')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="maps_embed" class="form-label">Embed Google Maps</label>
                                    <textarea name="maps_embed" class="form-control @error('maps_embed') is-invalid @enderror" rows="3" placeholder="<iframe src='https://maps.google.com/...'></iframe>">{{ old('maps_embed', $profil->maps_embed ?? '') }}</textarea>
                                    <small class="text-muted">Paste kode embed dari Google Maps</small>
                                    @error('maps_embed')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Simpan Perubahan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Tab Content: Pengurus & Pendiri -->
                <div id="pengurus-tab" class="tab-content {{ session('active_tab') == 'pengurus' ? 'active' : '' }}">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="m-0"><i class="fas fa-plus-circle me-2"></i>Tambah Pendiri / Pengurus</h3>
                        </div>
                        <div class="card-body">
                           
                            <form action="{{ route('admin.pendiri.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="profil_panti_id" value="{{ $profil->id ?? 1 }}">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nama" class="form-label">Nama Pendiri/Pengurus</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" name="nama_pengurus" class="form-control @error('nama_pengurus') is-invalid @enderror" value="{{ old('nama_pengurus') }}" required>
                                        </div>
                                        @error('nama_pengurus')
                                            <div class="form-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="jabatan" class="form-label">Jabatan</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                            <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}" required>
                                        </div>
                                        @error('jabatan')
                                            <div class="form-error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/*" required>
                                    </div>
                                    <small class="text-muted">Format: JPG, PNG, GIF.</small>
                                    @error('foto')
                                        <div class="form-error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-plus me-2"></i>Tambah Pendiri/Pengurus
                                </button>
                            </form>
                        </div>
                    </div>

                    
                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="m-0"><i class="fas fa-list me-2"></i>Daftar Pengurus & Pendiri</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($pendiri) && $pendiri->count() > 0)
                                <div class="pengurus-list">
                                    @foreach($pendiri as $p)
                                        <div class="pengurus-card">
                                            <img src="{{ asset('storage/public/pendiri/' . $p->foto) }}" class="pengurus-img" alt="{{ $p->nama_pengurus }}" onerror="this.src='/api/placeholder/250/200'">
                                            <div class="pengurus-info">
                                                <div class="pengurus-name">{{ $p->nama_pengurus }}</div>
                                                <div class="pengurus-role">{{ $p->jabatan }}</div>
                                                <div class="pengurus-actions">
                                                    <a href="{{ route('admin.pendiri.edit', $p->id) }}" class="btn btn-sm btn-edit">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('admin.pendiri.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-hapus">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="no-data-container">
                                    <div class="no-data-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="no-data-text">
                                        Belum ada data pengurus/pendiri. Silakan tambahkan pengurus/pendiri baru.
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script>
        // Tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabItems = document.querySelectorAll('.tab-item');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabItems.forEach(item => {
                item.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Remove active class from all tabs
                    tabItems.forEach(tab => tab.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    
                    // Add active class to clicked tab
                    this.classList.add('active');
                    document.getElementById(tabId + '-tab').classList.add('active');
                });
            });

            // Check if there's a success message related to pendiri
            const successMessage = "{{ session('success') ?? '' }}";
            if (successMessage.includes('Pendiri')) {
                // Switch to pengurus tab if success message is about pendiri
                tabItems.forEach(tab => tab.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));
                
                document.querySelector('[data-tab="pengurus"]').classList.add('active');
                document.getElementById('pengurus-tab').classList.add('active');
            }
        });

        // Preview uploaded image
        document.addEventListener('DOMContentLoaded', function() {
            const fotoInput = document.querySelector('input[name="foto"]');
            if (fotoInput) {
                fotoInput.addEventListener('change', function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            // You could add a preview image here if desired
                            console.log('Image loaded');
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>
</body>
</html>