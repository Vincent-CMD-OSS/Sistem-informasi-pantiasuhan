<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kegiatan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/kebutuhan.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    @include('admin.partials.asidebar', ['activeMenu' => 'kegiatan'])

    <!-- Main Content -->
    <div class="main-content">
        @include('admin.partials.topbar')
        
        <div class="content-container">
            <!-- Content Header -->
            <div class="content-header">
                <h2>Daftar Kegiatan</h2>
            </div>
            
            <!-- <div class="content-area">
                <p style="color: #999; text-align: center; padding-top: 180px;">
                    This area is left empty for your custom components
                </p>
            </div> -->

            <div class="content-area">
                {{-- Include daftar kegiatan --}}
                @include('admin.kegiatan.index', ['kegiatan' => $kegiatan])
                
                {{-- Kalau ada mode edit --}}
                @if (isset($editMode) && $editMode === true && isset($editKegiatan))
                    @include('admin.kegiatan.edit', ['kegiatan' => $editKegiatan])
                @endif
            </div>
        </div>
    </div>
</body>
</html>