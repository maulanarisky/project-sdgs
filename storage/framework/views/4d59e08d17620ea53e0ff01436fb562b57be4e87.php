
<?php $__env->startSection('container'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Subkegiatan Provinsi TPB/SDGs</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                
            </div>
            <div class="card-body">

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Kode Program</th>
                                <th>Kode Kegiatan</th>
                                <th>Kode & Nama Sub-Kegiatan</th>
                                <th>Nama Indikator Sub Kegiatan</th>
                                <th>Satuan</th>
                                <th>Nama Indikator TPB</th>
                                <th>Sumber Data</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $subkegiatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if($sub->user_id != null ): ?>
                                    <?php if($sub->user_id == Auth::user()->id ): ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($sub->program); ?></td>
                                        <td><?php echo e($sub->kegiatan); ?></td>
                                        <td><?php echo e($sub->kode_sub_kegiatan); ?>. <?php echo e($sub->name_sub_kegiatan); ?></td>
                                        <td><?php echo e($sub->indikator_sub); ?></td>
                                        <td><?php echo e($sub->satuan); ?></td>
                                        <?php if($sub->indikator_id == ""): ?>
                                            <td></td>
                                        <?php else: ?>
                                            <td><?php echo e($sub->indikator->kode_indikator); ?>.<?php echo e($sub->indikator->deskripsi); ?></td>
                                        <?php endif; ?>
                                        
                                        <?php if($sub->user_id == ""): ?>
                                            <td></td>
                                        <?php else: ?>
                                            <td><?php echo e($sub->user->name); ?></td>
                                        <?php endif; ?>

                                        <?php if($sub->user_id != null ): ?>
                                            <?php if($sub->user_id == Auth::user()->id): ?>
                                            <td align="center" style="width: 8rem;">
                                            <a href="/menu/subkegiatan/<?php echo e($sub->id); ?>/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a> </td>
                                            <?php else: ?>  
                                            <td align="center" style="width: 8rem;"> </td>
                                            <?php endif; ?>
                                        <?php elseif($sub->user_id == null && $sub->indikator_id == null): ?>
                                        <td align="center" style="width: 8rem;"> <a href="/menu/subkegiatan/<?php echo e($sub->id); ?>/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a> </td>
                                    </tr>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($sub->program); ?></td>
                                        <td><?php echo e($sub->kegiatan); ?></td>
                                        <td><?php echo e($sub->kode_sub_kegiatan); ?>. <?php echo e($sub->name_sub_kegiatan); ?></td>
                                        <td><?php echo e($sub->indikator_sub); ?></td>
                                        <td><?php echo e($sub->satuan); ?></td>
                                        <?php if($sub->indikator_id == ""): ?>
                                            <td></td>
                                        <?php else: ?>
                                            <td><?php echo e($sub->indikator->kode_indikator); ?>.<?php echo e($sub->indikator->deskripsi); ?></td>
                                        <?php endif; ?>
                                        
                                        <?php if($sub->user_id == ""): ?>
                                            <td></td>
                                        <?php else: ?>
                                            <td><?php echo e($sub->user->name); ?></td>
                                        <?php endif; ?>
                                         <?php if($sub->user_id != null ): ?>
                                            <?php if($sub->user_id == Auth::user()->id): ?>
                                            <td align="center" style="width: 8rem;">
                                            <a href="/menu/subkegiatan/<?php echo e($sub->id); ?>/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a> </td>
                                            <?php else: ?>  
                                            <td align="center" style="width: 8rem;"> </td>
                                            <?php endif; ?>
                                        <?php elseif($sub->user_id == null && $sub->indikator_id == null): ?>
                                        <td align="center" style="width: 8rem;"> <a href="/menu/subkegiatan/<?php echo e($sub->id); ?>/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a> </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endif; ?>
                                
                                </tr>
                              
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Menu.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/SubKegiatan/index.blade.php ENDPATH**/ ?>