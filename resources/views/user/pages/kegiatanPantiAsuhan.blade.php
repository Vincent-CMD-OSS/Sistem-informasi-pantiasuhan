<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Panti Asuhan</title>
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
	

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

		
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>
<body>

    @include('user.partials.navbar')

    <div class="side-nav-bar">
		<input id="menu-toggle" type="checkbox" />
		<label class="menu-btn" for="menu-toggle">
			<span></span>
		</label>
	</div>

    <!-- Hero Section -->
    <style>
       /* reset margin/padding bawaan browser agar tidak ada white-space */
        html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        }

        /* pastikan section keluar dari batas container Bootstrap jika masih di dalam .container */
        .hero-section {
        position: relative;
        /* ambil seluruh lebar viewport */
        width: 100vw;
        /* ambil seluruh tinggi viewport */
        height: 100vh;
        /* jika masih ada overflow, sembunyikan */
        overflow: hidden;

        background-image: url('https://hopevillage.org.au/images/cache/content/hope-village-children-doing-chores-1.96825700.jpg');
        background-size: cover;
        background-position: center;
        /* opsi: jika ingin background “fixed” saat scroll */
        /* background-attachment: fixed; */

        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 0;
        margin: 0;
        }

        /* overlay setengah transparan */
        .hero-section .overlay {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 1;
        }

        /* konten di atas overlay */
        .hero-section .hero-content {
        position: relative;
        z-index: 2;
        color: #fff;
        }

        /* bayangan teks supaya semakin kontras */
        .shadow-text {
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
        }

    </style>
        
      

    <!-- Main Content -->
    <main>
        <section class="hero-section">
            <div class="overlay"></div>
          
            <div class="hero-content">
              <h1 class="display-4 fw-bold shadow-text mb-4">Kegiatan</h1>
              <p class="lead shadow-text">Rangkaian aktivitas yang mendidik dan menyenangkan untuk anak-anak</p>
              <a href="#activities" class="btn btn-primary mt-4">Lihat Kegiatan</a>
            </div>
          </section>
        <!-- Introduction Section -->
        <section class="intro-section" data-aos="fade-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Aktivitas Panti Asuhan</h2>
                        <p class="lead">Kami percaya bahwa setiap hati yang dibimali dengan cinta kasih akan tumbuh menjadi tangguh.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Activities Section -->
        <section id="activities" class="py-5">
            <div class="container">
                <!-- Activity 1 -->
                <div class="row align-items-center activity-item animate__animated animate__fadeIn" data-aos="fade-right">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <h3 class="mb-4">Kegiatan Pembelajaran</h3>
                        <p class="activity-description">Setiap pagi, anak-anak berkumpul untuk belajar bersama dibimbing oleh relawan terpilih. Kegiatan ini merupakan prioritas tertinggi, membantu perkembangan intelektual dan memastikan mereka mendapatkan pendidikan dasar. Tujuan dari kegiatan ini adalah untuk mempersiapkan anak-anak menghadapi masa depan dengan penuh percaya diri dalam pengetahuan serta keterampilan hidup yang penting untuk kesuksesan.</p>
                        <a href="#" class="btn btn-primary mt-3">Lihat Detail</a>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 activity-img-container">
                        <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg" alt="Kegiatan Belajar" class="img-fluid rounded shadow">
                    </div>
                </div>

                <!-- Activity 2 -->
                <div class="row activity-item animate__animated animate__fadeIn align-items-stretch" data-aos="fade-left">
                    <!-- kolom gambar: jadi flex container supaya anaknya (img) bisa stretch -->
                    <div class="col-lg-6 activity-img-container d-flex">
                      <img
                        src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg"
                        alt="Kegiatan Bermain"
                        class="img-fluid h-100 w-auto rounded shadow"
                        style="object-fit: cover;"
                      >
                    </div>
                  
                    <!-- kolom teks: bikin center secara vertikal jika mau -->
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                      <h3 class="mb-4">Waktu Bermain dan Rekreasi</h3>
                      <p class="activity-description">
                        Waktu main anak-anak adalah waktu paling berharga dimana mereka dapat mengekspresikan diri secara bebas. Kami mendorong aktivitas yang mengembangkan kreativitas, penalaran pedagogis, dan rasa kerja sama. Kami percaya bahwa melalui permainan, mereka memperkembangkan keterampilan sosial dan mendapatkan masa-masa yang akan selalu berkesan untuk menjadi kenangan yang hangat bagi setiap masa mendatang.
                      </p>
                      <a href="#" class="btn btn-primary mt-3 align-self-start">Lihat Detail</a>
                    </div>
                  </div>
                  

                <!-- Activity 3 -->
                <div class="row align-items-center activity-item animate__animated animate__fadeIn" data-aos="fade-right">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <h3 class="mb-4">Kreativitas dan Seni</h3>
                        <p class="activity-description">"Bakat yang dikembangkan dapat menjadi inspirasi masa depan untuk masa depan yang cerah." Kesenian merupakan bagian penting dari program kami karena dapat melatih ketelitian, kesabaran, dan kemampuan motorik halus. Dengan fokus pada karya seni yang menarik, anak-anak bisa mengembangkan imajinasi mereka tanpa batas.</p>
                        <a href="#" class="btn btn-primary mt-3">Lihat Detail</a>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 activity-img-container">
                        <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg" alt="Kegiatan Seni" class="img-fluid rounded shadow">
                    </div>
                </div>

                <!-- Activity 4 -->
                <div class="row align-items-center activity-item animate__animated animate__fadeIn" data-aos="fade-left">
                    <div class="col-lg-6 activity-img-container">
                        <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg" alt="Kunjungan Donatur" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-4">Kunjungan dan Donasi</h3>
                        <p class="activity-description">Keterbukaaan adalah kunci dari kualitas hidup yang di panti asuhan. Kami selalu menerima kunjungan, berbagi bercerita, berbagi ilmu dan pengalaman berharga dari para donatur, relawan, maupun masyarakat luas yang ingin berkontribusi dalam menjadi bagian dari mereka untuk memberikan kehangatan dan menjadikan senyum di setiap harinya.</p>
                        <a href="#" class="btn btn-primary mt-3">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section" data-aos="fade-up">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Galeri Kegiatan</h2>
                        <p>Lihat lebih banyak momen berharga yang kami abadikan bersama anak-anak</p>
                    </div>
                </div>
                <div class="row gallery-container">
                    <div class="col-md-4 col-6">
                        <div class="gallery-item">
                            <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg" alt="Galeri Kegiatan 1">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="gallery-item">
                            <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg" alt="Galeri Kegiatan 2">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="gallery-item">
                            <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg" alt="Galeri Kegiatan 3">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="gallery-item">
                            <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg" alt="Galeri Kegiatan 4">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="gallery-item">
                            <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg" alt="Galeri Kegiatan 5">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="gallery-item">
                            <img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg" alt="Galeri Kegiatan 6">
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-primary">Lihat Semua Galeri</a>
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="testimonial-section" data-aos="zoom-in">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Apa Kata Mereka</h2>
                    </div>
                </div>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial-item text-center">
                                <img src="{{ asset('assets/images/Gambar11.jpg') }}" alt="Testimonial" class="rounded-circle mb-4">
                                <p class="lead mb-4">"Saya merasa sangat bersyukur dapat tumbuh di panti asuhan ini. Mereka mengajarkan saya nilai-nilai kehidupan yang berharga."</p>
                                <h5>Ahmad Rizki</h5>
                                <p class="text-muted">Alumni Panti Asuhan</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-item text-center">
                                <img src="{{ asset('assets/images/Gambar12.jpg') }}" alt="Testimonial" class="rounded-circle mb-4">
                                <p class="lead mb-4">"Sebagai relawan, pengalaman mengajar di panti asuhan ini sungguh mengubah perspektif hidup saya."</p>
                                <h5>Siti Nurhaliza</h5>
                                <p class="text-muted">Relawan</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-item text-center">
                                <img src="{{ asset('assets/images/Gambar13.jpg') }}" alt="Testimonial" class="rounded-circle mb-4">
                                <p class="lead mb-4">"Melihat perkembangan anak-anak di panti asuhan ini membuat saya terus ingin berkontribusi lebih."</p>
                                <h5>Budi Santoso</h5>
                                <p class="text-muted">Donatur Tetap</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        @include('user.partials.footer')

    </main>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary position-fixed bottom-0 end-0 m-4 rounded-circle" style="width: 45px; height: 45px; line-height: 45px; display: flex; align-items: center; justify-content: center; z-index: 1000;">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Script -->
    <script>
        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const activityItems = document.querySelectorAll('.activity-item');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeIn');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            
            activityItems.forEach(item => {
                observer.observe(item);
            });
            
            // Back to top button
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

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

<!-- Plugin dan Skrip Tambahan -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

<!-- Isotope (untuk filtering layout jika dibutuhkan) -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
 <!-- AOS JS -->
 <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
 <script>
   AOS.init({
     duration: 1000,
     once: true,
     offset: 100
   });
 </script>

 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>