<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container text-center mt-2">
<div class="p-3 mb-2 bg-info text-dark d-inline-block"><?php echo e($nama); ?></div>

<br>




<?php $__empty_1 = true; $__currentLoopData = $nilai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block"><?php echo e($data); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="p-2 mb-2 bg-secondary text-dark d-inline-block">tidak ada data</div>
<?php endif; ?><br>

<?php if($rata >=0 and $rata <40): ?>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">E</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block"><?php echo e($rata); ?></div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">tidak lulus</div>
<?php elseif($rata >=40 and $rata <55): ?>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">D</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block"><?php echo e($rata); ?></div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">tidak lulus</div>
<?php elseif($rata >=55 and $rata <70): ?>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">c</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block"><?php echo e($rata); ?></div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">tidak lulus</div>
<?php elseif($rata >=70 and $rata <85): ?>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">B</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block"><?php echo e($rata); ?></div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">lulus</div>
<?php elseif($rata >=85 and $rata <=100): ?>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block">A</div>
<div class="p-2 mb-2 bg-danger text-dark d-inline-block"><?php echo e($rata); ?></div>
<br> <div class="p-2 mb-2 bg-danger text-dark d-inline-block">lulus</div> 
<?php endif; ?>
</div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-is57\resources\views/universitas/nilai.blade.php ENDPATH**/ ?>