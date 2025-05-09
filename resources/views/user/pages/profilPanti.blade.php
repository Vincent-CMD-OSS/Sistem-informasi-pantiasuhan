<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profil->nama }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/profil.css') }}">
    <style>
        /* Additional responsive styles */
        @media (max-width: 768px) {
            .section-content {
                flex-direction: column;
            }
            .section-content.reverse {
                flex-direction: column-reverse;
            }
            .section-text, .section-image {
                width: 100%;                                                                          
                margin: 10px 0;
            }
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
            .team {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 480px) {
            .gallery {
                grid-template-columns: 1fr;
            }
            .team {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<div class="side-nav-bar">
    <input id="menu-toggle" type="checkbox" />
    <label class="menu-btn" for="menu-toggle">
        <span></span>
    </label>
</div>

<div class="profil-panti-container">
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>{{ $profil->nama }}</h1>
            <p>{{ $profil->slogan ?? 'Memberikan harapan dan kasih sayang untuk masa depan anak-anak' }}</p>
        </div>
    </div>

    <div class="profile-content">
        <!-- Visi dan Misi Section -->
        <div class="section">
            <div class="section-content">
                <div class="section-text">
                    <h2 class="section-title">Visi dan Misi</h2>
                    <div class="divider"></div>
                    
                    <h3>Visi</h3>
                    <p>{{ $profil->visi }}</p>
                    
                    <h3>Misi</h3>
                    <p>{!! nl2br(e($profil->misi ?? 'Menyediakan tempat tinggal yang aman dan nyaman bagi anak-anak.
                    Memberikan pendidikan formal dan informal yang bermutu.
                    Mengembangkan bakat dan minat anak-anak melalui berbagai kegiatan.
                    Menanamkan nilai-nilai moral dan agama untuk membentuk kepribadian yang baik.
                    Mempersiapkan anak-anak untuk dapat hidup mandiri di masyarakat.')) !!}</p>
                </div>
                <div class="section-image">
                    <img src="{{ asset('assets/images/visimisi.jpg') }}" alt="Aktivitas Anak-anak Panti" class="rounded-image" onerror="this.src='/api/placeholder/500/300'">
                </div>
            </div>
        </div>

        <!-- Sejarah Section -->
        <div class="section bg-light">
            <div class="section-content reverse">
                <div class="section-image">
                    <img src="{{ asset('assets/images/sejarah.jpg') }}" alt="Sejarah Panti" class="rounded-image" onerror="this.src='/api/placeholder/500/300'">
                </div>
                <!-- <div class="section-text">
                    <h2 class="section-title">Tentang Kami</h2>
                    <div class="divider"></div>
                    <p>{!! nl2br(e($profil->tentang ?? 'Panti asuhan kami didirikan dengan semangat kepedulian terhadap anak-anak yang membutuhkan kasih sayang dan perhatian khusus. Berawal dari sebuah inisiatif kecil, kini kami telah berkembang menjadi rumah bagi puluhan anak dengan berbagai latar belakang. Dalam perjalanan ini, kami berkomitmen untuk terus memberikan yang terbaik bagi perkembangan dan masa depan anak-anak.')) !!}</p>
                    
                    @if(isset($profil->sejarah_singkat) && !empty($profil->sejarah_singkat))
                        <p>{!! nl2br(e($profil->sejarah_singkat)) !!}</p>
                    @endif
                </div> -->

                <div class="section-text">
                    <h2 class="section-title">Tentang Kami</h2>
                    <div class="divider"></div>
                    <p>{!! nl2br(e($profil->tentang ?? 'Panti asuhan kami didirikan dengan semangat kepedulian terhadap anak-anak yang membutuhkan kasih sayang dan perhatian khusus.')) !!}</p>
                    
                    <h3>Sejarah Singkat</h3>
                    <p>{!! nl2br(e($profil->sejarah_singkat ?? 'Berawal dari sebuah inisiatif kecil, kini kami telah berkembang menjadi rumah bagi puluhan anak dengan berbagai latar belakang. Dalam perjalanan ini, kami berkomitmen untuk terus memberikan yang terbaik bagi perkembangan dan masa depan anak-anak.')) !!}</p>
                </div>
            </div>
        </div>

        <!-- Tujuan Section -->
        <div class="section">
            <div class="section-content">
                <div class="section-text">
                    <h2 class="section-title">Tujuan Dibentuk</h2>
                    <div class="divider"></div>
                    <p>{!! nl2br(e($profil->tujuan ?? 'Tujuan utama dibentuknya panti asuhan ini adalah untuk memberikan perlindungan, perawatan, dan pendidikan kepada anak-anak yatim, piatu, yatim piatu, dan anak-anak terlantar, sehingga mereka dapat tumbuh dan berkembang dengan baik secara fisik, mental, dan spiritual.')) !!}</p>
                    <!-- <p>Kami berkomitmen untuk memastikan setiap anak mendapatkan kesempatan yang sama untuk meraih masa depan yang lebih baik, terlepas dari latar belakang mereka.</p> -->
                </div>
                <div class="section-image">
                    <img src="{{ asset('assets/images/tujuan.jpg') }}" alt="Kegiatan Belajar Anak-anak" class="rounded-image" onerror="this.src='/api/placeholder/500/300'">
                </div>
            </div>
        </div>

        <!-- Makna Section -->
        <div class="section bg-light">
            <div class="section-content reverse">
                <div class="section-image">
                    <img src="{{ asset('assets/images/makna.jpg') }}" alt="Rumah Harapan" class="rounded-image" onerror="this.src='/api/placeholder/500/300'">
                </div>
                <div class="section-text">
                    <h2 class="section-title">Makna "{{ $profil->nama }}"</h2>
                    <div class="divider"></div>
                    <p>{!! nl2br(e($profil->makna_nama ?? 'Nama ini dipilih dengan filosofi bahwa tempat ini bukan hanya sekadar tempat tinggal, melainkan sebuah rumah yang memberikan harapan baru bagi anak-anak yang kurang beruntung.')) !!}</p>
                    <!-- <p>Di sini, anak-anak tidak hanya mendapatkan kebutuhan fisik seperti makanan dan tempat tinggal, tetapi juga mendapatkan kasih sayang, pendidikan, dan nilai-nilai kehidupan yang akan membentuk karakter mereka menjadi individu yang tangguh dan bermanfaat bagi masyarakat.</p> -->
                </div>
            </div>
        </div>

        <!-- Lokasi Section -->
        <div class="section">
            <div class="section-content">
                <div class="section-text">
                    <h2 class="section-title">Lokasi dan Kontak</h2>
                    <div class="divider"></div>
                    <p><strong>Alamat:</strong> {{ $profil->alamat ?? 'Alamat belum diisi' }}</p>
                    <p><strong>Tahun Berdiri:</strong> {{ $profil->tahun_berdiri ?? '2010' }}</p>
                    <p><strong>Kontak:</strong> {{ $profil->nomor_telepon ?? 'Nomor telepon belum diisi' }}</p>
                    <p><strong>Email:</strong> {{ $profil->email ?? 'Email belum diisi' }}</p>
                </div>
                <div class="section-image">
                    <div class="map-container">
                        @if(isset($profil->maps_embed) && !empty($profil->maps_embed))
                            {!! $profil->maps_embed !!}
                        @else
                            <img src="/api/placeholder/500/300" alt="Peta Lokasi" class="rounded-image">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Galeri Section -->
        <div class="section bg-light">
            <h2 class="section-title text-center">Galeri Foto</h2>
            <div class="divider center-divider"></div>
            <div class="gallery">
                @if(isset($galeri) && count($galeri) > 0)
                    @foreach($galeri as $foto)
                        <div class="gallery-item">
                            <img src="{{ asset('storage/'.$foto->gambar) }}" alt="{{ $foto->keterangan }}" class="rounded-image" onerror="this.src='/api/placeholder/300/200'">
                        </div>
                    @endforeach
                @else
                    @for($i = 1; $i <= 6; $i++)
                        <div class="gallery-item">
                            <img src="/api/placeholder/300/200" alt="Foto Aktivitas {{ $i }}" class="rounded-image">
                        </div>
                    @endfor
                @endif
            </div>
        </div>

        <!-- Pengurus Section -->
        <div class="section">
            <h2 class="section-title text-center">Pengurus</h2>
            <div class="divider center-divider"></div>
            <div class="team">
                @if(isset($pendiri) && count($pendiri) > 0)
                    @foreach($pendiri as $staff)
                        <div class="team-member">
                            <div class="member-photo">
                                <img src="{{ asset('storage/'.$staff->foto) }}" alt="{{ $staff->nama_pengurus }}" onerror="this.src='/api/placeholder/150/150'">
                            </div>
                            <h3>{{ $staff->nama_pengurus }}</h3>
                            <p>{{ $staff->jabatan }}</p>
                        </div>
                    @endforeach
                @else
                    @for($i = 1; $i <= 6; $i++)
                        <div class="team-member">
                            <div class="member-photo">
                                <img src="/api/placeholder/150/150" alt="Pengurus {{ $i }}">
                            </div>
                            <h3>Pengurus {{ $i }}</h3>
                            <p>{{ ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Bendahara', 'Anggota', 'Anggota'][$i-1] }}</p>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
    </div>
</div>

</body>
</html>