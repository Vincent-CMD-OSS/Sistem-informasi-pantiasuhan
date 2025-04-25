@extends('layouts.app')

@section('title', 'Sejarah')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Sejarah Kami</h1>
        <p class="lead text-muted">Perjalanan panjang penuh dedikasi sejak 1995</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Awal Mula</h5>
                    <p class="card-text">
                        Didirikan pada tahun 1995, organisasi kami berawal dari sebuah komunitas kecil yang memiliki visi besar 
                        untuk menciptakan perubahan positif di masyarakat. Kami memulai dengan kegiatan sosial sederhana, namun 
                        berlandaskan niat dan semangat yang kuat.
                    </p>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Perkembangan dan Inovasi</h5>
                    <p class="card-text">
                        Seiring berkembangnya zaman, kami terus beradaptasi dengan teknologi dan kebutuhan masyarakat. 
                        Kami meluncurkan berbagai program baru yang menjangkau lebih banyak orang, mulai dari edukasi, 
                        kesehatan, hingga pemberdayaan ekonomi.
                    </p>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Dedikasi Berkelanjutan</h5>
                    <p class="card-text">
                        Nilai-nilai dasar seperti integritas, kolaborasi, dan keberlanjutan tetap menjadi fondasi dalam setiap 
                        langkah kami. Perjalanan ini tak lepas dari kontribusi relawan, mitra, dan masyarakat yang terus 
                        mendukung visi kami.
                    </p>
                </div>
            </div>

            {{-- Jika ingin link kecil ke beranda --}}
            <div class="text-center mt-5">
                <a href="{{ url('/') }}" class="text-decoration-none text-secondary">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</div>
@endsection