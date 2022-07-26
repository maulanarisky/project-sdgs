<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3"><img src="/img/logo.svg" alt=""></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('superadmin')): ?>

        <li class="nav-item <?php echo e(Request::is('menu/dashboard*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item <?php echo e(Request::is('menu/user*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/user">
                <i class="fas fa-fw fa-user-friends"></i>
                <span>Kelola Pengguna</span></a>
        </li>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Rekapitulasi</span>
        </h6>

        <li class="nav-item <?php echo e(Request::is('menu/capaian*') ? 'active' : ''); ?>">
            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(now()->year == $tahun->name): ?>
                    <a class="nav-link" href="/menu/capaian/<?php echo e($tahun->id); ?>">
                        <i class="fas fa-fw fa-book"></i>
                        <span>FORM 1</span>
                    </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>

          <li class="nav-item  <?php echo e(Request::is('menu/pusat*') ? 'active' : ''); ?>">
            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(now()->year == $tahun->name): ?>
                        <a class="nav-link" href="/menu/pusat/<?php echo e($tahun->id); ?>">
                            <i class="fas fa-fw fa-th-large"></i>
                            <span>Form 2A</span>
                        </a>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>

        <li class="nav-item  <?php echo e(Request::is('menu/pemda*') ? 'active' : ''); ?>">
            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(now()->year == $tahun->name): ?>
                        <a class="nav-link" href="/menu/pemda/<?php echo e($tahun->id); ?>">
                            <i class="fas fa-fw fa-th-large"></i>
                            <span>Form 2B Provinsi</span>
                        </a>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>
        <li class="nav-item  <?php echo e(Request::is('menu/pkabkota*') ? 'active' : ''); ?>">
            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(now()->year == $tahun->name): ?>
                        <a class="nav-link" href="/menu/pkabkota/<?php echo e($tahun->id); ?>">
                            <i class="fas fa-fw fa-th-large"></i>
                            <span>Form 2B Kab/kota</span>
                        </a>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>

        <li class="nav-item <?php echo e(Request::is('menu/mitraswasta*') ? 'active' : ''); ?>">
            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(now()->year == $tahun->name): ?>
                        <a class="nav-link" href="/menu/mitraswasta/<?php echo e($tahun->id); ?>">
                            <i class="fas fa-fw fa-th-large"></i>
                            <span>FORM 3</span>
                        </a>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>

        <li class="nav-item <?php echo e(Request::is('menu/umkm*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/umkm">
                <i class="fas fa-fw fa-th-large"></i>
                <span>FORM 4</span>
            </a>
        </li>
        
        <li class="nav-item <?php echo e(Request::is('menu/rtl*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-archway"></i>
                <span>FORM 5</span></a>
        </li>
        
        <!-- Nav Item - pelaporan pembelajaran -->
        <li class="nav-item <?php echo e(Request::is('menu/pp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>

        <!-- Nav Item - Laporan Pencapaian TPB  -->
        <li class="nav-item <?php echo e(Request::is('menu/lp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/lp">
                <i class="fas fa-fw fa-book"></i>
                <span>Laporan Pencapaian TPB </span>
            </a>
        </li>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Meta Data</span>
        </h6>

        <li class="nav-item <?php echo e(Request::is('menu/pilar*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/pilar">
                <i class="fas fa-fw fa-archway"></i>
                <span>Pilar</span></a>
        </li>

        <!-- Nav Item - Tujuan -->
        <li class="nav-item <?php echo e(Request::is('menu/tujuan*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/tujuan">
                <i class="fas fa-fw fa-map"></i>
                <span>Tujuan</span></a>
        </li>

        <!-- Nav Item - Target -->
        <li class="nav-item <?php echo e(Request::is('menu/target*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/target">
                <i class="fas fa-fw fa-paper-plane"></i>
                <span>Target</span></a>
        </li>

        <!-- Nav Item - Indikator -->
        <li class="nav-item <?php echo e(Request::is('menu/indikator*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/indikator">
                <i class="fas fa-fw fa-th-large"></i>
                <span>Indikator</span></a>
        </li>
        <!-- Nav Item - Indikator Provinsi -->
        <li class="nav-item <?php echo e(Request::is('menu/subkegiatan*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/subkegiatan">
                <i class="fas fa-fw fa-th-large"></i>
                <span>Subkegitan Provinsi</span></a>
        </li>
        <!-- Nav Item - Indikator Kabkota -->
        <li class="nav-item <?php echo e(Request::is('menu/kabkota*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/kabkota">
                <i class="fas fa-fw fa-th-large"></i>
                <span>Subkegiatan Kab/Kota</span></a>
        </li>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('skpd')): ?>
        <li class="nav-item <?php echo e(Request::is('menu/dashboard*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Formulir Evaluasi</span>
        </h6>
        <li class="nav-item <?php echo e(Request::is('menu/capaian*') ? 'active' : ''); ?>">
            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(now()->year == $tahun->name): ?>
                        <a class="nav-link" href="/menu/capaian/<?php echo e($tahun->id); ?>">
                            <i class="fas fa-fw fa-archway"></i>
                            <span>Form 1</span>
                        </a>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>
        
        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Formulir Realisasi Program</span>
        </h6>

        <!-- Nav Item - Program -->
        
       <!-- Nav Item - Kegiatan -->
        
        <!-- Nav Item - Sub Kegiatan -->
        <li class="nav-item  <?php echo e(Request::is('menu/pemda*') ? 'active' : ''); ?>">
            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(now()->year == $tahun->name): ?>
                        <a class="nav-link" href="/menu/pemda/<?php echo e($tahun->id); ?>">
                            <i class="fas fa-fw fa-th-large"></i>
                            <span>Form 2B</span>
                        </a>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut/span>
        </h6>

        
        <li class="nav-item <?php echo e(Request::is('menu/rtl*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-th-large"></i>
                <span>FORM 5</span>
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <!-- Nav Item - pelaporan pembelajaran -->
        <li class="nav-item <?php echo e(Request::is('menu/pp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>

         <!-- Nav Item - Laporan Pencapaian TPB  -->
        <li class="nav-item <?php echo e(Request::is('menu/lp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/lp">
                <i class="fas fa-fw fa-book"></i>
                <span>Laporan Pencapaian TPB </span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('kabkota')): ?>
         <li class="nav-item <?php echo e(Request::is('menu/dashboard*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Formulir Realisasi Program</span>
        </h6>

        <!-- Nav Item - Sub Kegiatan -->
        <li class="nav-item  <?php echo e(Request::is('menu/pkabkota*') ? 'active' : ''); ?>">
            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(now()->year == $tahun->name): ?>
                        <a class="nav-link" href="/menu/pkabkota/<?php echo e($tahun->id); ?>">
                            <i class="fas fa-fw fa-th-large"></i>
                            <span>Form 2B</span>
                        </a>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut/span>
        </h6>

        
        <li class="nav-item <?php echo e(Request::is('menu/rtl*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-th-large"></i>
                <span>FORM 5</span>
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <!-- Nav Item - pelaporan pembelajaran -->
        <li class="nav-item <?php echo e(Request::is('menu/pp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>

         <!-- Nav Item - Laporan Pencapaian TPB  -->
        <li class="nav-item <?php echo e(Request::is('menu/lp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/lp">
                <i class="fas fa-fw fa-book"></i>
                <span>Laporan Pencapaian TPB </span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pusat')): ?>
        <li class="nav-item <?php echo e(Request::is('menu/dashboard*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Form 2</span>
        </h6>

        <li class="nav-item <?php echo e(Request::is('menu/program*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/program">
                <i class="fas fa-fw fa-th-large"></i>
                <span>Program</span></a>
        </li>
       <!-- Nav Item - Kegiatan -->
        <li class="nav-item <?php echo e(Request::is('menu/kegiatan*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/kegiatan">
                <i class="fas fa-fw fa-th-large"></i>
                <span>Kegiatan</span></a>
        </li>

        <!-- Nav Item - Rincian Output -->
        <li class="nav-item <?php echo e(Request::is('menu/pusat*') ? 'active' : ''); ?>">
              <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(now()->year == $tahun->name): ?>
                        <a class="nav-link" href="/menu/pusat/<?php echo e($tahun->id); ?>">
                            <i class="fas fa-fw fa-th-large"></i>
                            <span>Form 2A</span>
                        </a>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut/span>
        </h6>

        
        <li class="nav-item <?php echo e(Request::is('menu/rtl*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-th-large"></i>
                <span>FORM 5</span>
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <!-- Nav Item - pelaporan pembelajaran -->
        <li class="nav-item <?php echo e(Request::is('menu/pp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>

         <!-- Nav Item - Laporan Pencapaian TPB  -->
        <li class="nav-item <?php echo e(Request::is('menu/lp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/lp">
                <i class="fas fa-fw fa-book"></i>
                <span>Laporan Pencapaian TPB </span>
            </a>
        </li>

    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mitraswasta')): ?>
        <li class="nav-item <?php echo e(Request::is('menu/dashboard*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Self Assessments</span>
        </h6>
         <li class="nav-item <?php echo e(Request::is('menu/program*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/program">
                <i class="fas fa-fw fa-th-large"></i>
                <span>Program</span></a>
        </li>
       <!-- Nav Item - Kegiatan -->
        <li class="nav-item <?php echo e(Request::is('menu/kegiatan*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/kegiatan">
                <i class="fas fa-fw fa-th-large"></i>
                <span>Kegiatan</span></a>
        </li>
        
        <li class="nav-item <?php echo e(Request::is('menu/mitraswasta*') ? 'active' : ''); ?>">
            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(now()->year == $tahun->name): ?>
                        <a class="nav-link" href="/menu/mitraswasta/<?php echo e($tahun->id); ?>">
                            <i class="fas fa-fw fa-th-large"></i>
                            <span>FORM 3</span>
                        </a>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </li>

        <hr class="mt-2 sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut</span>
        </h6>

        <li class="nav-item <?php echo e(Request::is('menu/rtl*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-th-large"></i>
                <span>FORM 5</span>
            </a>
        </li>

        <hr class="mt-2 sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <li class="nav-item <?php echo e(Request::is('menu/pp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>FORM 6</span>
            </a>
        </li>
         <!-- Nav Item - Laporan Pencapaian TPB  -->
        <li class="nav-item <?php echo e(Request::is('menu/lp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/lp">
                <i class="fas fa-fw fa-book"></i>
                <span>Laporan Pencapaian TPB </span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('umkm')): ?>
        <li class="nav-item <?php echo e(Request::is('menu/dashboard*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 text-muted">
            <span>Form 4</span>
        </h6>

        <li class="nav-item <?php echo e(Request::is('menu/umkm*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/umkm">
                <i class="fas fa-fw fa-th-large"></i>
                <span>FORM 4</span>
            </a>
        </li>

        <hr class="mt-2 sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Rencana Tindak Lanjut</span>
        </h6>

        <li class="nav-item <?php echo e(Request::is('menu/rtl*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/rtl">
                <i class="fas fa-fw fa-th-large"></i>
                <span>Form 5</span>
            </a>
        </li>

        <hr class="mt-2 sidebar-divider d-none d-md-block">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Pelaporan Pembelajaran</span>
        </h6>

        <li class="nav-item <?php echo e(Request::is('menu/pp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/pp">
                <i class="fas fa-fw fa-book"></i>
                <span>Form 6</span>
            </a>
        </li>
         <!-- Nav Item - Laporan Pencapaian TPB  -->
        <li class="nav-item <?php echo e(Request::is('menu/lp*') ? 'active' : ''); ?>">
            <a class="nav-link" href="/menu/lp">
                <i class="fas fa-fw fa-book"></i>
                <span>Laporan Pencapaian TPB </span>
            </a>
        </li>
    <?php endif; ?>
    
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/layouts/sidebar.blade.php ENDPATH**/ ?>