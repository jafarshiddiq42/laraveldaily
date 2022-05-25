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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php echo $__env->yieldContent('navmhs'); ?>" aria-current="page" href="/mahasiswa">mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $__env->yieldContent('navdos'); ?>"  href="/dosen">dosen</a>
              <li class="nav-item">
                <a class="nav-link <?php echo $__env->yieldContent('navjur'); ?>"  href="/jurusan ">jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $__env->yieldContent('navgal'); ?>"  href="#">galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $__env->yieldContent('navber'); ?>"  href="/uploadberkas">berkas</a>
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
</html><?php /**PATH /opt/lampp/htdocs/laravel-is57/resources/views/layout/master.blade.php ENDPATH**/ ?>