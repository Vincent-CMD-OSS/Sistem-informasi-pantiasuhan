<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Operasional</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/kebutuhan.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    @include('admin.partials.asidebar', ['activeMenu' => 'operasional'])

    <!-- Main Content -->
    <div class="main-content">
        @include('admin.partials.topbar')
        
        <div class="content-container">
            <!-- Content Header -->
            <div class="content-header">
                <h2>Daftar Operasional</h2>
            </div>

            <div class="content-area">
                @include('admin.jadwal.partial', [
                    'jadwalOperasional' => $jadwalOperasional,
                    'jadwalKhusus' => $jadwalKhusus
                ])
            </div>

        </div>
    </div>
</body>
</html>
