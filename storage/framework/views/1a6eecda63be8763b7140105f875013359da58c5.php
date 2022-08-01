<table class="table table-bordered" id="example" width="100%" cellspacing="0">
    <thead>
      <tr class="text-center">
        <th rowspan="2" style="vertical-align: middle"> Tujuan SDGs </th>
        <th rowspan="2" style="vertical-align: middle"> Indikator SDGs </th>
        <th colspan="2"> Identifikasi Masalah </th>
        <th rowspan="2" style="vertical-align: middle"> Rencana Tindak Lanjut </th>
        <th rowspan="2" style="vertical-align: middle"> Institusi Pelaksana Pemerintah <br> / Non Pemerintah </th>
        <?php if(Auth::user()->role_id != 1): ?>
          <th rowspan="2" style="vertical-align: middle">Aksi</th>  
        <?php endif; ?>
      </tr>
      <tr class="text-center">
        <th>Kategori</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php $__currentLoopData = $rencana_tindak_lanjuts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rtl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($rtl->user->id == Auth::user()->id): ?>
          <tr>
            <td><?php echo e($rtl->indikator->target->tujuan->kode_tujuan); ?>.<?php echo e($rtl->indikator->target->tujuan->name); ?></td>
            <td><?php echo e($rtl->indikator->kode_indikator); ?>.<?php echo e($rtl->indikator->deskripsi); ?></td>
            <td><?php echo e($rtl->kategori); ?></td>
            <td><?php echo e($rtl->deskripsi); ?></td>
            <td><?php echo e($rtl->rtk); ?></td>
            <td><?php echo e($rtl->pelaksana); ?></td>

            <td align="center" style="width: 8rem">
              <a href="/menu/rtl/<?php echo e($rtl->id); ?>/edit" class="btn btn-warning p-2"><i class="fas fa-fw fa-pen-square"></i></a>
              
              <form action="/menu/rtl/<?php echo e($rtl->id); ?>" method="post" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger p-2" onclick="return confirm('Apakah Anda Yakin menghapus Kategori Masalah : <?php echo e($rtl->kategori); ?> ?')"> 
                  <i class="fas fa-fw fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>

        
        <?php elseif( Auth::user()->role_id == 1 ): ?>
          <tr>
            <td><?php echo e($rtl->indikator->target->tujuan->kode_tujuan); ?>.<?php echo e($rtl->indikator->target->tujuan->name); ?></td>
            <td><?php echo e($rtl->kategori); ?></td>
            <td><?php echo e($rtl->deskripsi); ?></td>
            <td><?php echo e($rtl->rtk); ?></td>
            <td><?php echo e($rtl->pelaksana); ?></td>
          </tr>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table><?php /**PATH D:\laravel\project-sdgs\resources\views/menu/RencanaTindakLanjut/table.blade.php ENDPATH**/ ?>