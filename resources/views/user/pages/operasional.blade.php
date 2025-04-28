<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Operasional</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .schedule-row {
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateX(1rem);
        }
        .schedule-row.show {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
</head>
<body>

    <main class="container mx-auto py-8 px-4">
        <!-- Hero Section with Overlay -->
        <div class="relative rounded-xl overflow-hidden mb-10 shadow-lg">
            <div class="h-64 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/1200x600/?students');">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-600/40 flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-white mb-2">Jadwal Operasional</h1>
                    <p class="text-white text-lg">Informasi lengkap jadwal kegiatan kami</p>
                </div>
            </div>
        </div>

        <!-- Schedule Section -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-blue-800 mb-6 pb-2 border-b border-gray-200">Jam Operasional</h2>
            
            <div class="overflow-hidden rounded-lg">
                <div class="bg-gray-50 py-3 px-4 flex border-b border-gray-200">
                    <div class="w-1/3 font-semibold text-gray-700">Hari</div>
                    <div class="w-1/3 font-semibold text-gray-700">Waktu</div>
                    <div class="w-1/3 font-semibold text-gray-700">Program</div>
                </div>
                
                <div class="divide-y divide-gray-200">
                    <div class="flex py-4 px-4 hover:bg-blue-50 transition duration-150 schedule-row">
                        <div class="w-1/3 text-gray-800">Senin</div>
                        <div class="w-1/3 text-gray-800">08:00 - 17:00</div>
                        <div class="w-1/3 text-gray-800">Kelas Reguler</div>
                    </div>
                    
                    <div class="flex py-4 px-4 hover:bg-blue-50 transition duration-150 schedule-row">
                        <div class="w-1/3 text-gray-800">Selasa</div>
                        <div class="w-1/3 text-gray-800">08:00 - 17:00</div>
                        <div class="w-1/3 text-gray-800">Seni Budaya</div>
                    </div>
                    
                    <div class="flex py-4 px-4 hover:bg-blue-50 transition duration-150 schedule-row">
                        <div class="w-1/3 text-gray-800">Rabu</div>
                        <div class="w-1/3 text-gray-800">09:00 - 16:00</div>
                        <div class="w-1/3 text-gray-800">Menulis</div>
                    </div>
                    
                    <div class="flex py-4 px-4 hover:bg-blue-50 transition duration-150 schedule-row">
                        <div class="w-1/3 text-gray-800">Kamis</div>
                        <div class="w-1/3 text-gray-800">10:00 - 18:00</div>
                        <div class="w-1/3 text-gray-800">Kesenian Lokal</div>
                    </div>
                    
                    <div class="flex py-4 px-4 hover:bg-blue-50 transition duration-150 schedule-row">
                        <div class="w-1/3 text-gray-800">Jumat</div>
                        <div class="w-1/3 text-gray-800">08:30 - 15:30</div>
                        <div class="w-1/3 text-gray-800">Olahraga</div>
                    </div>
                    
                    <div class="flex py-4 px-4 hover:bg-blue-50 transition duration-150 schedule-row">
                        <div class="w-1/3 text-gray-800">Sabtu</div>
                        <div class="w-1/3 text-gray-800">10:00 - 14:00</div>
                        <div class="w-1/3 text-gray-800">Privat</div>
                    </div>
                    
                    <div class="flex py-4 px-4 hover:bg-blue-50 transition duration-150 schedule-row">
                        <div class="w-1/3 text-gray-800">Minggu</div>
                        <div class="w-1/3 text-gray-800">13:00 - 16:30</div>
                        <div class="w-1/3 text-gray-800">Workshop</div>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-yellow-700">
                            <strong>NB:</strong> Jadwal dapat berubah saat hari libur atau kegiatan khusus
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact & Location Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <!-- Contact Information -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-semibold text-blue-800 mb-4">Kontak Informasi</h2>
                
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 rounded-full p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">WhatsApp</p>
                        <a href="https://wa.me/6281232434325" class="text-blue-600 hover:underline">081232434325</a>
                    </div>
                </div>
                
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 rounded-full p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <a href="mailto:contact@example.com" class="text-blue-600 hover:underline">contact@example.com</a>
                    </div>
                </div>
                
                <div class="flex items-center">
                    <div class="bg-blue-100 rounded-full p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Website</p>
                        <a href="https://www.example.com" class="text-blue-600 hover:underline">www.example.com</a>
                    </div>
                </div>
            </div>
            
            <!-- Location Information -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-semibold text-blue-800 mb-4">Lokasi Kami</h2>
                <div class="aspect-w-16 aspect-h-9 mb-4">
                    <iframe class="w-full h-64 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0537024133226!2d106.8269313!3d-6.2518277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTUnMDUuOCJTIDEwNsKwNDknMzcuMCJF!5e0!3m2!1sen!2sid!4v1620051422486!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <p class="text-gray-600">Jl. Contoh No. 123, Kecamatan, Kota, Provinsi 12345</p>
            </div>
        </div>
        
        @include('user.partials.footer')
       
    </main>
                        
    

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });

        // Animation for schedule rows
        document.addEventListener('DOMContentLoaded', function() {
            const scheduleRows = document.querySelectorAll('.schedule-row');
            scheduleRows.forEach((row, index) => {
                setTimeout(() => {
                    row.classList.add('show');
                }, 100 * index);
            });
        });
    </script>
</body>
</html>