<table class="table table-bordered" id="example" width="100%" cellspacing="0">
    <thead >
      <tr align="center" >
        <th colspan="2"> Kategori Kegiatan Usaha Berkelanjutan </th>
        <th colspan="2"> Indikator SDGs </th>
        <th colspan="5"> Proyek/Kegiatan/Produk/Jasa Berkelanjutan </th>
        <th colspan="3"> Evaluasi target</th>
      </tr>
      <tr class="text-center">
        <th style="vertical-align: middle"> Kode POJK </th>
        <th style="vertical-align: middle"> Uraian Kegiatan Usaha Berkelanjutan </th>
        <th style="vertical-align: middle"> Kode Indikator </th>
        <th style="vertical-align: middle"> Nama Indikator </th> 
        <th style="vertical-align: middle"> Kode Kegiatan </th>
        <th style="vertical-align: middle"> Nama Kegiatan</th>
        <th style="vertical-align: middle"> Indikator Capaian </th>                        
        <th style="vertical-align: middle"> Satuan </th>
        <th style="vertical-align: middle"> Waktu</th>
        <th style="vertical-align: middle"> Target </th>
        <th style="vertical-align: middle"> Capaian </th>
        <?php if(Auth::user()->role_id == 1): ?>
          <th style="vertical-align: middle"> Pelaku Usaha </th>
        <?php elseif(Auth::user()->role_id != 1): ?>    
          <th style="vertical-align: middle">Aksi</th>  
        <?php endif; ?>
      </tr> 
    </thead>
    <tbody id="myTable">
      <?php $__currentLoopData = $program_pelaku_usahas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $umkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($umkm->user_id == Auth::user()->id): ?>
          <tr align="center">                       
            <td><?php echo e($umkm->kode_pojk); ?></td>
            <td><?php echo e($umkm->kegiatan_pojk); ?></td>
            <td><?php echo e($umkm->indikator->kode_indikator); ?></td>
            <td><?php echo e($umkm->indikator->deskripsi); ?></td>
            <td><?php echo e($umkm->no_urut); ?></td>
            <td><?php echo e($umkm->kegiatan); ?></td>
            <td><?php echo e($umkm->indikator_capaian); ?></td>
            <td><?php echo e($umkm->satuan); ?></td>
            <td><?php echo e($umkm->waktu); ?> tahun</td>
            <td><?php echo e($umkm->target); ?></td>
            <td><?php echo e($umkm->capaian); ?></td>

            <td align="center" style="width: 8rem">
              <a href="/menu/umkm/<?php echo e($umkm->id); ?>/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a>
              
              <form action="/menu/umkm/<?php echo e($umkm->id); ?>" method="post" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger p-2 mt-2" onclick="return confirm('Apakah Anda Yakin menghapus kegiatan dengan kode POJK : <?php echo e($umkm->kode_pojk); ?> ?')">
                  <i class="fas fa-fw fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          
        <?php elseif(Auth::user()->role_id == 1 ): ?>
          <tr align="center">                       
            <td><?php echo e($umkm->kode_pojk); ?></td>
            <td><?php echo e($umkm->kegiatan_pojk); ?></td>
            <td><?php echo e($umkm->indikator->kode_indikator); ?></td>
            <td><?php echo e($umkm->indikator->deskripsi); ?></td>
            <td><?php echo e($umkm->no_urut); ?></td>
            <td><?php echo e($umkm->kegiatan); ?></td>
            <td><?php echo e($umkm->indikator_capaian); ?></td>
            <td><?php echo e($umkm->satuan); ?></td>
            <td><?php echo e($umkm->waktu); ?> tahun</td>
            <td><?php echo e($umkm->target); ?></td>
            <td><?php echo e($umkm->capaian); ?></td>
            <td><?php echo e($umkm->user->name); ?></td>
          </tr>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table><?php /**PATH D:\laravel\project-sdgs\resources\views/menu/ProgramPelakuUsaha/table.blade.php ENDPATH**/ ?>