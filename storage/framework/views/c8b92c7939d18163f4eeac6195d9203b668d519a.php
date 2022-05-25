
<?php $__env->startSection('title','data jurusan'); ?>
<?php $__env->startSection('navjur','active'); ?>
    

    
<?php $__env->startSection('content'); ?>
<div class="container text-center mt-3 p-4" >
    <h1>jurusan</h1>
    <div class="row">
        <div class="col-md-4 m-auto">
    <ul class="list-group">
      <?php $__empty_1 = true; $__currentLoopData = $jur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <li class="list-group-item"><?php echo e($item); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          
      <?php endif; ?>
    </ul>
        </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-is57\resources\views/universitas/jurusan.blade.php ENDPATH**/ ?>