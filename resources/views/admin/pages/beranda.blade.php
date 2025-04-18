<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Beranda</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/kebutuhan.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    @include('admin.partials.asidebar', ['activeMenu' => 'beranda'])

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar with Breadcrumb and Search -->
        <div class="top-bar">
            <div class="breadcrumb">
                <a href="#" class="breadcrumb-item">Pages</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-item active">Beranda</span>
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
                <h2>Dashboard Overview</h2>
            </div>
            
            <!-- Stats Cards Row -->
            <div class="stats-cards">
                <div class="stat-card">
                    <div class="stat-card-title">Total Users</div>
                    <div class="stat-card-value">1,245</div>
                    <div class="stat-card-comparison positive">+12% than last month</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-card-title">New Posts</div>
                    <div class="stat-card-value">42</div>
                    <div class="stat-card-comparison positive">+8% than last week</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-card-title">Total Gallery</div>
                    <div class="stat-card-value">156</div>
                    <div class="stat-card-comparison negative">-3% than yesterday</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-images"></i>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-card-title">Active Events</div>
                    <div class="stat-card-value">8</div>
                    <div class="stat-card-comparison positive">+2 from last month</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                </div>
            </div>
            
            <!-- Content Area -->
            <div class="content-area">
                <div class="dashboard-widgets">
                    <div class="widget">
                        <h3>Recent Activities</h3>
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-icon"><i class="fas fa-plus"></i></div>
                                <div class="activity-content">
                                    <div class="activity-title">New gallery added</div>
                                    <div class="activity-time">2 hours ago</div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon"><i class="fas fa-edit"></i></div>
                                <div class="activity-content">
                                    <div class="activity-title">Profile updated</div>
                                    <div class="activity-time">Yesterday</div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon"><i class="fas fa-user-plus"></i></div>
                                <div class="activity-content">
                                    <div class="activity-title">New user registered</div>
                                    <div class="activity-time">2 days ago</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>