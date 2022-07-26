 <table class="table table-bordered" id="example" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th rowspan="2" style="vertical-align: middle" > Indikator</th>  
              <th rowspan="2" style="vertical-align: middle" >  Program </th>  
              <th rowspan="2" style="vertical-align: middle" > Kegiatan </th>  
              <th rowspan="2" style="vertical-align: middle" > Sub Kegiatan</th>  
              <th rowspan="2" style="vertical-align: middle"> Tahun </th>                        
              <th rowspan="2" style="vertical-align: middle"> Satuan </th>                        
              <th rowspan="2" style="vertical-align: middle"> Target Tahun <?php echo e($tahunSinggle->name); ?> </th>
              <th colspan="2">Realisasi Target Tahun <?php echo e($tahunSinggle->name); ?></th>
              <th rowspan="2" style="vertical-align: middle"> Alokasi Anggaran Tahun <?php echo e($tahunSinggle->name); ?></th>
              <th colspan="2"> Realisasi Anggaran Tahun <?php echo e($tahunSinggle->name); ?></th>
              <th rowspan="2" style="vertical-align: middle"> Lokasi Aktual Pelaksanaan Kegiatan</th>
              <th rowspan="2" style="vertical-align: middle"> Sumber Pendanaan</th>
              <th rowspan="2" style="vertical-align: middle"> Instansi Pelaksanaan </th>
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
            <?php $__currentLoopData = $program_kab_kotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pkk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($pkk->user->id == Auth::user()->id  && $pkk->tahun_id ==  $tahunSinggle->id): ?>
                <tr>                       
                  <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->indikator->kode_indikator); ?>.<?php echo e($pkk->Kabkota->indikator->deskripsi); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->program_kabkota); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->kegiatan_kabkota); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->name_subkegiatan_kabkota); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->tahun->name); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->satuan); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->target_tahun); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->realisasi_target_sem_1); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->realisasi_target_sem_2); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->alokasi_anggaran); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->realisasi_anggaran_sem_1); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->realisasi_anggaran_sem_2); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->lokasi_pelaksanaan_kegiatan); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->sumber_pendanaan); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pkk->user->name); ?></td>
                  <td align="center" style="width: 8rem">
                    <a href="/menu/pkabkota/<?php echo e($pkk->id); ?>/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a> 
                  </td>
                </tr>
              <?php elseif(Auth::user()->role_id == 1 && $pkk->tahun_id ==  $tahunSinggle->id): ?>
              <tr>                       
                <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->indikator->kode_indikator); ?>.<?php echo e($pkk->Kabkota->indikator->deskripsi); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->program_kabkota); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->kegiatan_kabkota); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->name_subkegiatan_kabkota); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->tahun->name); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->Kabkota->satuan); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->target_tahun); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->realisasi_target_sem_1); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->realisasi_target_sem_2); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->alokasi_anggaran); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->realisasi_anggaran_sem_1); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->realisasi_anggaran_sem_2); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->lokasi_pelaksanaan_kegiatan); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->sumber_pendanaan); ?></td>
                <td style="vertical-align: middle"><?php echo e($pkk->user->name); ?></td>
              </tr>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/ProgramKabKota/table.blade.php ENDPATH**/ ?>