<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title','sistem informasi mahasiswa'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php echo $__env->yieldContent('navmhs'); ?>" aria-current="page" href="mahasiswa.blade.php">mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $__env->yieldContent('navdos'); ?>"  href="dosen.blade.php">dosen</a>
              <li class="nav-item">
                <a class="nav-link <?php echo $__env->yieldContent('navjur'); ?>"  href="#">jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $__env->yieldContent('navgal'); ?>"  href="#">galeri</a>
              </li>
            </ul>
          </div>
        
        </div>
      </nav>
      <?php echo $__env->yieldContent('content'); ?>
      
      <footer class="bg-dark text-white py-0 fixed-bottom">
        <div class="container" style="float: left">
sistem informasi mahasiswa | copyright @ <?php echo e(date('Y')); ?> muhammad haykal
        </div>
</footer>
      <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-is57\resources\views/layout/master.blade.php ENDPATH**/ ?>