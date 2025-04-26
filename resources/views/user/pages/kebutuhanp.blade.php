@extends('layouts.app') 

@section('title', 'Kebutuhan Panti Asuhan')

@section('content')
<div class="container mt-0">
    <!-- Bagian Full Background -->
    <div class="text-white text-center mb-5" style="
        background-image: url('https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100vw;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 20px;
        position: relative;
        overflow: hidden;
        margin-left: calc(-50vw + 50%);
        margin-right: calc(-50vw + 50%);
    ">
        <div style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1;
        "></div>

        <div style="position: relative; z-index: 2; max-width: 800px;" data-aos="zoom-in" data-aos-duration="1200">
            <h2 class="fw-bold" style="font-size: 2.5rem;">Kebutuhan Panti Asuhan Rumah Harapan</h2>
            <p class="text-light fs-5">Berikut adalah daftar kebutuhan utama untuk mendukung operasional dan kesejahteraan anak-anak di Panti Asuhan Rumah Harapan.</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="200">Daftar Kebutuhan</h2>
        </div>
    </div>

    <div class="row row-cols-1 g-4">
        {{-- Kebutuhan 1 --}}
        <div class="container mt-5" data-aos="fade-right" data-aos-duration="1000">
            <div class="row g-4">
                <div class="col-12">
                    <div class="card h-100 shadow-sm d-flex flex-row">
                        <div class="flex-shrink-0" style="width: 50%;">
                            <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg"
                                 class="img-fluid h-100" style="object-fit: cover;" alt="Kebutuhan Pakaian">
                        </div>
                        <div class="flex-grow-1 d-flex flex-column justify-content-between p-3">
                            <div>
                                <h5 class="card-title">Pakaian dan Seragam Sekolah</h5>
                                <p class="card-text" style="text-align: justify;">
                                    Panti membutuhkan pakaian layak pakai, seragam sekolah, dan sepatu untuk berbagai usia. Kebutuhan ini penting untuk menunjang penampilan dan rasa percaya diri anak-anak.
                                </p> 
                                <div class="mt-3 text-start">
                                    <a class="btn btn-primary">
                                        Donasi Pakaian
                                    </a>
                                </div>   
                            </div>                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

                {{-- Kebutuhan 2 --}}
                <div class="col-12" data-aos="fade-left" data-aos-duration="1000">
                    <div class="card h-100 shadow-sm d-flex flex-row flex-row-reverse">
                        <div class="flex-shrink-0" style="width: 50%;">
                            <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg"
                                 class="img-fluid h-100" style="object-fit: cover;" alt="Kebutuhan Makanan">
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center p-3">
                            <div>
                                <h5 class="card-title">Kebutuhan Makanan Pokok</h5>
                                <p class="card-text" style="text-align: justify;">
                                    Kami sangat terbantu dengan sumbangan beras, minyak goreng, telur, susu, dan makanan sehat lainnya untuk memenuhi kebutuhan harian anak-anak.
                                </p>
                                <div class="mt-3 text-start">
                                    <a class="btn btn-primary">
                                        Donasi Makanan
                                    </a>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kebutuhan 3 --}}
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card h-100 shadow-sm d-flex flex-row">
                        <div class="flex-shrink-0" style="width: 50%;">
                            <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg"
                                 class="img-fluid h-100" style="object-fit: cover;" alt="Kebutuhan Kesehatan">
                        </div>
                        <div class="flex-grow-1 d-flex align-items-center p-3">
                            <div>
                                <h5 class="card-title">Kebutuhan Kesehatan dan Kebersihan</h5>
                                <p class="card-text" style="text-align: justify;">
                                    Obat-obatan umum, vitamin, perlengkapan P3K, sabun, sampo, dan produk kebersihan lainnya sangat dibutuhkan untuk menjaga kesehatan seluruh anak-anak.
                                </p>
                                <div class="mt-3 text-start">
                                    <a class="btn btn-primary">
                                        Donasi Obat-obatan
                                    </a>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-left center mt-5">
                    <a href="{{ url('/') }}" class="text-decoration-none text-secondary">
                        ← Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>

@include('user.partials.footer')
@endsection
