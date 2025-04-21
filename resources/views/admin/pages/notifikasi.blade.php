<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Notifikasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/kebutuhan.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    @include('admin.partials.asidebar', ['activeMenu' => 'notifikasi'])

    <!-- Main Content -->
    <div class="main-content">
        @include('admin.partials.topbar')
        
        <div class="content-container">
            <!-- Content Header -->
            <div class="content-header">
                <h2>Daftar Kegiatan</h2>
            </div>
            
            <!-- Content Area - Left Empty as Requested -->
            <div class="content-area">
                <!-- This area is intentionally left empty as requested -->
                <div id="listDonasi" style="display: block;">
                @include('admin.donasi.index', ['donasi' => \App\Models\Donasi::all()])
                </div>

                <div id="formEdit" style="display: none;">
                    <!-- {{-- Akan dimuat dengan AJAX --}} -->
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Tombol Tambah
                        document.getElementById("tambah-btn").addEventListener("click", function () {
                            fetch("{{ route('admin.donasi.create') }}")
                                .then(response => response.text())
                                .then(html => {
                                    document.getElementById("formEdit").innerHTML = html;
                                    document.getElementById("formEdit").style.display = "block";
                                    document.getElementById("listDonasi").style.display = "none";
                                });
                        });

                        // (Tambahkan logika edit juga kalau sudah siap)
                    });
                </script>

            </div>
        </div>
    </div>
</body>
</html>