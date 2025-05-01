<!-- File: resources/views/user/pages/detailKegiatan.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $kegiatan->nama_kegiatan }} - Detail Kegiatan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/kegiatan.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <style>
        .detail-header {
            background-color: #f8f9fa;
            padding: 100px 0 50px;
            position: relative;
        }
        
        .detail-header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        
        .detail-image {
            height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            position: relative;
            z-index: 2;
        }
        
        .detail-content {
            position: relative;
            z-index: 2;
            color: #fff;
        }
        
        .detail-body {
            padding: 50px 0;
        }
        
        .detail-meta {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #dee2e6;
        }
        
        .detail-meta i {
            color: #0d6efd;
            margin-right: 5px;
        }
        
        .detail-description {
            white-space: pre-line;
            line-height: 1.8;
        }
        
        .related-activities {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        
        .related-item {
            transition: all 0.3s ease;
        }
        
        .related-item:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

    @include('user.partials.navbar')

    <div class="side-nav-bar">
        <input id="menu-toggle" type="checkbox" />
        <label class="menu-btn" for="menu-toggle">
            <span></span>
        </label>
    </div>

    <!-- Detail Header -->
    <section class="detail-header" style="background-image: url('{{ asset($kegiatan->gambar_utama) }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 detail-content text-center">
                    <h1 class="display-4 fw-bold mb-4">{{ $kegiatan->nama_kegiatan }}</h1>
                    <div class="d-flex justify-content-center">
                        <div class="me-4">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span>{{ $kegiatan->lokasi }}</span>
                        </div>
                        <div>
                            <i class="fas fa-calendar-alt me-2"></i>
                            <span>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d F Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detail Body -->
    <section class="detail-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="detail-meta d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-clock"></i>
                            <span>{{ \Carbon\Carbon::parse($kegiatan->created_at)->diffForHumans() }}</span>
                        </div>
                        <div>
                            <a href="{{ route('kegiatan') }}" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Kegiatan
                            </a>
                        </div>
                    </div>
                    
                    <div class="detail-description">
                        {{ $kegiatan->deskripsi }}
                    </div>
                    
                    <div class="mt-5">
                        <img src="{{ asset($kegiatan->gambar_utama) }}" alt="{{ $kegiatan->nama_kegiatan }}" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Activities Section (Optional) -->
    <section class="related-activities">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Kegiatan Terkait Lainnya</h2>
                    <p>Lihat aktivitas lain yang mungkin menarik untuk Anda</p>
                </div>
            </div>
            
            <div class="row">
                @php
                    $relatedActivities = \App\Models\KegiatanPantiasuhan::where('id', '!=', $kegiatan->id)
                                        ->latest()
                                        ->take(3)
                                        ->get();
                @endphp
                
                @foreach($relatedActivities as $related)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm related-item">
                        <img src="{{ asset($related->gambar_utama) }}" class="card-img-top" alt="{{ $related->nama_kegiatan }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $related->nama_kegiatan }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($related->deskripsi, 100, '...') }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{ \Carbon\Carbon::parse($related->tanggal_kegiatan)->format('d F Y') }}</small>
                                <a href="{{ route('kegiatan.detail', $related->id) }}" class="btn btn-sm btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('user.partials.footer')

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary position-fixed bottom-0 end-0 m-4 rounded-circle" style="width: 45px; height: 45px; line-height: 45px; display: flex; align-items: center; justify-content: center; z-index: 1000;">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Back to top button
        document.addEventListener('DOMContentLoaded', function() {
            const backToTopButton = document.querySelector('.btn-primary.position-fixed');
            
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTopButton.style.display = 'flex';
                } else {
                    backToTopButton.style.display = 'none';
                }
            });
            
            backToTopButton.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>