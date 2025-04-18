<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Profil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/kebutuhan.css" rel="stylesheet">
</head>
<body>
    <h1>PROFIL</h1>
    <!-- Sidebar -->
    @include('admin.partials.asidebar', ['activeMenu' => 'profil'])

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar with Breadcrumb and Search -->
        <div class="top-bar">
            <div class="breadcrumb">
                <a href="#" class="breadcrumb-item">Pages</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-item active">Kegiatan</span>
            </div>
            
            <div class="top-bar-actions">
                <input type="text" class="search-bar" placeholder="Type here...">
                <button class="action-btn">Online Builder</button>
                <button class="icon-btn">
                    <i class="fas fa-star"></i>
                </button>
                <button class="icon-btn">
                    <i class="fas fa-cog"></i>
                </button>
                <button class="icon-btn">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="icon-btn">
                    <i class="fas fa-user-circle"></i>
                </button>
            </div>
        </div>
        
        <div class="content-container">
            <!-- Content Header -->
            <div class="content-header">
                <h2>Daftar Kegiatan</h2>
            </div>
            
            <!-- Content Area - Left Empty as Requested -->
            <div class="content-area">
                <!-- This area is intentionally left empty as requested -->
                <p style="color: #999; text-align: center; padding-top: 180px;">
                    This area is left empty for your custom components
                </p>
            </div>
        </div>
    </div>
</body>
</html>