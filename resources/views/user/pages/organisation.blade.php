<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Organisation</title>
    
    <!-- INI BAGIAN LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

		
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <Link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icomoon.css') }}">
    <style>
        body {
            background-color: black;
            font-family: Arial, sans-serif;
        }
    </style>
    <!-- INI AKHIR BAGIAN LINK -->
</head>
<body>

    <!-- INI BAGIAN NAVBAR -->

    @include('user.partials.navbar')

    <div class="side-nav-bar">
		<input id="menu-toggle" type="checkbox" />
		<label class="menu-btn" for="menu-toggle">
			<span></span>
		</label>
	</div>

    <!-- INI BAGIAN NAVBAR -->

    <!-- include('components.footer') -->

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Plugin dan Skrip Tambahan -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    	<!-- Bootstrap -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script> -->

	<!-- Isotope (untuk filtering layout jika dibutuhkan) -->
	<!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> -->

</body>
</html>