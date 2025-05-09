<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Operasional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
        }
        .schedule-row {
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(10px);
        }
        .schedule-row.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="text-gray-800">
    <main class="max-w-5xl mx-auto px-4 py-12">
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Jadwal Operasional</h1>
            <p class="text-gray-600">Informasi kegiatan harian dan program Panti Asuhan Hope Village</p>
        </header>

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-3 bg-gray-100 text-gray-600 text-sm font-semibold px-6 py-4">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3M16 7V3M4 11h16M4 19h16M4 15h16"></path></svg>
                    <span>Hari</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"></path><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"></circle></svg>
                    <span>Waktu</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17l-3.5-4.5L9.75 8M14.25 8l3.5 4.5-3.5 4.5"></path></svg>
                    <span>Program</span>
                </div>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="grid grid-cols-3 px-6 py-4 schedule-row"> <div>Senin</div> <div>08:00 - 17:00</div> <div>Kelas Reguler</div> </div>
                <div class="grid grid-cols-3 px-6 py-4 schedule-row"> <div>Selasa</div> <div>08:00 - 17:00</div> <div>Seni Budaya</div> </div>
                <div class="grid grid-cols-3 px-6 py-4 schedule-row"> <div>Rabu</div> <div>09:00 - 16:00</div> <div>Menulis</div> </div>
                <div class="grid grid-cols-3 px-6 py-4 schedule-row"> <div>Kamis</div> <div>10:00 - 18:00</div> <div>Kesenian Lokal</div> </div>
                <div class="grid grid-cols-3 px-6 py-4 schedule-row"> <div>Jumat</div> <div>08:30 - 15:30</div> <div>Olahraga</div> </div>
                <div class="grid grid-cols-3 px-6 py-4 schedule-row"> <div>Sabtu</div> <div>10:00 - 14:00</div> <div>Privat</div> </div>
                <div class="grid grid-cols-3 px-6 py-4 schedule-row"> <div>Minggu</div> <div>13:00 - 16:30</div> <div>Workshop</div> </div>
            </div>
        </div>

        <div class="mt-6 text-sm text-yellow-700 bg-yellow-50 border border-yellow-300 rounded-lg px-4 py-3">
            <strong>Catatan:</strong> Jadwal dapat berubah sewaktu-waktu, terutama saat libur nasional atau kegiatan khusus.
        </div>

        <!-- Contact & Location Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <!-- Contact Information -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-semibold text-black-800 mb-4">Kontak Informasi</h2>
                
                <div class="flex items-center mb-4">
                    <div class="bg-black-100 rounded-full p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-black-500">WhatsApp</p>
                        <a href="https://wa.me/6281232434325" class="text-blue-600 hover:underline">081232434325</a>
                    </div>
                </div>
                
                <div class="flex items-center mb-4">
                    <div class="bg-black-100 rounded-full p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-black-500">Email</p>
                        <a href="mailto:contact@example.com" class="text-blue-600 hover:underline">contact@example.com</a>
                    </div>
                </div>
                
                <div class="flex items-center">
                    <div class="bg-black-100 rounded-full p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-black-500">Website</p>
                        <a href="https://www.example.com" class="text-blue-600 hover:underline">www.example.com</a>
                    </div>
                </div>
            </div>
            
            <!-- Location Information -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-semibold text-black-800 mb-4">Lokasi Kami</h2>
                <div class="aspect-w-16 aspect-h-9 mb-4">
                    <iframe class="w-full h-64 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0537024133226!2d106.8269313!3d-6.2518277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTUnMDUuOCJTIDEwNsKwNDknMzcuMCJF!5e0!3m2!1sen!2sid!4v1620051422486!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <p class="text-black-600">Jl. Contoh No. 123, Kecamatan, Kota, Provinsi 12345</p>
            </div>
        </div>
    </main>

    @include('user.partials.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
