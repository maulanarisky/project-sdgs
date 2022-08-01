<?php if(session()->has('success')): ?>
    <div class="alert alert-success col-lg-12" role="alert">
        <?php echo session('success'); ?>

    </div> 
<?php elseif(session()->has('warning')): ?>
    <div class="alert alert-warning col-lg-12" role="alert">
        <?php echo session('warning'); ?>

    </div> 
<?php endif; ?>
<?php /**PATH D:\laravel\project-sdgs\resources\views/components/auth-session-status.blade.php ENDPATH**/ ?>