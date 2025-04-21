@extends('layouts.app') 

@section('title', 'Kegiatan Panti Asuhan')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Kegiatan Panti Asuhan Rumah Harapan</h2>
        <p class="text-muted">Berikut adalah beberapa kegiatan rutin yang dilakukan di Panti Asuhan Rumah Harapan.</p>
    </div>

    <div class="row row-cols-1 g-4">
        {{-- Contoh Kegiatan 1 --}}
        <div class="container mt-5">
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
                        Setiap sore, anak‑anak Panti Asuhan Rumah Harapan berkumpul di ruang belajar yang telah disiapkan dengan tenang dan penuh semangat untuk mengikuti sesi bimbingan belajar. Di bawah bimbingan guru pendamping yang berpengalaman, mereka mempelajari berbagai mata pelajaran mulai dari Matematika, Bahasa Indonesia, hingga IPA, sambil mendapat penjelasan mendalam dan latihan soal yang disesuaikan dengan kebutuhan masing‑masing. Suasana belajar dibuat interaktif; anak‑anak didorong untuk bertanya, berdiskusi, dan saling membantu teman sekelompoknya agar konsep yang sulit menjadi lebih mudah dipahami. 
                      </p>                      
                    </div>
                  </div>
                </div>
              </div>
          
              {{-- Kegiatan 2: Teks kiri, gambar kanan --}}
              <div class="col-12">
                <div class="card h-100 shadow-sm d-flex flex-row flex-row-reverse">
                  <div class="flex-shrink-0" style="width: 50%;">
                    <img src="https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg"
                         class="img-fluid h-100" style="object-fit: cover;" alt="Kegiatan Sosial">
                  </div>
                  <div class="flex-grow-1 d-flex align-items-center p-3">
                    <div>
                      <h5 class="card-title">Kegiatan Sosial</h5>
                      <p class="card-text" style="text-align: justify;">
                        Setiap sore, anak‑anak Panti Asuhan Rumah Harapan berkumpul di ruang belajar yang telah disiapkan dengan tenang dan penuh semangat untuk mengikuti sesi bimbingan belajar. Di bawah bimbingan guru pendamping yang berpengalaman, mereka mempelajari berbagai mata pelajaran mulai dari Matematika, Bahasa Indonesia, hingga IPA, sambil mendapat penjelasan mendalam dan latihan soal yang disesuaikan dengan kebutuhan masing‑masing. Suasana belajar dibuat interaktif; anak‑anak didorong untuk bertanya, berdiskusi, dan saling membantu teman sekelompoknya agar konsep yang sulit menjadi lebih mudah dipahami. 
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
                <div class="card h-100 shadow-sm d-flex flex-row">
                  <div class="flex-shrink-0" style="width: 50%;">
                    <img src="https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg"
                         class="img-fluid h-100" style="object-fit: cover;" alt="Kegiatan Belajar">
                  </div>
                  <div class="flex-grow-1 d-flex align-items-center p-3">
                    <div>
                      <h5 class="card-title">Kegiatan Belajar</h5>
                      <p class="card-text" style="text-align: justify;">
                        Setiap sore, anak‑anak Panti Asuhan Rumah Harapan berkumpul di ruang belajar yang telah disiapkan dengan tenang dan penuh semangat untuk mengikuti sesi bimbingan belajar. Di bawah bimbingan guru pendamping yang berpengalaman, mereka mempelajari berbagai mata pelajaran mulai dari Matematika, Bahasa Indonesia, hingga IPA, sambil mendapat penjelasan mendalam dan latihan soal yang disesuaikan dengan kebutuhan masing‑masing. Suasana belajar dibuat interaktif; anak‑anak didorong untuk bertanya, berdiskusi, dan saling membantu teman sekelompoknya agar konsep yang sulit menjadi lebih mudah dipahami. 
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
@endsection
