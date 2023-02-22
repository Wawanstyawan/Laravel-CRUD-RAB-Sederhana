<ul class="navbar-nav sidebar sidebar-dark accordion pinggir" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-text mx-3">Menu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">
  
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kegiatans.index') }}">
            <i class="fas fa-fw fa-coins"></i>
            <span>RAB Kegiatan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengguna.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Pengguna</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('cara_pakais.index') }}">
            <i class="fas fa-fw fa-question"></i>
            <span>How to Use</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
</ul>