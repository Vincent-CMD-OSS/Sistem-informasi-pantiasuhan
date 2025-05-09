@extends('layouts.app')

@section('title', 'Sejarah Kami')

@section('content')
<style>
    body {
        font-family: 'Georgia', serif;
        background-color: #fdfaf6;
        color: #4e3d3d;
    }
    .timeline {
        position: relative;
        padding: 2rem 0;
        margin-top: 2rem;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 4px;
        background: #d8cfc4;
        transform: translateX(-50%);
    }
    .timeline-item {
        position: relative;
        width: 50%;
        padding: 2rem;
    }
    .timeline-item.left {
        left: 0;
        text-align: right;
    }
    .timeline-item.right {
        left: 50%;
    }
    .timeline-item::before {
        content: '❤️';
        position: absolute;
        top: 1rem;
        width: 30px;
        height: 30px;
        background: #fff;
        border: 2px solid #d8cfc4;
        border-radius: 50%;
        text-align: center;
        line-height: 26px;
        font-size: 18px;
        color: #b87c4c;
    }
    .timeline-item.left::before {
        right: -15px;
    }
    .timeline-item.right::before {
        left: -15px;
    }
    .quote {
        font-style: italic;
        font-size: 1.2rem;
        margin: 3rem 0;
        text-align: center;
        color: #7a6753;
    }
</style>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #7a5c42;">Sejarah Kami</h1>
        <p class="lead text-muted">Perjalanan penuh cinta dan harapan sejak 2006</p>
        <img src="{{ asset('images/sejarah/hitamhitam.jpg') }}" alt="Foto masa lalu panti" class="img-fluid rounded shadow-sm mt-4 mb-3" style="max-height: 400px; object-fit: cover;">
    </div>

    <div class="timeline">
        <div class="timeline-item left">
            <h5>2004 - Tsunami Nias</h5>
            <p>Yayasan mulai aktif membantu anak-anak korban tsunami di Nias, menjadi awal perjalanan kami.</p>
        </div>
        <div class="timeline-item right">
            <h5>2006 - Hope Village Berdiri</h5>
            <p>Panti Asuhan resmi dibentuk di Desa Silamosik II, menampung anak-anak dari berbagai daerah, termasuk daerah Toba.</p>
        </div>
        <div class="timeline-item left">
            <h5>2015 - Fokus Pendidikan</h5>
            <p>Mulai menyekolahkan anak hingga bangku kuliah dengan dukungan yayasan dan mitra.</p>
        </div>
        <div class="timeline-item right">
            <h5>2020 - Rekomendasi PKSA</h5>
            <p>Mendapat rekomendasi dari Dinas Sosial untuk program kesejahteraan pendidikan anak.</p>
        </div>
        <div class="timeline-item left">
            <h5>2023 - Inovasi Digital</h5>
            <p>Mengembangkan sistem digitalisasi informasi dan transparansi panti berbasis website.</p>
        </div>
    </div>

    <div class="quote">
        “Anak-anak ini adalah benih harapan. Tugas kita bukan hanya merawat, tapi juga menumbuhkan mereka.”<br>
        <span class="small text-muted">– Pendiri Yayasan Rumah Harapan Tobasa</span>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-outline-secondary rounded-pill px-4">← Kembali ke Beranda</a>
    </div>
</div>
@endsection
