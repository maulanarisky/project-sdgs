<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../s_admin/index.html">
        <div class="sidebar-brand-text mx-3"><img src="../img/logo.svg" alt=""></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('menu') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/menu">Capaian TPB/SDGs</a>
                <a class="collapse-item" href="#">Program TPB Pusat</a>
                <a class="collapse-item" href="#">Program TPB Daerah</a>
                <a class="collapse-item" href="#">Program TPB Mitra Swasta</a>
                <a class="collapse-item" href="#">Program TPB Akademik</a>
                <a class="collapse-item" href="#">Program TPB Swasta</a>
                <a class="collapse-item" href="#">Rencana Tindak Lanjut</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pilar -->
    <li class="nav-item {{ Request::is('menu/pilar*') ? 'active' : '' }}">
        <a class="nav-link" href="/menu/pilar">
            <i class="fas fa-fw fa-archway"></i>
            <span>Pilar</span></a>
    </li>

    <!-- Nav Item - Tujuan -->
    <li class="nav-item {{ Request::is('menu/tujuan*') ? 'active' : '' }}">
        <a class="nav-link" href="/menu/tujuan">
            <i class="fas fa-fw fa-map"></i>
            <span>Tujuan</span></a>
    </li>
    <!-- Nav Item - Target -->
    <li class="nav-item {{ Request::is('menu/target*') ? 'active' : '' }}">
        <a class="nav-link" href="/menu/target">
            <i class="fas fa-fw fa-paper-plane"></i>
            <span>Target</span></a>
    </li>

    <!-- Nav Item - Indikator -->
    <li class="nav-item {{ Request::is('menu/indikator*') ? 'active' : '' }}">
        <a class="nav-link" href="/menu/indikator">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Indikator</span></a>
    </li>
       <!-- Nav Item - Program -->
    <li class="nav-item {{ Request::is('menu/program*') ? 'active' : '' }}">
        <a class="nav-link" href="/menu/program">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Program</span></a>
    </li>
       <!-- Nav Item - Kegiatan -->
    <li class="nav-item {{ Request::is('menu/kegiatan*') ? 'active' : '' }}">
        <a class="nav-link" href="/menu/kegiatan">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Kegiatan</span></a>
    </li>
       <!-- Nav Item - Rincian Output -->
    <li class="nav-item">
        <a class="nav-link" href="../s_admin/indikator.html">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Rincian Output</span></a>
    </li>
         <!-- Nav Item - Sub Kegiatan -->
    <li class="nav-item">
        <a class="nav-link" href="../s_admin/indikator.html">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Sub Kegiatan</span></a>
    </li>
         <!-- Nav Item - Output Kegiatan -->
    <li class="nav-item">
        <a class="nav-link" href="../s_admin/indikator.html">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Output Kegiatan</span></a>
    </li>
        {{-- nav item - Rencana Tindak Lanjut --}}
    <li class="nav-item">
        <a class="nav-link" href="../s_admin/indikator.html">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Rencana Tindak Lanjut</span></a>
    </li>

    <!-- Nav Item - kelola pengguna -->
    <li class="nav-item {{ Request::is('menu/user*') ? 'active' : '' }}">
        <a class="nav-link" href="/menu/user">
            <i class="fas fa-fw fa-user-friends">
                
            </i>
            <span>Kelola Pengguna</span></a>
    </li>

    <!-- Nav Item - pelaporan pembelajaran -->
    <li class="nav-item {{ Request::is('menu/pp*') ? 'active' : '' }}">
        <a class="nav-link" href="/menu/pp">
            <i class="fas fa-fw fa-book"></i>
            <span>Pelaporan Pembelajaran</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <span>
                    Tujuan Pembangunan Berkelanjutan - Kaltim
                </span>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            {{ Auth::user()->name }}
                        </span>
                        <img class="img-profile rounded-circle"src="../img/undraw_profile.svg">
                    </a>

                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
<!-- End of Page Wrapper -->