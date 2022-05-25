
<?php $__env->startSection('title','edit data jurusan'); ?>
<?php $__env->startSection('navjur','active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form edit data jurusan
        </div>
        <div class="card-body">
            <form method="post" action="/jurusan/<?php echo e($jurusan->id); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">kode jurusan</label>
                  <input type="text" name="kd" value="<?php echo e($jurusan->kode_jur); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">jurusan</label>
                  <input type="text" name="jur" value="<?php echo e($jurusan->jurusan); ?>" class="form-control" id="exampleInputPassword1">
                </div>
                
                
                <button type="submit" class="btn btn-primary">edit data</button>
                <a href="/jurusan" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-is57\resources\views/page/jurusan/edit.blade.php ENDPATH**/ ?>