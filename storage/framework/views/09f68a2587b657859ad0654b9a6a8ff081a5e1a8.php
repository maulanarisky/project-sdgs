       <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                      <tr class="text-center">
                        <th rowspan="2" style="vertical-align: middle" >Tujuan </th>
                        <th rowspan="2" style="vertical-align: middle" > Indikator </th>
                        <th rowspan="2" style="vertical-align: middle" > Program </th>
                        <th rowspan="2" style="vertical-align: middle" > Kegiatan</th>
                        <th rowspan="2" style="vertical-align: middle" >Rincian Output</th>
                        <th rowspan="2" style="vertical-align: middle"> Tahun </th>
                        <th rowspan="2" style="vertical-align: middle">Satuan</th>                        
                        <th rowspan="2" style="vertical-align: middle">Target Tahun (n)</th>
                        <th colspan="2">Realisasi Target Tahun (n)</th>
                        <th rowspan="2" style="vertical-align: middle">Alokasi Anggaran Tahun (n) </th>
                        <th colspan="2">Realisasi Anggaran Tahun (n)</th>
                        <th rowspan="2" style="vertical-align: middle"> Lokasi Aktual Pelaksanaan Kegiatan</th>
                        <th rowspan="2" style="vertical-align: middle"> Instansi Pelaksanaan</th>
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
                       <?php $__currentLoopData = $program_pemerintah_pusats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pusat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php if($pusat->user->id == Auth::user()->id && $pusat->tahun_id ==  $tahunSinggle->id ): ?> 
                         
                        <tr>                       
                          <td style="vertical-align: middle"><?php echo e($pusat->tujuan->name); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->indikator->kode_indikator); ?><?php echo e($pusat->indikator->deskripsi); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->program->kode_program); ?>.<?php echo e($pusat->program->name_program); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->kegiatan->id); ?>.<?php echo e($pusat->kegiatan->name_kegiatan); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->kode_rincianoutput); ?>.<?php echo e($pusat->name_rincianoutput); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->tahun->name); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->satuan); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->target_tahun); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->realisasi_target_sem_1); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->realisasi_target_sem_2); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->alokasi_anggaran); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->realisasi_anggaran_sem_1); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->realisasi_anggaran_sem_2); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->lokasi_pelaksanaan_kegiatan); ?></td>
                          <td style="vertical-align: middle"><?php echo e($pusat->user->name); ?></td>
                          <td align="center" style="width: 8rem">
                            <a href="/menu/pusat/<?php echo e($pusat->id); ?>/edit" class="btn btn-warning p-2" ><i class="fas fa-fw fa-pen-square"></i></a>
                           <form action="/menu/pusat/<?php echo e($pusat->id); ?>" method="post" class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger p-2 mt-2" onclick="return confirm('Apakah Anda Yakin menghapus  : <?php echo e($pusat->name_rincianoutput); ?> ?')">
                            <i class="fas fa-fw fa-trash"></i>
                            </button>
                            </form>
                          </td>
                        </tr>
                           <?php elseif(Auth::user()->role_id == 1 && $pusat->tahun_id ==  $tahunSinggle->id): ?>
                             <tr>                       
                               <td style="vertical-align: middle"><?php echo e($pusat->tujuan->name); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->indikator->kode_indikator); ?>. <?php echo e($pusat->indikator->deskripsi); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->program->kode_program); ?>.<?php echo e($pusat->program->name_program); ?></td>
                               
                               <td style="vertical-align: middle"><?php echo e($pusat->kegiatan->id); ?>.<?php echo e($pusat->kegiatan->name_kegiatan); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->kode_rincianoutput); ?>. <?php echo e($pusat->name_rincianoutput); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->tahun->name); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->satuan); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->target_tahun); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->realisasi_target_sem_1); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->realisasi_target_sem_2); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->alokasi_anggaran); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->realisasi_anggaran_sem_1); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->realisasi_anggaran_sem_2); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->lokasi_pelaksanaan_kegiatan); ?></td>
                               <td style="vertical-align: middle"><?php echo e($pusat->user->name); ?></td>
                        </tr>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table><?php /**PATH D:\laravel\project-sdgs\resources\views/menu/programpemerintahpusat/table.blade.php ENDPATH**/ ?>