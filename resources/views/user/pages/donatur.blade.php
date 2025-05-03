<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donatur</title>
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
    <!-- di file layout utama, di dalam <head> -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/kegiatan.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <link href="{{ asset('assets/css/donatur.css') }}" rel="stylesheet">

	

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
                <h1 class="display-4 fw-bold shadow-text mb-4">Donatur</h1>
                <p class="lead shadow-text">Rumah Harapan membutuhkan dukungan Anda untuk terus memberi kehidupan yang layak bagi anak-anak</p>                
              {{-- <a href="donatur" class="btn btn-primary mt-4">Lihat Selengkapnya</a> --}}
            </div>
          </section>
        <!-- Introduction Section -->
        <section class="intro-section" data-aos="fade-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="section-title">Terima Kasih Para Donatur</h2>
                        <p class="lead">Kami mengucapkan terima kasih yang sebesar-besarnya kepada seluruh donatur yang telah berbagi kasih dan dukungan. Bantuan Anda sangat berarti bagi anak-anak di Panti Asuhan Rumah Harapan.</p>
                    </div>                    
                </div>
                <div class="row mt-5 justify-content-center">
                  <div class="col-md-8 text-center">
                    <a href="https://wa.me/6281265455903" class="btn btn-donate">Donasi Sekarang</a>
                  </div>
                </div>
              </div>
            </section>
            </div>
        </section>


      <!-- resources/views/components/donatur.blade.php -->
   
          <!-- Jika perlu slide tambahan, copy carousel-item di atas dan ubah active-nya -->
          <div id="donorCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- INDICATORS -->
            {{-- <div class="carousel-indicators mb-4">
              <button type="button" data-bs-target="#donorCarousel" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#donorCarousel" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#donorCarousel" data-bs-slide-to="2"></button>
            </div> --}}
      
            <div class="carousel-inner">
                <section id="donatur" class="position-relative overflow-hidden py-5">
                    <div class="container">
                      <<h2 class="text-center mb-5"><br>
                        Donatur
                      </h2>                      
                      <div id="donorCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators mb-4">
                          <button type="button" data-bs-target="#donorCarousel" data-bs-slide-to="0" class="active"></button>
                          <button type="button" data-bs-target="#donorCarousel" data-bs-slide-to="1"></button>
                          <button type="button" data-bs-target="#donorCarousel" data-bs-slide-to="2"></button>
                        </div>
                        
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="row align-items-center gx-5">
                              <!-- Left blob + 2 profil -->
                              <div class="col-lg-6 position-relative">
                                <div class="blob position-absolute"></div>
                                
                                <div class="donor-item d-flex align-items-center mb-5">
                                  <img src="assets/images/pp.jpg" alt="" class="rounded-circle flex-shrink-0" width="80" height="80">
                                  <div class="ms-4">
                                    <h5 class="mb-1">Jeremy</h5>
                                    <small class="text-secondary">Sitoluama</small>
                                  </div>
                                </div>
                                
                                <div class="donor-item d-flex align-items-center">
                                  <img src="assets/images/pp.jpg" alt="" class="rounded-circle flex-shrink-0" width="80" height="80">
                                  <div class="ms-4">
                                    <h5 class="mb-1">Mangatur</h5>
                                    <small class="text-secondary">Laguboti</small>
                                  </div>
                                </div>
                                <div class="donor-item d-flex align-items-center">
                                    <img src="assets/images/pp.jpg" alt="" class="rounded-circle flex-shrink-0" width="80" height="80">
                                    <div class="ms-4">
                                      <h5 class="mb-1">Silitonga</h5>
                                      <small class="text-secondary">Medan Utara</small>
                                    </div>
                                  </div>
                              </div>
                              
                              <!-- Right 2 profil -->
                              <div class="col-lg-6">
                                <div class="donor-item d-flex align-items-center justify-content-end mb-5">
                                  <div class="me-4 text-end">
                                    <h5 class="mb-1">Mia</h5>
                                    <small class="text-secondary">Lebanon</small>
                                  </div>
                                  <img src="assets/images/pp.jpg" alt="" class="rounded-circle flex-shrink-0" width="80" height="80">
                                </div>
                                
                                <div class="donor-item d-flex align-items-center justify-content-end">
                                  <div class="me-4 text-end">
                                    <h5 class="mb-1">Khalifa</h5>
                                    <small class="text-secondary">Portugal</small>
                                  </div>
                                  <img src="assets/images/pp.jpg" alt="" class="rounded-circle flex-shrink-0" width="80" height="80">
                                </div>
                                <div class="donor-item d-flex align-items-center justify-content-end">
                                    <div class="me-4 text-end">
                                      <h5 class="mb-1">Cukiray</h5>
                                      <small class="text-secondary">Konoha</small>
                                    </div>
                                    <img src="assets/images/pp.jpg" alt="" class="rounded-circle flex-shrink-0" width="80" height="80">
                                  </div>
                                  
                              </div>
                            </div>
                          </div>
              
                <!-- SLIDE 2 -->
                <div class="carousel-item">
                  <div class="row align-items-center gx-5">
                    <!-- Kiri (2 profil) -->
                    <div class="col-lg-6 position-relative">
                      <div class="donor-item d-flex align-items-center mb-5">
                        <img src="assets/images/pp1.jpg" class="rounded-circle" width="80" height="80">
                        <div class="ms-4">
                          <h5 class="mb-1">Marojahan</h5>
                          <small class="text-secondary">Riau Pelosok</small>
                        </div>
                      </div>
                      <div class="donor-item d-flex align-items-center">
                        <img src="assets/images/pp1.jpg" class="rounded-circle" width="80" height="80">
                        <div class="ms-4">
                          <h5 class="mb-1">Star</h5>
                          <small class="text-secondary">Saturnus</small>
                        </div>
                      </div>
                      <div class="donor-item d-flex align-items-center">
                        <img src="assets/images/pp1.jpg" class="rounded-circle" width="80" height="80">
                        <div class="ms-4">
                          <h5 class="mb-1">Tanjung</h5>
                          <small class="text-secondary">Tanjung Tinggi</small>
                        </div>
                      </div>
                    </div>
                    <!-- Kanan (2 profil) -->
                    <div class="col-lg-6">
                      <div class="donor-item d-flex align-items-center justify-content-end mb-5">
                        <div class="me-4 text-end">
                          <h5 class="mb-1">Enji</h5>
                          <small class="text-secondary">Atlantis</small>
                        </div>
                        <img src="assets/images/pp1.jpg"  class="rounded-circle" width="80" height="80">
                      </div>
                      <div class="donor-item d-flex align-items-center justify-content-end">
                        <div class="me-4 text-end">
                          <h5 class="mb-1">Sabeth</h5>
                          <small class="text-secondary">Papua Tolikara</small>
                        </div>
                        <img src="assets/images/pp1.jpg"  class="rounded-circle" width="80" height="80">
                      </div>
                      <div class="donor-item d-flex align-items-center justify-content-end">
                        <div class="me-4 text-end">
                          <h5 class="mb-1">Sitorus T</h5>
                          <small class="text-secondary">Parsoburan</small>
                        </div>
                        <img src="assets/images/pp1.jpg"  class="rounded-circle" width="80" height="80">
                      </div>
                    </div>
                  </div>
                </div>
              
                <!-- SLIDE 3 -->
                <div class="carousel-item">
                  <div class="row align-items-center gx-5">
                    <!-- Kiri (2 profil) -->
                    <div class="col-lg-6 position-relative">
                      <div class="donor-item d-flex align-items-center mb-5">
                        <img src="assets/images/pp2.jpg"  class="rounded-circle" width="80" height="80">
                        <div class="ms-4">
                          <h5 class="mb-1">Krizz</h5>
                          <small class="text-secondary">Texas</small>
                        </div>
                      </div>
                      <div class="donor-item d-flex align-items-center">
                        <img src="assets/images/pp2.jpg"  class="rounded-circle" width="80" height="80">
                        <div class="ms-4">
                          <h5 class="mb-1">Putra</h5>
                          <small class="text-secondary">Jayakarta</small>
                        </div>
                      </div>
                      <div class="donor-item d-flex align-items-center">
                        <img src="assets/images/pp2.jpg" class="rounded-circle" width="80" height="80">
                        <div class="ms-4">
                          <h5 class="mb-1">Manuel</h5>
                          <small class="text-secondary">Jakarta Selatan</small>
                        </div>
                      </div>
                    </div>
                    <!-- Kanan (2 profil) -->
                    <div class="col-lg-6">
                      <div class="donor-item d-flex align-items-center justify-content-end mb-5">
                        <div class="me-4 text-end">
                          <h5 class="mb-1">Tralalelo</h5>
                          <small class="text-secondary">Bali Utara</small>
                        </div>
                        <img src="assets/images/pp2.jpg" class="rounded-circle" width="80" height="80">
                      </div>
                      <div class="donor-item d-flex align-items-center justify-content-end">
                        <div class="me-4 text-end">
                          <h5 class="mb-1">Tralala</h5>
                          <small class="text-secondary">Nias</small>
                        </div>
                        <img src="assets/images/pp2.jpg" class="rounded-circle" width="80" height="80">
                      </div>
                      <div class="donor-item d-flex align-items-center justify-content-end">
                        <div class="me-4 text-end">
                          <h5 class="mb-1">TungTungSahur</h5>
                          <small class="text-secondary">Indonesia</small>
                        </div>
                        <img src="assets/images/pp2.jpg"  class="rounded-circle" width="80" height="80">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>
  
  
                  
        
                <!-- Call to Action -->
                {{-- <div class="row mt-5 justify-content-center">
                    <div class="col-md-8 text-center">
                        <p>Ayo bergabung menjadi donatur dan berikan dampak nyata bagi masa depan mereka.</p>
                        <a href="/donate" class="btn btn-lg btn-success">Donasi Sekarang</a>
                    </div>
                </div>
            </div>
        </section> --}}
        

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