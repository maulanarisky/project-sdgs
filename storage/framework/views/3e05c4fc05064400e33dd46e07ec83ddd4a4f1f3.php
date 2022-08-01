<table class="table table-bordered" id="example" width="100%" cellspacing="0">
    <thead>
      <tr class="text-center">
        <th rowspan="2" style="vertical-align: middle" > Tujuan </th>
        <th rowspan="2" style="vertical-align: middle" > Indikator </th>
        <th rowspan="2" style="vertical-align: middle" >  Program </th>
        <th rowspan="2" style="vertical-align: middle" >  Kegiatan </th>
        <th rowspan="2" style="vertical-align: middle" > Output Kegiatan</th>
        <th rowspan="2" style="vertical-align: middle"> Satuan </th>  
        <th rowspan="2" style="vertical-align: middle"> Target Tahun <?php echo e($tahunSinggle->name); ?></th>
        <th colspan="2">Realisasi Target Tahun <?php echo e($tahunSinggle->name); ?></th>
        <th rowspan="2" style="vertical-align: middle"> Alokasi Anggaran Tahun <?php echo e($tahunSinggle->name); ?> (RP Juta)</th>
        <th colspan="2">Realisasi Anggaran Tahun <?php echo e($tahunSinggle->name); ?> (RP Juta)</th>
        <th rowspan="2" style="vertical-align: middle"> Lokasi Aktual Pelaksanaan Kegiatan</th>
        <th rowspan="2" style="vertical-align: middle"> Sumber Pendanaan</th>
        <th rowspan="2" style="vertical-align: middle"> Lembaga Pelaksanaan</th>
        <?php if(Auth::user()->role_id != 1): ?>
            <th rowspan="2" style="vertical-align: middle">Aksi</th>         
        <?php endif; ?>
      </tr>
      <tr class="text-center">
        <th>Sem 1</th>
        <th>Sem 2</th>
        <th>Sem 1</th>
        <th>Sem 2</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php $__currentLoopData = $output_kegiatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $output_kegiatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($output_kegiatan->user->id == Auth::user()->id && $output_kegiatan->tahun_id ==  $tahunSinggle->id): ?>
          <tr align="center">
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->indikator->target->tujuan->kode_tujuan); ?>. <?php echo e($output_kegiatan->indikator->target->tujuan->name); ?></td>  
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->indikator->kode_indikator); ?>. <?php echo e($output_kegiatan->indikator->deskripsi); ?></td>  
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->kegiatan->program->name_program); ?>.<?php echo e($output_kegiatan->kegiatan->program->name_program); ?></td>  
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->kegiatan->name_kegiatan); ?></td>  
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->name_outputkegiatan); ?></td> 
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->satuan); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->target_tahun); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->realisasi_target_sem_1); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->realisasi_target_sem_2); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->alokasi_anggaran); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->realisasi_anggaran_sem_1); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->realisasi_anggaran_sem_2); ?></td>    
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->lokasi_pelaksanaan_kegiatan); ?></td> 
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->sumber_pendanaan); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->user->name); ?></td>

            <td style="vertical-align: middle">
              <a href="/menu/mitraswasta/<?php echo e($output_kegiatan->id); ?>/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a>
              <form action="/menu/mitraswasta/<?php echo e($output_kegiatan->id); ?>" method="post" class="d-inline">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
              <button class="btn btn-danger p-2 mt-2" onclick="return confirm('Apakah Anda Yakin menghapus output kegiatan : <?php echo e($output_kegiatan->name_outputkegiatan); ?> ?')">
              <i class="fas fa-fw fa-trash"></i>
              </button>
              </form>
            </td>                
          </tr>
        <?php elseif(Auth::user()->role_id == 1 && $output_kegiatan->tahun_id ==  $tahunSinggle->id): ?>
          <tr align="center">
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->indikator->target->tujuan->kode_tujuan); ?>. <?php echo e($output_kegiatan->indikator->target->tujuan->name); ?></td>  
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->indikator->kode_indikator); ?>. <?php echo e($output_kegiatan->indikator->deskripsi); ?></td>  
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->kegiatan->program->name_program); ?>.<?php echo e($output_kegiatan->kegiatan->program->name_program); ?></td>  
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->kegiatan->name_kegiatan); ?></td>  
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->name_outputkegiatan); ?></td> 
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->satuan); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->target_tahun); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->realisasi_target_sem_1); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->realisasi_target_sem_2); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->alokasi_anggaran); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->realisasi_anggaran_sem_1); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->realisasi_anggaran_sem_2); ?></td>    
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->lokasi_pelaksanaan_kegiatan); ?></td> 
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->sumber_pendanaan); ?></td>
            <td style="vertical-align: middle"><?php echo e($output_kegiatan->user->name); ?></td>
          </tr>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table><?php /**PATH D:\laravel\project-sdgs\resources\views/menu/ProgramMitraSwasta/table.blade.php ENDPATH**/ ?>