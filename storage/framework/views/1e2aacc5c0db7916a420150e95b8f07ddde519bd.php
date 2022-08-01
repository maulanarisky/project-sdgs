
<?php $__env->startSection('container'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Sub Kegiatan Provinsi</h1>

        <!-- Input Data Example -->
        <div class="card shadow mb-4 border-left-success" >
            <div class="card-header py-3">
                <span>Uabh Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        
                        <form action="/menu/subkegiatan/<?php echo e($subkegiatan->id); ?>" method="post">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="row">
                            <input type="hidden" name="sub_kegiatan_id" id="sub_kegiatan_id" value="<?php echo e($subkegiatan->id); ?>"/>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="program">Program</label>
                                        <input name="program" id="program" readonly value="<?php echo e($subkegiatan->program); ?>" type="text" class="<?php $__errorArgs = ['program'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="program"/>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'program']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'program']); ?>
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
                                        <label for="kegiatan">Kegiatan</label>
                                        <input name="kegiatan" id="kegiatan" readonly value="<?php echo e($subkegiatan->kegiatan); ?>" type="text" class="<?php $__errorArgs = ['kegiatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="nama_subkegiatan"/>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'kegiatan']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'kegiatan']); ?>
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
                                        <label for="name_sub_kegiatan">Nama Sub Kegiatan</label>
                                        <input name="name_sub_kegiatan" id="name_sub_kegiatan" readonly value="<?php echo e($subkegiatan->name_sub_kegiatan); ?>" type="text" class="<?php $__errorArgs = ['name_sub_kegiatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="name_sub_kegiatan"/>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'name_sub_kegiatan']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'name_sub_kegiatan']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>
                                <input name="kode_sub_kegiatan" id="kode_sub_kegiatan" value="<?php echo e($subkegiatan->kode_sub_kegiatan); ?>" type="hidden" class="<?php $__errorArgs = ['kode_sub_kegiatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="kode_sub_subkegiatan"/>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="indikator">Indikator Sub Kegiatan</label>
                                        <input name="indikator_sub" id="indikator" readonly value="<?php echo e($subkegiatan->indikator_sub); ?>" type="text" class="<?php $__errorArgs = ['indikator'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="indikator"/>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'indikator']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'indikator']); ?>
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
                                        <label for="indikator_id">Indikator TPB</label>
                                        <select class="<?php $__errorArgs = ['indikator_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="indikator_id" id="indikator_id" required>
                                             <option value=""> pilih Indikator TPB</option> 
                                            <?php $__currentLoopData = $indikators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indikator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($indikator->user_id == Auth::user()->id): ?>
                                                <?php if(old('indikator_id', $subkegiatan->indikator_id == $indikator->id)): ?>
                                                    <option value="<?php echo e($indikator->id); ?>" selected><?php echo e($indikator->kode_indikator); ?>. <?php echo e($indikator->deskripsi); ?></option> 
                                                <?php else: ?>
                                                    <option value="<?php echo e($indikator->id); ?>"><?php echo e($indikator->kode_indikator); ?>.<?php echo e($indikator->deskripsi); ?></option>   
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.validation-message','data' => ['name' => 'indikator_id']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'indikator_id']); ?>
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
                                        <input name="satuan" id="satuan" value="<?php echo e($subkegiatan->satuan); ?>" readonly type="text" class="<?php $__errorArgs = ['satuan'];
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
                                        <label for="user_id">Sumber Data</label>
                                        <input name="user_id" id="user_id" readonly value="<?php echo e(Auth::user()->id); ?>" type="hidden" class="<?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="user_id"/>
                                        <input name="" id="user_id" readonly value="<?php echo e(Auth::user()->name); ?>" type="text" class="<?php $__errorArgs = ['user_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" aria-describedby="user_id"/>
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
<?php echo $__env->make('Menu.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/SubKegiatan/edit.blade.php ENDPATH**/ ?>