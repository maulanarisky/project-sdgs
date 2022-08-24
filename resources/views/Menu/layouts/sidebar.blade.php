<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3"><img src="/img/logo.svg" alt=""></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @can('superadmin')

        <li class="nav-item {{ Request::is('menu/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item {{ Request::is('menu/user*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/user">
                <i class="fas fa-fw fa-user-friends"></i>
                <span>Kelola Pengguna</span></a>
        </li>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Rekapitulasi</span>
        </h6>

        <li class="nav-item {{ Request::is('menu/capaian*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                @if (now()->year == $tahun->name)
                    <a class="nav-link" href="/menu/capaian/{{ $tahun->id }}">
                        <i class="fas fa-fw fa-book"></i>
                        <span>FORM 1</span>
                    </a>
                @endif
            @endforeach
        </li>

          <li class="nav-item  {{ Request::is('menu/pusat*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/pusat/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 2A</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <li class="nav-item  {{ Request::is('menu/pemda*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/pemda/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 2B Provinsi</span>
                        </a>
                    @endif
            @endforeach
        </li>
        <li class="nav-item  {{ Request::is('menu/pkabkota*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/pkabkota/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 2B Kab/kota</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <li class="nav-item {{ Request::is('menu/mitraswasta*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/mitraswasta/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 3</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <li class="nav-item {{ Request::is('menu/umkm*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/umkm">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 4</span>
            </a>
        </li>
        
        <li class="nav-item {{ Request::is('menu/rtl*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 5</span></a>
        </li>
        
        <!-- Nav Item - pelaporan pembelajaran -->
        <li class="nav-item {{ Request::is('menu/pp*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>

        <!-- Nav Item - Laporan Pencapaian TPB  -->
        <li class="nav-item {{ Request::is('menu/lp*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/lp">
                <i class="fas fa-fw fa-book"></i>
                <span>Laporan Pencapaian TPB </span>
            </a>
        </li>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Meta Data</span>
        </h6>

        <li class="nav-item {{ Request::is('menu/pilar*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/pilar">
                <i class="fas fa-fw fa-book"></i>
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
                <i class="fas fa-fw fa-database"></i>
                <span>Indikator</span></a>
        </li>
       
      
    @endcan

    @can('skpd')
        <li class="nav-item {{ Request::is('menu/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>FORMulir Evaluasi</span>
        </h6>
        <li class="nav-item {{ Request::is('menu/capaian*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/capaian/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 1</span>
                        </a>
                    @endif
            @endforeach
        </li>
        
        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>FORMulir Realisasi Program</span>
        </h6>

        <!-- Nav Item - Program -->
        {{-- <li class="nav-item {{ Request::is('menu/program*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/program">
                <i class="fas fa-fw fa-book"></i>
                <span>Program</span></a>
        </li> --}}
       <!-- Nav Item - Kegiatan -->
        {{-- <li class="nav-item {{ Request::is('menu/kegiatan*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/kegiatan">
                <i class="fas fa-fw fa-book"></i>
                <span>Kegiatan</span></a>
        </li> --}}
        <!-- Nav Item - Sub Kegiatan -->
        <li class="nav-item  {{ Request::is('menu/pemda*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/pemda/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 2B</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut/span>
        </h6>

        {{-- nav item - Rencana Tindak Lanjut --}}
        <li class="nav-item {{ Request::is('menu/rtl*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 5</span>
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <!-- Nav Item - pelaporan pembelajaran -->
        <li class="nav-item {{ Request::is('menu/pp*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Meta Data</span>
        </h6>
         <!-- Nav Item - Indikator Provinsi -->
        <li class="nav-item {{ Request::is('menu/subkegiatan*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/subkegiatan">
                <i class="fas fa-fw fa-book"></i>
                <span>Subkegitan Provinsi</span></a>
        </li>
    @endcan

    @can('kabkota')
         <li class="nav-item {{ Request::is('menu/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>FORMulir Realisasi Program</span>
        </h6>

        <!-- Nav Item - Sub Kegiatan -->
        <li class="nav-item  {{ Request::is('menu/pkabkota*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/pkabkota/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span >FORM 2B</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut/span>
        </h6>

        {{-- nav item - Rencana Tindak Lanjut --}}
        <li class="nav-item {{ Request::is('menu/rtl*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 5</span>
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <!-- Nav Item - pelaporan pembelajaran -->
        <li class="nav-item {{ Request::is('menu/pp*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Meta Data</span>
        </h6>
          <!-- Nav Item - Indikator Kabkota -->
        <li class="nav-item {{ Request::is('menu/kabkota*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/kabkota">
                <i class="fas fa-fw fa-book"></i>
                <span>Subkegiatan Kab/Kota</span></a>
        </li>
    @endcan

    @can('pusat')
        <li class="nav-item {{ Request::is('menu/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>FORMulir Evaluasi</span>
        </h6>
        <li class="nav-item {{ Request::is('menu/capaian*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/capaian/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 1</span>
                        </a>
                    @endif
            @endforeach
        </li>
        
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>FORM 2</span>
        </h6>

        <li class="nav-item {{ Request::is('menu/program*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/program">
                <i class="fas fa-fw fa-book"></i>
                <span>Program</span></a>
        </li>
       <!-- Nav Item - Kegiatan -->
        <li class="nav-item {{ Request::is('menu/kegiatan*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/kegiatan">
                <i class="fas fa-fw fa-book"></i>
                <span>Kegiatan</span></a>
        </li>

        <!-- Nav Item - Rincian Output -->
        <li class="nav-item {{ Request::is('menu/pusat*') ? 'active' : '' }}">
              @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/pusat/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 2A</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut</span>
        </h6>

        {{-- nav item - Rencana Tindak Lanjut --}}
        <li class="nav-item {{ Request::is('menu/rtl*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 5</span>
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <!-- Nav Item - pelaporan pembelajaran -->
        <li class="nav-item {{ Request::is('menu/pp*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>

    @endcan

    @can('mitraswasta')
        <li class="nav-item {{ Request::is('menu/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Self Assessments</span>
        </h6>
         <li class="nav-item {{ Request::is('menu/program*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/program">
                <i class="fas fa-fw fa-book"></i>
                <span>Program</span></a>
        </li>
       <!-- Nav Item - Kegiatan -->
        <li class="nav-item {{ Request::is('menu/kegiatan*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/kegiatan">
                <i class="fas fa-fw fa-book"></i>
                <span>Kegiatan</span></a>
        </li>
        
        <li class="nav-item {{ Request::is('menu/mitraswasta*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/mitraswasta/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 3</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <hr class="mt-2 sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut</span>
        </h6>

        <li class="nav-item {{ Request::is('menu/rtl*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 5</span>
            </a>
        </li>

        <hr class="mt-2 sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <li class="nav-item {{ Request::is('menu/pp*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>
    @endcan

    @can('umkm')
        <li class="nav-item {{ Request::is('menu/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>FORM 4</span>
        </h6>

        <li class="nav-item {{ Request::is('menu/umkm*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/umkm">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 4</span>
            </a>
        </li>

        <hr class="mt-2 sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut</span>
        </h6>

        <li class="nav-item {{ Request::is('menu/rtl*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 5</span>
            </a>
        </li>

        <hr class="mt-2 sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <li class="nav-item {{ Request::is('menu/pp*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>
    @endcan
    @can('bappeda')
    
        <li class="nav-item {{ Request::is('menu/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Rekapitulasi</span>
        </h6>

        <li class="nav-item {{ Request::is('menu/capaian*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                @if (now()->year == $tahun->name)
                    <a class="nav-link" href="/menu/capaian/{{ $tahun->id }}">
                        <i class="fas fa-fw fa-book"></i>
                        <span>FORM 1</span>
                    </a>
                @endif
            @endforeach
        </li>
        <li class="nav-item  {{ Request::is('menu/pusat*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/pusat/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 2A</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <li class="nav-item  {{ Request::is('menu/pemda*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/pemda/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 2B Provinsi</span>
                        </a>
                    @endif
            @endforeach
        </li>
        <li class="nav-item  {{ Request::is('menu/pkabkota*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/pkabkota/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 2B Kab/kota</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <li class="nav-item {{ Request::is('menu/mitraswasta*') ? 'active' : '' }}">
            @foreach ($tahuns as $tahun)
                    @if (now()->year == $tahun->name)
                        <a class="nav-link" href="/menu/mitraswasta/{{ $tahun->id }}">
                            <i class="fas fa-fw fa-book"></i>
                            <span>FORM 3</span>
                        </a>
                    @endif
            @endforeach
        </li>

        <li class="nav-item {{ Request::is('menu/umkm*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/umkm">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 4</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('menu/rtl*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 5</span></a>
        </li>
        
        <!-- Nav Item - pelaporan pembelajaran -->
        <li class="nav-item {{ Request::is('menu/pp*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>

     <hr class="mt-2 sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Laporan Pencapaian TPB</span>
        </h6>
         <!-- Nav Item - Laporan Pencapaian TPB  -->
        <li class="nav-item {{ Request::is('menu/lp*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/lp">
                <i class="fas fa-fw fa-book"></i>
                <span>Laporan Pencapaian TPB </span>
            </a>
        </li>
    @endcan
    
    {{-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}

</ul>
