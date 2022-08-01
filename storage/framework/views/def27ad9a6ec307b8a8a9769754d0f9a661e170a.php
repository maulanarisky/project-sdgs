
<?php $__env->startSection('container'); ?>
  
  <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Identifikasi Masalah & Rencana Tindak Lanjut </h1>

    <div class="card shadow mb-4">

      
      <div class="card-header py-3">
        <div class="row">
          <div class="col-9">
            <?php if(Auth::user()->role_id == 1): ?> 
              <a href="/form5-export" class="btn btn-success">Excel</a>
              
            <?php else: ?>
              <a href="/menu/rtl/create" class="btn btn-success" >Tambah Data</a>
            <?php endif; ?>
          </div>
        </div>
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
          <?php echo $__env->make('menu.RencanaTindakLanjut.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      </div>
    </div>
  </div>
          

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Menu.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/RencanaTindakLanjut/index.blade.php ENDPATH**/ ?>