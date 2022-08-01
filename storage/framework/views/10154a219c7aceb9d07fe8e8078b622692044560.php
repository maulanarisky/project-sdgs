 <table class="table table-bordered" id="example" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th rowspan="2" style="vertical-align: middle" > Tujuan </th>  
              <th rowspan="2" style="vertical-align: middle" > Indikator </th>  
              <th rowspan="2" style="vertical-align: middle" >  Program</th>  
              <th rowspan="2" style="vertical-align: middle" >  Kegiatan </th>  
              <th rowspan="2" style="vertical-align: middle" > Sub Kegiatan</th>  
              <th rowspan="2" style="vertical-align: middle"> Satuan </th>                        
              <th rowspan="2" style="vertical-align: middle"> Tahun </th>                        
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
            <?php $__currentLoopData = $program_pemerintah_daerahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($pemda->user->id == Auth::user()->id  && $pemda->tahun_id ==  $tahunSinggle->id): ?>
                <tr>                       
                  <td style="vertical-align: middle"><?php echo e($pemda->subkegiatan->indikator->target->tujuan->kode_tujuan); ?>.<?php echo e($pemda->subkegiatan->indikator->target->tujuan->name); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->subkegiatan->indikator->kode_indikator); ?>.<?php echo e($pemda->subkegiatan->indikator->deskripsi); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->SubKegiatan->program); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->SubKegiatan->kegiatan); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->SubKegiatan->name_sub_kegiatan); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->tahun->name); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->SubKegiatan->satuan); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->target_tahun); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->realisasi_target_sem_1); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->realisasi_target_sem_2); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->alokasi_anggaran); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->realisasi_anggaran_sem_1); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->realisasi_anggaran_sem_2); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->lokasi_pelaksanaan_kegiatan); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->sumber_pendanaan); ?></td>
                  <td style="vertical-align: middle"><?php echo e($pemda->user->name); ?></td>

                  <td align="center" style="width: 8rem">
                    
                    <a href="/menu/pemda/<?php echo e($pemda->id); ?>/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a>
                    
                    
                  </td>
                </tr>
              <?php elseif(Auth::user()->role_id == 1 && $pemda->tahun_id ==  $tahunSinggle->id): ?>
              <tr>                       
                <td style="vertical-align: middle"><?php echo e($pemda->subkegiatan->indikator->target->tujuan->kode_tujuan); ?>.<?php echo e($pemda->subkegiatan->indikator->target->tujuan->name); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->subkegiatan->indikator->kode_indikator); ?>.<?php echo e($pemda->subkegiatan->indikator->deskripsi); ?></td>
              
                <td style="vertical-align: middle"><?php echo e($pemda->subkegiatan->program); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->subkegiatan->kegiatan); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->subkegiatan->name_sub_kegiatan); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->subkegiatan->satuan); ?></td>
                
                <td style="vertical-align: middle"><?php echo e($pemda->tahun->name); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->target_tahun); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->realisasi_target_sem_1); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->realisasi_target_sem_2); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->alokasi_anggaran); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->realisasi_anggaran_sem_1); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->realisasi_anggaran_sem_2); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->lokasi_pelaksanaan_kegiatan); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->sumber_pendanaan); ?></td>
                <td style="vertical-align: middle"><?php echo e($pemda->user->name); ?></td>
              </tr>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/ProgramPemerintahDaerah/table.blade.php ENDPATH**/ ?>