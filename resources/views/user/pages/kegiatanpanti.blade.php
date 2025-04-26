@extends('layouts.app') 

@section('title', 'Kegiatan Panti Asuhan')

@section('content')
<div class="container mt-0">
<!-- Bagian Full Background -->
<div class="text-white text-center mb-5" style="
    background-image: url('https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg');
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
    <!-- Overlay agar teks lebih jelas -->
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 1;
    "></div>

    <!-- Konten di tengah -->
    <div style="position: relative; z-index: 2; max-width: 800px;" data-aos="zoom-in" data-aos-duration="1200">
        <h2 class="fw-bold" style="font-size: 2.5rem;">Kegiatan Panti Asuhan Rumah Harapan</h2>
        <p class="text-light fs-5">Berikut adalah beberapa kegiatan rutin yang dilakukan di Panti Asuhan Rumah Harapan.</p>
    </div>
</div>

<!-- Kontainer untuk konten lainnya -->
<div class="container mt-5">
    <div class="text-center mb-5">
        <!-- Konten lainnya di sini -->
    </div>
</div>

<h2 class="text-center" data-aos="fade-up" data-aos-delay="200">Aktivitas Panti Asuhan</h2>

<div class="row row-cols-1 g-4">
    {{-- Contoh Kegiatan 1 --}}
    <div class="container mt-5" data-aos="fade-right" data-aos-duration="1000">
        <div class="row g-4">
            <div class="col-12">
                <div class="card h-100 shadow-sm d-flex flex-row">
                    <div class="flex-shrink-0" style="width: 50%;">
                        <img src="https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg"
                             class="img-fluid h-100" style="object-fit: cover;" alt="Kegiatan Belajar">
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center p-3">
                        <div>
                            <h5 class="card-title">Kegiatan Belajar</h5>
                            <p class="card-text" style="text-align: justify;">
                                Setiap sore, anak‑anak Panti Asuhan Rumah Harapan berkumpul di ruang belajar...
                            </p>                      
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kegiatan 2 --}}
            <div class="col-12" data-aos="fade-left" data-aos-duration="1000">
                <div class="card h-100 shadow-sm d-flex flex-row flex-row-reverse">
                    <div class="flex-shrink-0" style="width: 50%;">
                        <img src="https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg"
                             class="img-fluid h-100" style="object-fit: cover;" alt="Kegiatan Sosial">
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center p-3">
                        <div>
                            <h5 class="card-title">Kegiatan Sosial</h5>
                            <p class="card-text" style="text-align: justify;">
                                Setiap sore, anak‑anak Panti Asuhan Rumah Harapan berkumpul di ruang belajar...
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Kegiatan 3 --}}
    <div class="container mt-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="row g-4">
            <div class="col-12">
                <div class="card h-100 shadow-sm d-flex flex-row">
                    <div class="flex-shrink-0" style="width: 50%;">
                        <img src="https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg"
                             class="img-fluid h-100" style="object-fit: cover;" alt="Kegiatan Belajar">
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center p-3">
                        <div>
                            <h5 class="card-title">Kegiatan Belajar</h5>
                            <p class="card-text" style="text-align: justify;">
                                Setiap sore, anak‑anak Panti Asuhan Rumah Harapan berkumpul di ruang belajar...
                            </p>                      
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


    