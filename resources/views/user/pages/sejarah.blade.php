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
        content: '⚫️';
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
        <img src="assets/images/.jpg" alt="Foto masa lalu panti" class="img-fluid rounded shadow-sm mt-4 mb-3" style="max-height: 400px; object-fit: cover;">
    </div>

    <div class="timeline">
        <div class="timeline-item left">
            <h5>Awal Misi Kemanusiaan</h5>
            <p>Yayasan Rumah Harapan Tobasa memulai kiprah sosialnya dengan membantu anak-anak korban bencana tsunami di Nias.</p>
        </div>
        <div class="timeline-item right">
            <h5>Berdirinya Panti Asuhan</h5>
            <p>Lembaga Kesejahteraan Sosial Anak (LKSA) Panti Asuhan Rumah Harapan - Hope Village didirikan di Desa Silamosik II, Kecamatan Bonatua Lunasi, Kabupaten Toba.</p>
        </div>
        <div class="timeline-item left">
            <h5>Perluasan Jangkauan Anak Asuh</h5>
            <p>Selain anak-anak dari Nias, panti mulai menampung anak-anak dari berbagai daerah termasuk dari Toba, dengan total 62 anak asuh.</p>
        </div>
        <div class="timeline-item right">
            <h5>Komitmen terhadap Pendidikan</h5>
            <p>Yayasan menyediakan akses pendidikan berkualitas hingga perguruan tinggi bagi anak-anak asuh, termasuk yang kini kuliah di Medan, Laguboti, dan Semarang.</p>
        </div>
        <div class="timeline-item left">
            <h5>Dukungan Tenaga Operasional</h5>
            <p>Sebanyak 14 orang tenaga pendukung bertugas menangani operasional panti, kebutuhan harian, makanan, dan pendidikan anak-anak.</p>
        </div>
        <div class="timeline-item right">
            <h5>Pendanaan dan Kolaborasi</h5>
            <p>Panti mengandalkan dukungan pendiri dan mitra internasional seperti AID INDONESIA, serta mengajukan bantuan ke Dinas Sosial melalui rekomendasi resmi.</p>
        </div>
        <div class="timeline-item left">
            <h5>Langkah Menuju Digitalisasi</h5>
            <p>Panti mulai mengembangkan sistem digital berbasis website untuk pencatatan informasi anak dan transparansi pengelolaan.</p>
        </div>
    </div>
    

    <div class="quote">
        “Anak-anak ini adalah benih harapan. Tugas kita bukan hanya merawat, tapi juga menumbuhkan mereka.”<br>
        <span class="small text-muted">– Pendiri Yayasan Rumah Harapan Tobasa</span>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn  rounded-pill px-4">← Kembali ke Beranda</a>
    </div>
</div>
@endsection
