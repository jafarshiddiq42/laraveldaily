
<?php $__env->startSection('title','tambah data jurusan'); ?>
<?php $__env->startSection('navdos','active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form tambah data dosen
        </div>
        <div class="card-body">
            <form method="POST" action="/dosen/store">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nidn</label>
                  <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">dosen</label>
                  <input type="text" name="dosen" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">tanggal bergabung</label>
                  <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">golongan</label>
                  <input type="text" name="gol" class="form-control" id="exampleInputPassword1">
                </div>
                
                
                <button type="submit" class="btn btn-primary">tambah data</button>
                <a href="/dosen" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-is57\resources\views/page/dosen/form.blade.php ENDPATH**/ ?>