<!DOCTYPE html>
<html class="no-js" lang="in">

<head>
    <title>Panti Asuhan Rumah Harapan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="Free HTML Template">
    <meta name="description" content="Free HTML Template">


	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jadwal-operasional.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icomoon/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/galeri.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/donasi.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	
	



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

		
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>


<body>

	<div class="preloader"></div> <!-- UNTUK LOADING -->

	
	<!-- INI UNTUK BAGIAN NAVBAR -->

	@include('user.partials.navbar')

	<!-- INI AKHIR BAGIAN NAVBAR -->
	


	<!-- INI BAGIAN HERO -->
	<!-- <div class="main-logo">
		<a href="index.html">A.</a>
	</div> -->

	<div class="side-nav-bar">
		<input id="menu-toggle" type="checkbox" />
		<label class="menu-btn" for="menu-toggle">
			<span></span>
		</label>
	</div>

	<section id="intro" class="scrollspy-section">
		<div class="main-slider">
			<div class="slider-item jarallax" data-speed="0.2">
				<img src="assets/images/gambar11.jpg" alt="banner" class="jarallax-img">
				<div class="banner-content">
					<h2 class="banner-title txt-fx">Panti Asuhan</h2>
					<!-- <div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div> -->
				</div><!--banner-content-->
			</div><!--slider-item-->

			<div class="slider-item jarallax" data-speed="0.2">
				<img src="assets/images/Gambar12.jpg" alt="banner" class="jarallax-img">
				<div class="banner-content">
					<h2 class="banner-title txt-fx">Rumah Harapan</h2>
					<!-- <div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div> -->
				</div><!--banner-content-->
			</div><!--slider-item-->

			<div class="slider-item jarallax" data-speed="0.2">
				<img src="assets/images/Gambar13.jpg" alt="banner" class="jarallax-img">
				<div class="banner-content">
					<h2 class="banner-title txt-fx">Tobasa</h2>
					<!-- <div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div> -->
				</div><!--banner-content-->
			</div><!--slider-item-->
		</div>
		
		<!--slider-->

		<div class="button-container">
			<button class="prev slick-arrow">
				<i class="icon icon-chevron-thin-left"></i>
			</button>
			<button class="next slick-arrow">
				<i class="icon icon-chevron-thin-right"></i>
			</button>
		</div>
	</section>
	<!-- INI AKHIR BAGIAN HERO -->


	


	<!-- INI BAGIAN ABOUT -->
	<section id="about" class="scrollspy-section padding-xlarge">
		<div class="container">
			<div class="row">

				<div class="col-md-12">

					<div class="section-header">
						<div class="title">
							<span>who are we</span>
						</div>
						<h2 class="section-title">About Us</h2>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-md-6">
					<figure class="jarallax-keep-img">
						<img src="assets/images/singleimage.jpg" alt="about us" class="jarallax-img single-image">
					</figure>
					<!-- <img src="assets/images/singleimage.jpg" alt="about us" class="jarallax-img single-image"> -->
				</div>
				<div class="col-md-6 description text-lead">
					<p>Hope Village began as a home for just 12 orphaned and abandoned children. 
						Over time, it has grown into a place of hope and transformation, becoming a family 
						for more than 80 children. Today, Hope Village is more than just a home it is a thriving community 
						that includes a kindergarten, primary school, high school, church, and a hub providing medical care 
						and clean water.</p>
					<p>A place where children can flourish, Hope Village is built on the foundation of love, 
						purpose, and hope. It exists to nurture young lives, ensuring they grow with dignity, education, 
						and the support they need to shape their future.</p>
					<p>With each passing year, Hope Village continues to stand as a beacon of change, bringing light to 
						those in need and empowering every child to walk in their purpose.</p>

					<div class="btn-wrap">
						<a href="{{ route('profilPanti') }}" class="btn btn-accent btn-xlarge btn-rounded">Selengkapnya</a>
					</div>

				</div>

			</div>

		</div>
	</section>
	<!-- INI AKHIR BAGIAN ABOUT -->




	<!-- INI UNTUK BAGIAN PORTOFOLIO -->

	<!-- {{-- @include('user.partials.portofolio') --}} -->
	@include('user.partials.galeri')

	<!-- INI AKHIR BAGIAN PORTOFOLIO -->



<!-- Section Pengenalan -->
{{-- <section id="pengenalan" class="padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<figure class="jarallax-keep-img pengenalan-image" data-speed="0.5" style="height: 100%; max-height: 500px; overflow: hidden;">
					<img src="assets/images/fotohope.jpeg" alt="Pengenalan Panti Asuhan" class="jarallax-img">
				</figure>
			</div>
			<div class="col-md-6">
				<div class="pengenalan-block">
					<div class="section-header">
						<div class="title">
							<span>Pengenalan Panti Asuhan</span>
						</div>
						<h2 class="section-title">Panti Asuhan Rumah Harapan</h2>
					</div>
					<div class="pengenalan-content">
						<p class="card-text" style="text-align: justify;">
							Panti Asuhan Rumah Harapan merupakan lembaga yang menyediakan lingkungan penuh kasih untuk anak-anak yang membutuhkan. Di sini, setiap anak mendapatkan kesempatan untuk tumbuh dan berkembang melalui berbagai program pendidikan, kesehatan, dan pembinaan karakter. Kami berkomitmen untuk menyediakan fasilitas terbaik dan suasana yang mendukung agar setiap anak dapat meraih potensi maksimalnya. Untuk informasi lebih lanjut mengenai fitur dan fasilitas yang tersedia, silakan kunjungi halaman khusus kami.
						</>
					</div>
					<div class="btn-wrap">
                        <a href="pengenalan" class="btn-donasi">Selengkapnya <i class="icon-arrow-right"></i></a>
                    </div>
				</div><!--pengenalan-block-->
			</div>
		</div><!--row-->
	</div><!--container-->
</section> --}}


@include('user.partials.jadwalOperasional')


<!-- INI BAGIAN Sejarah -->
<section id="sejarah" class="padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<figure class="jarallax-keep-img sejarah-image" data-speed="0.5" style="height: 100%; max-height: 500px; overflow: hidden;">
					<img src="https://hopevillage.org.au/images/content/crops/image.0c45ed53.hope_village_family.jpg" alt="sejarah panti" class="jarallax-img">
				</figure>
			</div>
			<div class="col-md-6">
				<div class="sejarah-block">
					<div class="section-header">
						<div class="title">
							<span>Sejarah Panti Asuhan</span>
						</div>
						<h2 class="section-title">Panti Asuhan Rumah Harapan</h2>
					</div>
					<div class="pengenalan-content">
					<p class="card-text" style="text-align: justify;">  
   					 Lembaga Kesehjahteraan Sosial Anak (LKSA) Panti Asuhan Rumah Harapan – Hope Village merupakan lembaga sosial yang dibentuk oleh Yayasan Rumah Harapan Tobasa. Lokasi panti asuhan ini berada di Desa Silamosik II, Kecamatan Bonatua Lunasi Kabupaten Toba. Yayasan ini adalah salah satu organisasi yang membantu anak-anak korban bencana tsunami di Nias pada tahun 2004.  Yayasan ini merupakan organisasi non-profit memiliki visi untuk menyediakan kehidupan yang layak untuk anak-anak yatim piatu melalui Kesehatan fisik dan spiritual dan pendidikan yang baik. Sejak berdiri pada tahun 2006, panti asuhan ini telah menampung juga anak-anak termasuk dari daerah Toba. Dalam perkembangan Pendidikan menjadi hal yang sangat penting bagi pengembangan para anak asuh, sehingga Yayasan ini tidak sekedar membangun panti asuhan tetapi juga menangani Pendidikan untuk anak-anak penghuni panti tersebut hingga ke bangku perkuliahan.
					</p>
					</div>

					<div class="btn-wrap">
                        <a href="sejarah" class="btn-donasi">Selengkapnya <i class="icon-arrow-right"></i></a>
                    </div>
				</div><!--pengenalan-block-->
			</div>
		</div><!--row-->
	</div><!--container-->
</section>
<!-- INI AKHIR BAGIAN SEJARAH -->



<!-- INI BAGIAN KEGIATAN -->
<section id="kegiatan" class="padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<figure class="jarallax-keep-img kegiatan-image" data-speed="0.5" style="height: 100%; max-height: 500px; overflow: hidden;">
					<img src="assets/images/kegiatan1.jpg" alt="kegiatan panti" class="jarallax-img">
				</figure>
			</div>
			<div class="col-md-6">
				<div class="kegiatan-block">
					<div class="section-header">
						<div class="title">
							<span>Kegiatan Panti Asuhan</span>
						</div>
						<h2 class="section-title">Panti Asuhan Rumah Harapan</h2>
					</div>
					<div class="kegiatan-content">
					<p class="card-text" style="text-align: justify;">
						Panti Asuhan Rumah Harapan menyelenggarakan berbagai kegiatan rutin yang bertujuan untuk mendukung tumbuh kembang anak-anak secara holistik. Kegiatan harian meliputi pembelajaran akademik, pelatihan keterampilan hidup, dan bimbingan karakter. Anak-anak juga mengikuti kegiatan ibadah, olahraga pagi, dan pengembangan seni seperti musik dan tari. 
						<br><br>
						Setiap akhir pekan, panti mengadakan kegiatan kreatif seperti membuat kerajinan tangan, kelas komputer, serta sesi motivasi dan mentoring. Selain itu, Rumah Harapan juga sering menjalin kerja sama dengan relawan dan komunitas luar untuk program sosial, seperti kunjungan edukatif, bakti sosial, dan pelatihan kewirausahaan. Semua kegiatan ini dirancang untuk membangun kemandirian, rasa percaya diri, serta jiwa sosial anak-anak agar mereka siap menghadapi masa depan yang lebih baik.
					</p>
					</div>

					<div class="btn-wrap">
                        <a href="kegiatanpantiasuhan" class="btn-donasi">Selengkapnya <i class="icon-arrow-right"></i></a>
                    </div>
				</div><!--kegiatan-block-->
			</div>
		</div><!--row-->
	</div><!--container-->
</section>


<!-- INI BAGIAN KEBUTUHAN -->
<section id="kebutuhan" class="padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<figure class="jarallax-keep-img kegiatan-image" data-speed="0.5" style="height: 100%; max-height: 500px; overflow: hidden;">
					<img src="https://hopevillage.org.au/images/cache/content/hope-village-primary-school-32.7ccea2cc.jpg"
						 alt="kebutuhan panti"
						 class="jarallax-img">
				</figure>
			</div>
			
			<div class="col-md-6">
				<div class="kegiatan-block">
					<div class="section-header">
						<div class="title">
							<span>Kebutuhan Panti Asuhan</span>
						</div>
						<h2 class="section-title">Panti Asuhan Rumah Harapan</h2>
					</div>
					<div class="kegiatan-content">
					<p class="card-text" style="text-align: justify;">
						Panti Asuhan Rumah Harapan terus berusaha memenuhi kebutuhan sehari-hari anak-anak asuh agar mereka dapat tumbuh dengan sehat, bahagia, dan berpendidikan. Beberapa kebutuhan utama kami meliputi bahan makanan pokok seperti beras, minyak, telur, dan susu; perlengkapan sekolah seperti buku, alat tulis, dan seragam; serta kebutuhan kesehatan seperti vitamin, obat-obatan, dan layanan medis rutin.
						<br><br>
						Kami juga sangat membutuhkan dukungan dalam bentuk pakaian layak pakai, perlengkapan tidur (seperti kasur, selimut, dan bantal), serta dana untuk perbaikan fasilitas asrama dan ruang belajar. Setiap donasi yang diberikan, baik berupa barang maupun dukungan finansial, sangat berarti bagi keberlangsungan pendidikan, kesehatan, dan kesejahteraan anak-anak di Rumah Harapan.
					</p>
					</div>

					<div class="btn-wrap">
                        <a href="kebutuhanp" class="btn-donasi">Selengkapnya <i class="icon-arrow-right"></i></a>
                    </div>
				</div><!--kegiatan-block-->
			</div>
		</div><!--row-->
	</div><!--container-->
</section>


@include('user.partials.kunjungan')


<!-- INI BAGIAN SERVICE -->
	<!-- <section id="services" class="scrollspy-section padding-large">
		<div class="container">
			<div class="row">
				<div class="section-header col-12">
					<div class="title">
						<span>what we do</span>
					</div>
					<h2 class="section-title">Services</h2>
				</div>

			</div>

			<div class="row">

				<div class="col-md-4">
					<div class="services-item">
						<span class="number">01</span>
						<h3>Architecture Portfolio</h3>
						<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.
						</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="services-item">
						<span class="number">02</span>
						<h3>Planning Process</h3>
						<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.
						</p>
					</div>

				</div>

				<div class="col-md-4">
					<div class="services-item">
						<span class="number">03</span>
						<h3>Unique Design</h3>
						<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.
						</p>
					</div>
				</div>

			</div>

		</div>
	</section> -->
	<!-- INI AKHIR BAGIAN SERVICE -->


	<!-- INI BAGIAN SUBSCRIBE -->
	<!-- <section id="subscribe" class="scrollspy-section padding-small">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<figure class="subscribe-image">
						<img src="images/subscribe-image.png" alt="subscribe">
					</figure>
				</div>
				<div class="col-md-6">
					<div class="subscribe-content">
						<h2 class="section-title">subscribe us</h2>
						<p>Join our newsletter to stay updated with super discounts and amazing offers. 300+ have
							already subscribed us.</p>
						<form id="form">
							<input type="text" name="email" placeholder="enter your email address">
							<button class="btn btn-accent btn-rounded btn-full btn-xlarge">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- INI AKHIR BAGIAN SUBSCRIBE -->

	

	<!-- <section id="latest-blog" class="scrollspy-section bg-grey padding-large">
		<div class="container">Read our blog</span>
						</div>
						<h2 class="section-title">Latest blog</h2>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-12">

					<div class="post-grid">
						<div class="row">

							<div class="col-md-4">

								<article class="post-item">

									<figure>
										<a href="#" class="image-hvr-effect">
											<img src="assets/images/postimg1.jpg" alt="post" class="post-image">
										</a>
									</figure>

									<div class="post-content">
										<div class="meta-date">Mar 30, 2021</div>
										<h3 class="post-title"><a href="#">modern vibes bedrooms, todays trending
												design</a></h3>
										<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis
											nulla blandit dui.</p>
									</div>
								</article>

							</div>

							<div class="col-md-4">

								<article class="post-item">
									<figure>
										<a href="#" class="image-hvr-effect">
											<img src="images/postimg2.jpg" alt="post" class="post-image">
										</a>
									</figure>
									<div class="post-content">
										<div class="meta-date">Mar 29, 2021</div>
										<h3 class="post-title"><a href="#">How to make minimalist living rooms
												pop-out</a></h3>
										<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis
											nulla blandit dui.</p>
									</div>
								</article>
							</div>

							<div class="col-md-4">
								<article class="post-item">
									<figure>
										<a href="#" class="image-hvr-effect">
											<img src="images/postimg3.jpg" alt="post" class="post-image">
										</a>
									</figure>
									<div class="post-content">
										<div class="meta-date">Mar 27, 2021</div>
										<h3 class="post-title"><a href="#">how to make your resort that looks
												outstanding</a></h3>
										<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis
											nulla blandit dui.</p>
									</div>
								</article>
							</div>

						</div>
					</div>

				</div>



			</div>

			<div class="row">
				<div class="col">

					<div class="btn-wrap align-center">
						<a href="#" class="btn btn-xlarge btn-accent btn-rounded">View all blog</a>
					</div>

				</div>
			</div>

		</div>
	</section> -->


{{-- Ini bagian donasi --}}
	<section id="donasi" class="donasi-section">
		<div class="container">
			<div class="donasi-wrapper">
				<div class="donasi-content">
					<div class="donasi-subtitle">
						<span>Tumbuh Dengan Harapan</span>
					</div>
					<h2 class="donasi-title">Donasi</h2>
					
					<div class="donasi-description">
						<p>Donasi Anda akan membantu anak-anak di Rumah Harapan mendapatkan tempat tinggal, pendidikan, dan kasih sayang yang layak.</p>
						
						<p>Bersama, kita bisa membangun masa depan yang lebih cerah.</p>
						
						<div class="btn-wrap">
							<a href="donatur" class="btn-donasi">Selengkapnya <i class="icon-arrow-right"></i></a>
						</div>
					</div>
				</div>
				
				<div class="donasi-image-container">
					<div class="donasi-image">
						<img src="https://i.pinimg.com/736x/4b/ad/b0/4badb0e1d75c699fb374d153c0883716.jpg" alt="Anak Rumah Harapan" class="main-image">
					</div>
					<div class="donasi-info">
						<p>Donasi yang Anda berikan akan digunakan untuk memenuhi kebutuhan sehari-hari anak-anak, seperti makanan, pendidikan, perlengkapan sekolah, perawatan tempat tinggal, serta layanan kesehatan dan pendampingan emosional. Setiap bantuan dikelola secara transparan untuk memastikan mereka tumbuh dalam lingkungan yang aman, sehat, dan penuh kasih.</p>
					</div>
					<style>
						.donasi-image img {
							width: 100%;
							height: auto;
							max-height: 400px; /* Batasi tinggi maksimum kalau paragrafnya pendek */
							object-fit: cover;
							display: block;
							margin-bottom: 20px;
						}
						
						.donasi-image, .donasi-info {
							max-width: 600px;
							margin: auto;
						}
						</style>  
				</div>
			</div>
		</div>
	</section>

	<!-- INI BAGIAN CONTACT -->
	<!-- <section id="contact" class="scrollspy-section bg-dark padding-large">
		<div class="container">

			<div class="row">
				<div class="col-md-6">

					<div class="left-content">

						<div class="section-header">
							<div class="title">
								<span>Get in touch</span>
							</div>
							<h2 class="section-title light">Contact us</h2>
						</div>

						<p>If you have any question about our process or company? Let us know how we can help you.</p>

						<form id="form-contact" class="form-light" action="contact.php">
							<p>
								<input type="text" name="name" placeholder="Your Full Name*" required>
							</p>
							<p>
								<input type="text" name="email" placeholder="Your Email Address" required>
							</p>
							<p>
								<textarea name="message" placeholder="Your Message" required></textarea>
							</p>
							<p>
								<label for="agree">
									<input id="agree" name="agree" type="checkbox" required></input>
									<span>I agree to privacy policy</span>
								</label>
							</p>
							<button class="btn btn-accent btn-rounded btn-xlarge btn-full">Submit</button>
						</form>


					</div>

				</div>

				<div class="col-md-6">
					<div class="right-content">

						<div class="iconbox">
							<i class="icon icon-location"></i>
							<div class="detail">
								<strong>Address 1:</strong>
								<p>3927 Red Maple Drive, Los Angeles</p>
							</div>
						</div>
						<div class="iconbox">
							<i class="icon icon-location2"></i>
							<div class="detail">
								<strong>Address 2:</strong>
								<p>2489 Locust Court, Los Angeles</p>
							</div>
						</div>
						<div class="iconbox">
							<i class="icon icon-phone"></i>
							<div class="detail">
								<strong>Phone:</strong>
								<p>+63 667 341 3463</p>
							</div>
						</div>
						<div class="iconbox">
							<i class="icon icon-mail3"></i>
							<div class="detail">
								<strong>Email:</strong>
								<p><a href="#">contact@example.com</a></p>
							</div>
						</div>

					</div>
				</div>

			</div>

		</div>
	</section> -->
	<!-- INI AKHIR BAGIAN CONTACT -->

	{{-- include('user.partials.donasi')     --}}
	<!-- Section Donasi -->


	<!-- INI BAGIAN TESTIMONIAL -->
	<!-- <section id="testimonial" class="padding-large">
		<div class="container">

			<div class="row">

				<div class="col-md-6">

					<figure class="jarallax-keep-img testimonial-image" data-speed="0.5">
						<img src="images/review-bg.jpg" alt="review" class="jarallax-img">
					</figure>

				</div>

				<div class="col-md-6">

					<div class="testimonial-block">
						<div class="section-header">
							<div class="title">
								<span>What clients says</span>
							</div>
							<h2 class="section-title">Testimonials</h2>
						</div>
						<div class="testimonials-inner">
							<q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Placerat venenatis tempor,
								turpis dolor. Aliquam faucibus velit, volutpat vulputate risus urna enim.</q>
							<div class="testimonial-author">
								<div class="author-detail">
									<div class="name">Lucifer</div>
									<div class="author-title">CEO, unity real state</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section> -->
	<!-- INI AKHIR BAGIAN TESTIMONIAL -->

	

	
	@include('user.partials.footer')



	<!-- <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/ui-easing.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script> -->

	<!-- jQuery (harus sebelum skrip lain yang membutuhkannya) -->
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


</body>

</html>