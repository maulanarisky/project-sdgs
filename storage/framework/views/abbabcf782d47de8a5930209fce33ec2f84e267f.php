<table class="table table-bordered" id="dataTable"  cellspacing="0">
    <thead>
        <tr align="center" valign="middle">
            <td >Kode Tujuan</td>
            <td >Target</td>
            <td >Indikator</td>
            <td>Sumber Data</td>
            <td >Satuan</td>
            <td >Baseline</td>
            <td >Tahun</td>
            <td>Target</td>
            <td>Capaian</td>
            <td>Status</td>
            <?php if(Auth::user()->role_id != 1): ?> 
            <td>Aksi</td>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $capaians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $capaian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($capaian->tahun_id == $tahunSinggle->id && $capaian->user->id == Auth::user()->id): ?>
                    <tr align="center" >
                          <td><?php echo e($capaian->indikator->target->tujuan->kode_tujuan); ?></td>
                        <td><?php echo e($capaian->indikator->target->kode_target); ?>.<?php echo e($capaian->indikator->target->deskripsi); ?></td>
                        <td><?php echo e($capaian->indikator->kode_indikator); ?>.<?php echo e($capaian->indikator->deskripsi); ?></td>
                        <td><?php echo e($capaian->user->name); ?></td>
                        <td><?php echo e($capaian->indikator->satuan); ?></td>
                        <td><?php echo e($capaian->baseline); ?></td>
                        <td><?php echo e($capaian->tahun->name); ?></td>
                        <td><?php echo e($capaian->target_awal); ?></td>
                        <td><?php echo e($capaian->capaian); ?></td>
                        
                        <?php if($capaian->status == 'tercapai'): ?>
                            <td valign="middle">Tercapai</td> 
                        <?php elseif($capaian->status == 'akan_tercapai'): ?>
                            <td valign="middle">Akan Tercapai</td>
                        <?php elseif($capaian->status == 'perlu_perhatian_kusus'): ?>
                            <td valign="middle">Perlu <br> Perhatian Khusus</td>
                        <?php else: ?>
                            <td valign="middle"></td>
                        <?php endif; ?>

                        <td align="center">
                            <a href="/menu/capaian/<?php echo e($capaian->id); ?>/edit" class="btn btn-warning mb-2"><i class="fas fa-fw fa-pen-square"></i></a>
                         
                        </td>
                    </tr>
                
                <?php elseif(Auth::user()->role_id == 1 && $capaian->tahun_id == $tahunSinggle->id): ?>
                    <tr align="center" >
                        <td><?php echo e($capaian->indikator->target->tujuan->kode_tujuan); ?></td>
                        <td><?php echo e($capaian->indikator->target->kode_target); ?>.<?php echo e($capaian->indikator->target->deskripsi); ?></td>
                        <td><?php echo e($capaian->indikator->kode_indikator); ?>.<?php echo e($capaian->indikator->deskripsi); ?></td>
                        <td><?php echo e($capaian->user->name); ?></td>
                        <td><?php echo e($capaian->indikator->satuan); ?></td>
                        <td><?php echo e($capaian->baseline); ?></td>
                        <td><?php echo e($capaian->tahun->name); ?></td>
                        <td><?php echo e($capaian->target_awal); ?></td>
                        <td><?php echo e($capaian->capaian); ?></td>
                        
                        <?php if($capaian->status == 'tercapai'): ?>
                            <td valign="middle">Tercapain</td> 
                        <?php elseif($capaian->status == 'akan_tercapai'): ?>
                            <td valign="middle">Akan Tercapai</td>
                        <?php elseif($capaian->status == 'perlu_perhatian_kusus'): ?>
                            <td valign="middle"><i class="fa fa-caret-down text-danger" aria-hidden="true"></i> </td>
                        <?php else: ?>
                            <td valign="middle">Perlu <br> Perhatian Khusus</td>
                        <?php endif; ?>
                    </tr>
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
    </tbody>
</table><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/Capaian/table.blade.php ENDPATH**/ ?>