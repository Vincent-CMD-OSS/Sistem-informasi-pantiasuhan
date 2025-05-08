<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-3">

					<div class="footer-menu menu-item-01">
						<img src="images/logo.png" alt="logo" class="footer-logo">
						<p>Tristique lacus ullamcorper massa posuere nisl molestie. Nullam motes, tortor masa. Nisl
							tellus etiam.</p>
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-md-2">

					<!-- <div class="footer-menu menu-item-02">
						<h5>quick links</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Beranda</a>
							</li>
							<li class="menu-item">
								<a href="#">Profil</a>
							</li>
							<li class="menu-item">
								<a href="#">Kegiatan</a>
							</li>
							<li class="menu-item">
								<a href="#">Kebutuhan</a>
							</li>
							<li class="menu-item">
								<a href="#">Operasional</a>
							</li>
							<li class="menu-item">
								<a href="#">Donasi</a>
							</li>
						</ul>
					</div> -->

					<div class="footer-menu menu-item-02">
	<h5>quick links</h5>
	<ul class="menu-list">
		<li class="menu-item">
			<a href="{{ route('home') }}">Beranda</a>
		</li>
		<li class="menu-item">
			<a href="{{ route('profilPanti') }}">Profil</a>
		</li>
		<li class="menu-item">
			<a href="{{ route('kegiatanpantiasuhan') }}">Kegiatan</a>
		</li>
		<li class="menu-item">
			<a href="{{ route('kebutuhanp') }}">Kebutuhan</a>
		</li>
		<li class="menu-item">
			<a href="{{ route('operasional') }}">Operasional</a>
		</li>
		<li class="menu-item">
			<a href="{{ route('donatur') }}">Donasi</a>
		</li>
	</ul>
</div>


				</div>

				<div class="col-md-4">

					<div class="footer-menu menu-item-03">
						<h5>contact info</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<i class="icon icon-location"></i>{{ $profil->alamat ?? 'Alamat belum diisi' }}</li>
							<!-- <li class="menu-item">
								<i class="icon icon-location2"></i>Jl. Gereja Silamosik II
							</li> -->
							<li class="menu-item">
								<i class="icon icon-phone"></i>{{ $profil->nomor_telepon ?? 'Nomor telepon belum diisi' }}</li>
							<li class="menu-item">
								<i class="icon icon-envelope-o"></i><a href="#" class="mail-id">{{ $profil->email ?? 'Email belum diisi' }}</a>
							</li>
						</ul>
					</div>

				</div>

				<div class="col-md-3">

					<div class="footer-menu menu-item-04">
						<h5>gallery</h5>
						<div class="gallery">
							<a href="images/spacejoy.jpg" data-lightbox-gallery="gallery1"
								title="Calm Before The Storm (One Shoe Photography Ltd.)" class="image-link"><img
									src="images/tab1.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/tab2.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/tab3.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/postimg1.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/postimg2.jpg" alt="house" class="gallery-image"></a>
							<a href="images/interior.jpg" data-lightbox-gallery="gallery1"
								title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
									src="images/postimg3.jpg" alt="house" class="gallery-image"></a>
						</div>
					</div>

				</div>

			</div>
		</div>
	</footer>

	<!-- <div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="copyright">
						<p>© 2025 Kel 9. All rights reserved.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="copyright text-right">
						<p>HTML Template by <a href="https://www.templatesjungle.com/"
								target="_blank">TemplatesJungle</a> distributed By <a href="https://themewagon.com" target="blank">ThemeWagon</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div> -->