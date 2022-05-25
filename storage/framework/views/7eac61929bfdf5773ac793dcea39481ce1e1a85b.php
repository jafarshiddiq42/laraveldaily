
<?php $__env->startSection('title','edit data dosen'); ?>
<?php $__env->startSection('navjur','active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form edit data dosen
        </div>
        <div class="card-body">
            <form method="post" action="/dosen/<?php echo e($dosen->id); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nidn</label>
                  <input type="text" name="nidn" value="<?php echo e($dosen->nidn); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">dosen</label>
                  <input type="text" name="dosen" value="<?php echo e($dosen->nama_dosen); ?>" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">tanggal bergabung</label>
                  <input type="date" name="tanggal" value="<?php echo e($dosen->tgl_bergabung); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">golongan</label>
                  <input type="text" name="gol" value="<?php echo e($dosen->golongan); ?>" class="form-control" id="exampleInputPassword1">
                </div>
                
                
                <button type="submit" class="btn btn-primary">edit data</button>
                <a href="/dosen" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-is57\resources\views/page/dosen/edit.blade.php ENDPATH**/ ?>