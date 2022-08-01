
<?php $__env->startSection('container'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Indikator TPB/SDGs</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/menu/indikator/create" class="btn btn-success">Tambah Data</a>
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
                                <th>Kode Tujuan</th>
                                <th>Kode Target</th>
                                <th>Kode Indikator</th>
                                <th>Nama Indikator</th>
                                <th>Sumber Data</th>
                                <th>Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $indikators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indikator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($indikator->target->tujuan->kode_tujuan); ?></td>
                                    <td><?php echo e($indikator->target->kode_target); ?></td>
                                    <td><?php echo e($indikator->kode_indikator); ?></td>
                                    <td><?php echo e($indikator->deskripsi); ?></td>
                                    
                                    <?php if($indikator->user_id == 1): ?>
                                        <td></td>
                                    <?php else: ?>
                                        <td><?php echo e($indikator->user->name); ?></td>
                                    <?php endif; ?>

                                    <td><?php echo e($indikator->satuan); ?></td>

                                    <td align="center" style="width: 8rem;">
                                        <a href="/menu/indikator/<?php echo e($indikator->id); ?>/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a>
                                        <form action="/menu/indikator/<?php echo e($indikator->id); ?>" method="post" class="d-inline">
                                            <?php echo method_field('delete'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapus indikator : <?php echo e($indikator->name); ?> ?')">
                                                <i class="fas fa-fw fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Menu.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/Indikator/index.blade.php ENDPATH**/ ?>