@extends('layouts.app') 

@section('title', 'Kegiatan Panti Asuhan')

@section('content')
<div class="w-100 text-white text-center mb-5" style="
    background-image: url('https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 20px;
    position: relative;
    overflow: hidden;
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
    <div style="position: relative; z-index: 2; max-width: 800px;">
        <h2 class="fw-bold" style="font-size: 2.5rem;">Kegiatan Panti Asuhan Rumah Harapan</h2>
        <p class="text-light fs-5">Berikut adalah beberapa kegiatan rutin yang dilakukan di Panti Asuhan Rumah Harapan.</p>
    </div>
</div>

<div class="container mt-5">
</div>

<div class="container mt-5">
</div>

<h2 style="text-align: center;">Aktivitas Panti Asuhan</h2>

    <div class="row row-cols-1 g-4">
        {{-- Contoh Kegiatan 1 --}}
        <div class="container mt-5">
          <div class="row g-4">
            <div class="col-12">
              <div class="card h-100 shadow-lg d-flex flex-row overflow-hidden rounded-4">
                <div class="flex-shrink-0" style="width: 50%;">
                  <img src="https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg"
                       class="img-fluid h-100 w-100" style="object-fit: cover; border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;" 
                       alt="Kegiatan Belajar">
                </div>
                <div class="flex-grow-1 d-flex align-items-center p-4">
                  <div>
                    <h5 class="card-title fw-semibold" style="font-size: 1.75rem;">Kegiatan Belajar</h5>
                    <p class="card-text text-muted" style="text-align: justify; line-height: 1.75; font-size: 1.05rem;">
                      Setiap sore, anak-anak Panti Asuhan Rumah Harapan berkumpul di ruang belajar yang telah disiapkan dengan tenang dan penuh semangat untuk mengikuti sesi bimbingan belajar. Di bawah bimbingan guru pendamping yang berpengalaman, mereka mempelajari berbagai mata pelajaran mulai dari Matematika, Bahasa Indonesia, hingga IPA, sambil mendapat penjelasan mendalam dan latihan soal yang disesuaikan dengan kebutuhan masing‑masing. Suasana belajar dibuat interaktif; anak‑anak didorong untuk bertanya, berdiskusi, dan saling membantu teman sekelompoknya agar konsep yang sulit menjadi lebih mudah dipahami.
                    </p>                      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
          {{-- Kegiatan 2: Teks kiri, gambar kanan --}}
<div class="container mt-5">
  <div class="row g-4">
    <div class="col-12">
      <div class="card h-100 shadow-lg d-flex flex-row overflow-hidden rounded-4 flex-row-reverse">
        <div class="flex-shrink-0" style="width: 50%;">
          <img
            src="https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg"
            class="img-fluid h-100 w-100"
            style="object-fit: cover; border-top-right-radius: 1rem; border-bottom-right-radius: 1rem;"
            alt="Kegiatan Sosial"
          >
        </div>
        <div class="flex-grow-1 d-flex align-items-center p-4">
          <div>
            <h5 class="card-title fw-semibold" style="font-size: 1.75rem;">Kegiatan Sosial</h5>
            <p
              class="card-text text-muted"
              style="text-align: justify; line-height: 1.75; font-size: 1.05rem;"
            >
              Setiap sore, anak-anak Panti Asuhan Rumah Harapan berkumpul di ruang belajar yang telah
              disiapkan dengan tenang dan penuh semangat untuk mengikuti sesi bimbingan belajar. Di bawah
              bimbingan guru pendamping yang berpengalaman, mereka mempelajari berbagai mata pelajaran
              mulai dari Matematika, Bahasa Indonesia, hingga IPA, sambil mendapat penjelasan mendalam dan
              latihan soal yang disesuaikan dengan kebutuhan masing-masing. Suasana belajar dibuat
              interaktif; anak-anak didorong untuk bertanya, berdiskusi, dan saling membantu teman
              sekelompoknya agar konsep yang sulit menjadi lebih mudah dipahami.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          

        {{-- Contoh Kegiatan 3 --}}
        <div class="container mt-5">
          <div class="row g-4">
            <div class="col-12">
              <div class="card h-100 shadow-lg d-flex flex-row overflow-hidden rounded-4">
                <div class="flex-shrink-0" style="width: 50%;">
                  <img src="https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg"
                       class="img-fluid h-100 w-100" style="object-fit: cover; border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;" 
                       alt="Kegiatan Belajar">
                </div>
                <div class="flex-grow-1 d-flex align-items-center p-4">
                  <div>
                    <h5 class="card-title fw-semibold" style="font-size: 1.75rem;">Kegiatan Belajar</h5>
                    <p class="card-text text-muted" style="text-align: justify; line-height: 1.75; font-size: 1.05rem;">
                      Setiap sore, anak-anak Panti Asuhan Rumah Harapan berkumpul di ruang belajar yang telah disiapkan dengan tenang dan penuh semangat untuk mengikuti sesi bimbingan belajar. Di bawah bimbingan guru pendamping yang berpengalaman, mereka mempelajari berbagai mata pelajaran mulai dari Matematika, Bahasa Indonesia, hingga IPA, sambil mendapat penjelasan mendalam dan latihan soal yang disesuaikan dengan kebutuhan masing‑masing. Suasana belajar dibuat interaktif; anak‑anak didorong untuk bertanya, berdiskusi, dan saling membantu teman sekelompoknya agar konsep yang sulit menjadi lebih mudah dipahami.
                    </p>                      
                  </div>
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
@endsection
