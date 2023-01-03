    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('autentifikasi'); ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Pengiriman <sup>Barang</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Beranda</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Master Data
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('supir/supir'); ?>">
                <i class="fas fa-fw fa-book"></i>
                <span>Supir</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('kendaraan/kendaraan'); ?>">
                <i class="fas fa-fw fa-book"></i>
                <span>Kendaraan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('pelanggan/pelanggan'); ?>">
                <i class="fas fa-fw fa-book"></i>
                <span>Pelanggan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('pengiriman/pengiriman'); ?>">
                <i class="fas fa-fw fa-book"></i>
                <span>Pengiriman</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
                <i class="fas fa-users fa-fw"></i>
                <span>Pengguna</span>
            </a>
        </li>
        <br>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->