<div class="sidebar">
    <div class="logo-container">
        <div class="logo">
            <i class="fas fa-cube"></i>
        </div>
        <div class="logo-text">Your Logo</div>
    </div>
    
    <a href="{{ route('admin.beranda') }}" class="menu-item {{ $activeMenu == 'beranda' ? 'active' : '' }}">
        <i class="fas fa-th-large"></i>
        <span class="menu-label">Beranda</span>
    </a>
    
    <a href="{{ route('admin.profile') }}" class="menu-item {{ $activeMenu == 'profile' ? 'active' : '' }}">
        <i class="fas fa-table"></i>
        <span class="menu-label">Profile</span>
    </a>
    
    <a href="{{ route('admin.kegiatan.index') }}" class="menu-item {{ $activeMenu == 'kegiatan' ? 'active' : '' }}">
        <i class="fas fa-file-invoice"></i>
        <span class="menu-label">Galeri</span>
    </a>
    
    <a href="{{ route('admin.kebutuhan.index') }}" class="menu-item {{ $activeMenu == 'kebutuhanPanti' ? 'active' : '' }}">
        <i class="fas fa-vr-cardboard"></i>
        <span class="menu-label">Kebutuhan</span>
    </a>
    
    <a href="{{ route('admin.operasional.index') }}" class="menu-item {{ $activeMenu == 'operasional' ? 'active' : '' }}">
        <i class="fas fa-align-right"></i>
        <span class="menu-label">Operasional</span>
    </a>
    
    <a href="{{ route('admin.notifikasi') }}" class="menu-item {{ $activeMenu == 'notifikasi' ? 'active' : '' }}">
        <i class="fas fa-bell"></i>
        <span class="menu-label">Notifikasi</span>
    </a>
    
    <div class="menu-divider">ACCOUNT PAGES</div>
    
    <div class="footer">
        <a href="#" class="docs-button">
            Documentation
        </a>
        <a href="#" class="action-button">
            Upgrade to pro
        </a>
    </div>
</div>