
<?php $__env->startSection('container'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Indikator</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Uabh Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form action="/menu/indikator/<?php echo e($indikator->id); ?>" method="post">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tujuan_id">Pilih Tujuan</label>
                                        
                                        <input type="hidden" name="tujuan_id" id="tujuan_id" value="<?php echo e($indikator->tujuan_id); ?>"/>
                                        <input name="tujuan_id" id="tujuan_id" value="<?php echo e($indikator->tujuan->kode_tujuan); ?> <?php echo e($indikator->tujuan->name); ?>" readonly type="text" class="<?php $__errorArgs = ['tujuan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control"/>

                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'tujuan_id']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'tujuan_id']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="target_id">Pilih Target</label>
                                        
                                          <input type="hidden" name="target_id" id="target_id" value="<?php echo e($indikator->target_id); ?>"/>
                                        <input name="target_id" id="target_id" value="<?php echo e($indikator->target->kode_target); ?> <?php echo e($indikator->target->deskripsi); ?>" readonly type="text" class="<?php $__errorArgs = ['target_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control"/>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'target_id']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'target_id']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>

                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode_indikator">Kode Indikator</label>
                                        <input type="hidden" name="indikator_id" id="indikator_id" value="<?php echo e($indikator->id); ?>"/>
                                        <input name="kode_indikator" id="kode_indikator" value="<?php echo e($indikator->kode_indikator); ?>" readonly type="text" class="<?php $__errorArgs = ['kode_indikator'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="kode_indikator"/>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'kode_indikator']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'kode_indikator']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deskripsi">Nama Indikator</label>
                                        <input name="deskripsi" id="deskripsi" value="<?php echo e($indikator->deskripsi); ?>" readonly type="text" class="<?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="nama_indikator"/>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'deskripsi']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'deskripsi']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <input name="satuan" id="satuan" value="<?php echo e($indikator->satuan); ?>" type="text" class="<?php $__errorArgs = ['satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="satuan"/>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'satuan']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'satuan']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_id">Pilih Sumber Data</label>
                                        <select class="<?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="user_id" id="user_id" required>
                                           <option value=""> Pilih Sumber Data</option> 
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($user->role_id == 2 ): ?>
                                                    <?php if(old('user_id', $indikator->user_id == $user->id)): ?>
                                                        <option value="<?php echo e($user->id); ?>" selected> <?php echo e($user->name); ?></option> 
                                                    <?php else: ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>   
                                                    <?php endif; ?>                                           
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'user_id']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'user_id']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <button type="submit" class="btn btn-success px-5">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#tujuan').on('change', function() {
            var tujuanID = $(this).val();
            if(tujuanID) {
                $.ajax({
                    url: '/getTarget/'+tujuanID,
                    type: "GET",
                    data : {"_token":"<?php echo e(csrf_token()); ?>"},
                    dataType: "json",
                    success:function(data){
                            if(data){
                                $('#target').empty();   
                                $('#target').append('<option hidden>Pilih target</option>'); 
                                $.each(data, function(key, target){
                                    $('select[name="target_id"]').append('<option value="'+ target.id +'">' + target.kode_target +' '+ target.deskripsi+ '</option>');
                                });
                            }else{
                                $('#target').empty();
                            }
                        }
                    });
            }else{
                $('#target').empty();
            }
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Menu.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/Indikator/edit.blade.php ENDPATH**/ ?>