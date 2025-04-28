<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Rumah Harapan</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Animation Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .animate__animated { 
            animation-duration: 1s; 
        }
        
        .transition-all {
            transition: all 0.3s ease;
        }
        
        .hero-bg {
            background-image: url('{{ asset("images/children-hero.jpg") }}');
            background-size: cover;
            background-position: center;
        }
        
        .hover-up:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-between py-4">
                <div class="flex items-center space-x-4">
                    <a href="/" class="flex items-center space-x-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Rumah Harapan" class="h-10 w-auto">
                        <span class="text-xl font-bold text-blue-800">Rumah Harapan</span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">Beranda</a>
                    <a href="/profil" class="text-blue-600 font-semibold border-b-2 border-blue-600 pb-1">Profil</a>
                    <a href="/program" class="text-gray-700 hover:text-blue-600 font-medium">Program</a>
                    <a href="/galeri" class="text-gray-700 hover:text-blue-600 font-medium">Galeri</a>
                    <a href="/artikel" class="text-gray-700 hover:text-blue-600 font-medium">Artikel</a>
                    <a href="/kontak" class="text-gray-700 hover:text-blue-600 font-medium">Kontak</a>
                </div>
                
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </nav>
            
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden py-2 pb-4">
                <a href="/" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded-md">Beranda</a>
                <a href="/profil" class="block px-4 py-2 bg-blue-50 text-blue-600 font-medium rounded-md">Profil</a>
                <a href="/program" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded-md">Program</a>
                <a href="/galeri" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded-md">Galeri</a>
                <a href="/artikel" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded-md">Artikel</a>
                <a href="/kontak" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 rounded-md">Kontak</a>
            </div>
        </div>
    </header>

    <!-- Hero Section with Parallax Effect -->
    <div class="relative h-96 overflow-hidden hero-bg">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-indigo-800 opacity-80"></div>
        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 animate__animated animate__fadeInUp">Profil</h1>
                <p class="text-lg md:text-xl text-white opacity-90">Mengenal lebih dekat visi, misi, dan sejarah kami</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <div class="container mx-auto px-4 py-12">
            <!-- Breadcrumbs -->
            <div class="flex items-center text-sm text-gray-600 mb-8">
                <a href="/" class="hover:text-blue-600">Beranda</a>
                <span class="mx-2">/</span>
                <span class="font-medium text-blue-600">Profil</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 mb-24">
                <!-- Vision and Mission Section -->
                <div class="order-2 md:order-1">
                    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 transform transition-all hover:shadow-xl">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-4">Visi dan Misi</h2>
                        
                        <h3 class="text-xl font-semibold text-blue-800 mb-3">Visi:</h3>
                        <p class="text-gray-700 mb-6">Menjadi lembaga pendidikan prasekolah terbaik yang memberikan anak kecil lingkungan yang aman dan bahagia untuk mengembangkan potensi mereka secara optimal.</p>
                        
                        <h3 class="text-xl font-semibold text-blue-800 mb-3">Misi:</h3>
                        <ul class="text-gray-700 space-y-2 pl-5">
                            <li class="flex items-start">
                                <span class="inline-block text-blue-600 mr-2">•</span>
                                <span>Menyediakan pengalaman dan pendidikan yang baik agar anak-anak dapat tumbuh dan berkembang secara sehat.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block text-blue-600 mr-2">•</span>
                                <span>Memotivasi potensi-potensi yang dimiliki anak untuk menjadi pribadi yang kreatif, pembentukan akhlak, dan bergaya hidup sehat.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block text-blue-600 mr-2">•</span>
                                <span>Menciptakan lingkungan belajar yang menyenangkan dan efektif.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Image Section -->
                <div class="order-1 md:order-2 flex items-center justify-center">
                    <div class="relative">
                        <img src="{{ asset('images/children-activities.jpg') }}" alt="Aktivitas Anak" class="rounded-lg shadow-md object-cover w-full h-80 md:h-full">
                        <div class="absolute -bottom-6 -right-6 bg-yellow-400 w-24 h-24 md:w-32 md:h-32 rounded-full flex items-center justify-center shadow-lg">
                            <span class="text-blue-900 font-bold text-lg md:text-xl">Sejak 2012</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- History Section -->
            <div class="bg-gray-50 rounded-xl p-6 md:p-8 mb-24 shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Sejarah singkat</h2>
                <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-4">
                    <div class="md:w-1/3">
                        <div class="bg-blue-100 p-6 rounded-lg h-full flex flex-col items-center justify-center hover-up transition-all">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-blue-600 rounded-full flex items-center justify-center text-white text-xl md:text-2xl font-bold mb-4">2012</div>
                            <h3 class="text-lg md:text-xl font-semibold mb-2 text-center">Awal Berdiri</h3>
                            <p class="text-gray-700 text-center">Didirikan dengan tekad memberikan pendidikan berkualitas untuk anak-anak usia dini.</p>
                        </div>
                    </div>
                    <div class="md:w-1/3">
                        <div class="bg-blue-100 p-6 rounded-lg h-full flex flex-col items-center justify-center hover-up transition-all">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-blue-600 rounded-full flex items-center justify-center text-white text-xl md:text-2xl font-bold mb-4">2018</div>
                            <h3 class="text-lg md:text-xl font-semibold mb-2 text-center">Pengembangan</h3>
                            <p class="text-gray-700 text-center">Memperluas layanan dan fasilitas untuk mengakomodasi lebih banyak anak-anak.</p>
                        </div>
                    </div>
                    <div class="md:w-1/3">
                        <div class="bg-blue-100 p-6 rounded-lg h-full flex flex-col items-center justify-center hover-up transition-all">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-blue-600 rounded-full flex items-center justify-center text-white text-xl md:text-2xl font-bold mb-4">2023</div>
                            <h3 class="text-lg md:text-xl font-semibold mb-2 text-center">Inovasi</h3>
                            <p class="text-gray-700 text-center">Menerapkan metode pembelajaran modern dan teknologi pendidikan terbaru.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Goals Section with Cards -->
            <div class="mb-24">
                <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Tujuan dibentuk</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                    <div class="bg-white rounded-xl shadow-lg p-6 transition-all hover:shadow-xl hover-up">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-center mb-4">Mengembangkan Potensi</h3>
                        <p class="text-gray-700 text-center">Membantu setiap anak untuk mengembangkan potensi diri secara optimal dalam suasana yang menyenangkan.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-6 transition-all hover:shadow-xl hover-up">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-center mb-4">Pendidikan Berkualitas</h3>
                        <p class="text-gray-700 text-center">Memberikan pendidikan bermutu tinggi dengan kurikulum yang komprehensif dan kegiatan yang mendukung.</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-6 transition-all hover:shadow-xl hover-up">
                        <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mb-6 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-center mb-4">Pembentukan Karakter</h3>
                        <p class="text-gray-700 text-center">Menanamkan nilai-nilai moral dan etika sejak dini untuk membentuk karakter yang kuat dan positif.</p>
                    </div>
                </div>
            </div>

            <!-- Meaning and Location Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16">
                <!-- Meaning Section -->
                <div class="bg-indigo-50 rounded-xl p-6 md:p-8 shadow-lg">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Makna "Rumah Harapan"</h2>
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="text-indigo-500 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 md:h-12 md:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <p class="text-gray-700">
                            "Rumah Harapan" merupakan tempat di mana setiap anak dapat menemukan harapan untuk masa depan melalui pendidikan dan lingkungan yang mendukung. Kami menciptakan atmosfer seperti rumah yang nyaman dan aman, dengan harapan bahwa setiap anak dapat tumbuh dan berkembang menjadi pribadi yang unggul.
                        </p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <blockquote class="italic text-gray-600">
                            "Setiap anak adalah bintang yang bersinar dengan caranya sendiri. Tugas kami adalah membantu mereka menemukan cahaya tersebut."
                        </blockquote>
                    </div>
                </div>
                
                <!-- Location Section -->
                <div class="bg-rose-50 rounded-xl p-6 md:p-8 shadow-lg">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Lokasi dan Tahun berdiri</h2>
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="text-rose-500 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 md:h-12 md:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 mb-4">
                                Rumah Harapan didirikan pada tahun 2012 di pusat kota dengan tujuan memberikan akses pendidikan berkualitas untuk semua lapisan masyarakat.
                            </p>
                            <div class="text-gray-700">
                                <p class="font-semibold">Alamat:</p>
                                <p>Jl. Pendidikan No. 123</p>
                                <p>Kecamatan Harapan, Jakarta Selatan</p>
                                <p>Indonesia 12345</p>
                            </div>
                        </div>
                    </div>
                    <div class="aspect-w-16 aspect-h-9">
                        <div class="w-full h-48 bg-gray-300 rounded-lg shadow">
                            <!-- Placeholder for map -->
                            <div class="w-full h-full flex items-center justify-center bg-gray-200 rounded-lg">
                                <p class="text-gray-600">Peta Lokasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 py-12 md:py-16 mt-12">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 md:mb-6">Bergabunglah Dengan Rumah Harapan</h2>
                <p class="text-white text-lg md:text-xl mb-6 md:mb-8 max-w-3xl mx-auto">Berikan anak Anda pendidikan terbaik dalam lingkungan yang penuh kasih sayang dan dukungan.</p>
                <a href="/pendaftaran" class="inline-block bg-white text-blue-600 font-bold px-6 py-3 rounded-full hover:bg-blue-100 transition-all shadow-lg">Daftar Sekarang</a>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Rumah Harapan</h3>
                    <p class="text-gray-400 mb-4">Memberikan pendidikan terbaik untuk masa depan cerah anak Indonesia.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.054 10.054 0 01-3.127 1.195A4.92 4.92 0 0016.77 2.244c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.64 3.162a4.92 4.92 0 001.523 6.574 4.885 4.885 0 01-2.23-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.94 4.94 0 01-2.224.084 4.918 4.918 0 004.6 3.419A9.9 9.9 0 010 19.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 4.557z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="/profil" class="text-white font-medium">Profil</a></li>
                        <li><a href="/program" class="text-gray-400 hover:text-white">Program</a></li>
                        <li><a href="/galeri" class="text-gray-400 hover:text-white">Galeri</a></li>
                        <li><a href="/artikel" class="text-gray-400 hover:text-white">Artikel</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Program</h3>
                    <ul class="space-y-2">
                        <li><a href="/program/playgroup" class="text-gray-400 hover:text-white">Playgroup</a></li>
                        <li><a href="/program/tk" class="text-gray-400 hover:text-white">Taman Kanak-kanak</a></li>
                        <li><a href="/program/ekstrakurikuler" class="text-gray-400 hover:text-white">Ekstrakurikuler</a></li>
                        <li><a href="/program/parenting" class="text-gray-400 hover:text-white">Parenting</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Jl. Pendidikan No. 123, Jakarta Selatan</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>(021) 1234-5678</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>info@rumahharapan.sch.id</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Senin - Jumat: 07.30 - 16.00</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">&copy; 2025 Rumah Harapan. Hak Cipta Dilindungi.</p>
                    <div class="mt-4 md:mt-0">
                        <ul class="flex space-x-4 text-sm text-gray-400">
                            <li><a href="/kebijakan-privasi" class="hover:text-white">Kebijakan Privasi</a></li>
                            <li><a href="/syarat-ketentuan" class="hover:text-white">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="fixed bottom-8 right-8 bg-blue-600 text-white rounded-full p-3 shadow-lg hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <!-- Javascript -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Scroll to top button
        const scrollToTopButton = document.getElementById('scroll-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopButton.classList.remove('hidden');
            } else {
                scrollToTopButton.classList.add('hidden');
            }
        });
        
        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Animations on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.hover-up');
            
            elements.forEach(element => {
                const position = element.getBoundingClientRect();
                
                // Check if element is in viewport
                if(position.top < window.innerHeight && position.bottom >= 0) {
                    element.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        };
        
        window.addEventListener('scroll', animateOnScroll);
        
        // Initial call to animate elements that are already in view
        animateOnScroll();
    </script>
</body>
</html>