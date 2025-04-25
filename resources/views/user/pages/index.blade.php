<!DOCTYPE html>
<html class="no-js" lang="in">

<!-- <head>
	<title>Archi - Free Architecture Portfolio HTML Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="TemplatesJungle">
	<meta name="keywords" content="Free HTML Template">
	<meta name="description" content="Free HTML Template">

	<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="css/vendor.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap"
		rel="stylesheet">
</head> -->

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
					<h2 class="banner-title txt-fx">Children Flourishing</h2>
					<div class="btn-wrap">
						<!-- <a href="#" class="btn-with-line">View Project</a> -->
					</div>
				</div><!--banner-content-->
			</div><!--slider-item-->

			<div class="slider-item jarallax" data-speed="0.2">
				<img src="assets/images/Gambar12.jpg" alt="banner" class="jarallax-img">
				<div class="banner-content">
					<h2 class="banner-title txt-fx">Walking In Purpose</h2>
					<div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div>
				</div><!--banner-content-->
			</div><!--slider-item-->

			<div class="slider-item jarallax" data-speed="0.2">
				<img src="assets/images/Gambar13.jpg" alt="banner" class="jarallax-img">
				<div class="banner-content">
					<h2 class="banner-title txt-fx">Filled With Hope</h2>
					<div class="btn-wrap">
						<a href="#" class="btn-with-line">View Project</a>
					</div>
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
				</div>
				<div class="col-md-6 description text-lead">
					<p><strong>Hope Village began as a home for just 12 orphaned and abandoned children. 
						Over time, it has grown into a place of hope and transformation, becoming a family 
						for more than 80 children. Today, Hope Village is more than just a home it is a thriving community 
						that includes a kindergarten, primary school, high school, church, and a hub providing medical care 
						and clean water.</strong></p>
					<p>A place where children can flourish, Hope Village is built on the foundation of love, 
						purpose, and hope. It exists to nurture young lives, ensuring they grow with dignity, education, 
						and the support they need to shape their future.</p>
					<p>With each passing year, Hope Village continues to stand as a beacon of change, bringing light to 
						those in need and empowering every child to walk in their purpose.</p>

					<div class="btn-wrap">
						<a href="#" class="btn btn-accent btn-xlarge btn-rounded">View my portfolio</a>
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
<section id="pengenalan" class="padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<figure class="jarallax-keep-img pengenalan-image" data-speed="0.5">
					<img src="https://hopevillage.org.au/images/splits/crops/image.48fe7ca8.hope_village_aerial_shot_of_high_school_1.jpg" alt="Pengenalan Panti Asuhan" class="jarallax-img">
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
						<p>
							Panti Asuhan Rumah Harapan merupakan lembaga yang menyediakan lingkungan penuh kasih untuk anak-anak yang membutuhkan. Di sini, setiap anak mendapatkan kesempatan untuk tumbuh dan berkembang melalui berbagai program pendidikan, kesehatan, dan pembinaan karakter. Kami berkomitmen untuk menyediakan fasilitas terbaik dan suasana yang mendukung agar setiap anak dapat meraih potensi maksimalnya. Untuk informasi lebih lanjut mengenai fitur dan fasilitas yang tersedia, silakan kunjungi halaman khusus kami.
						</p>
					</div>
					<div class="btn-wrap">
						<a href="{{ route('pengenalan') }}"class="btn btn-accent btn-xmedium btn-rounded">More Information</a>
					</div>
				</div><!--pengenalan-block-->
			</div>
		</div><!--row-->
	</div><!--container-->
</section>


@include('user.partials.jadwalOperasional')


<!-- INI BAGIAN Sejarah -->
<section id="sejarah" class="padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<figure class="jarallax-keep-img sejarah-image" data-speed="0.5">
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
					<p>
   					 Panti Asuhan Rumah Harapan didirikan pada awal tahun dengan inisiatif sekelompok relawan yang peduli terhadap nasib anak-anak kurang mampu. Berawal dari sebuah ide sederhana untuk menyediakan tempat perlindungan yang hangat dan penuh kasih, lembaga ini kemudian berkembang berkat dukungan masyarakat dan donatur yang setia. Seiring berjalannya waktu, Rumah Harapan tidak hanya menjadi rumah bagi anak-anak yang membutuhkan, tetapi juga menjadi pusat pendidikan dan pengembangan karakter, menginspirasi banyak pihak melalui dedikasinya dalam menciptakan masa depan yang lebih cerah. Perjalanan sejarah ini mencerminkan komitmen dan semangat untuk terus melayani serta memberdayakan setiap anak yang bergabung dalam keluarga besar Rumah Harapan.
					</p>
					</div>

					<div class="btn-wrap">
						<a href="{{ route('sejarah') }}" class="btn btn-accent btn-xmedium btn-rounded">More Information</a>
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
				<figure class="jarallax-keep-img kegiatan-image" data-speed="0.5">
					<img src="https://hopevillage.org.au/images/cache/content/hope-village-children-lining-up-for-school-1.05ae2122.jpg" alt="kegiatan panti" class="jarallax-img">
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
					<p>
						Panti Asuhan Rumah Harapan menyelenggarakan berbagai kegiatan rutin yang bertujuan untuk mendukung tumbuh kembang anak-anak secara holistik. Kegiatan harian meliputi pembelajaran akademik, pelatihan keterampilan hidup, dan bimbingan karakter. Anak-anak juga mengikuti kegiatan ibadah, olahraga pagi, dan pengembangan seni seperti musik dan tari. 
						<br><br>
						Setiap akhir pekan, panti mengadakan kegiatan kreatif seperti membuat kerajinan tangan, kelas komputer, serta sesi motivasi dan mentoring. Selain itu, Rumah Harapan juga sering menjalin kerja sama dengan relawan dan komunitas luar untuk program sosial, seperti kunjungan edukatif, bakti sosial, dan pelatihan kewirausahaan. Semua kegiatan ini dirancang untuk membangun kemandirian, rasa percaya diri, serta jiwa sosial anak-anak agar mereka siap menghadapi masa depan yang lebih baik.
					</p>
					</div>

					<div class="btn-wrap">
						<a href="{{ route('kegiatanpanti') }}" class="btn btn-accent btn-xmedium btn-rounded">More Information</a>
					</div>
				</div><!--kegiatan-block-->
			</div>
		</div><!--row-->
	</div><!--container-->
</section>




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

	

	<section id="latest-blog" class="scrollspy-section bg-grey padding-large">
		<div class="container">

			<div class="row">

				<div class="col">

					<div class="section-header">
						<div class="title">
							<span>read our blog</span>
						</div>
						<h2 class="section-title">latest blog</h2>
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
	</section>


	<!-- INI BAGIAN CONTACT -->
	<section id="contact" class="scrollspy-section bg-dark padding-large">
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

				</div><!--left-content-->

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
				</div><!--right-content-->

			</div>

		</div>
	</section>
	<!-- INI AKHIR BAGIAN CONTACT -->



	<!-- INI BAGIAN TESTIMONIAL -->
	<section id="testimonial" class="padding-large">
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
					</div><!--reviews-content-->

				</div>
			</div><!--grid-->

		</div>
	</section>
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