
<?php $__env->startSection('container'); ?>

  <div class="container-fluid">
    
    <h1 class="h3 mb-3 text-gray-800 text-center">Realisasi Program, Kegiatan dan Anggaran Program Pemerintah Daerah</h1>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <select class="float-right btn btn-success dropdown-toggle" name="tahun_id" onchange="location = this.value;">
          <option value="">-- Pilih Tahun --</option>
          <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="/menu/pemda/<?php echo e($tahun->id); ?>"><?php echo e($tahun->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>  

        <a class="mr-3 float-right btn btn-warning"><?php echo e($tahunSinggle->name); ?></a>

        <?php if(Auth::user()->role_id == 1): ?> 
          <a href="/form2b-export/<?php echo e($tahunSinggle->id); ?>" class="btn btn-success">Excel</a>
          
        
        <?php endif; ?>
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
       <?php echo $__env->make('Menu.ProgramPemerintahDaerah.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Menu.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/ProgramPemerintahDaerah/index.blade.php ENDPATH**/ ?>