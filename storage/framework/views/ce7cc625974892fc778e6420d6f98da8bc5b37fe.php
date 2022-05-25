<?php $__env->startSection('title','Upload Data'); ?>
<?php $__env->startSection('navber','active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form tambah data jurusan
        </div>
        <div class="card-body">
            <form method="POST" action="/proses-upload" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nama</label>
                    <input type="nama" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">berkas</label>
                  <input type="file" name="berkas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <?php $__errorArgs = ['berkas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" class="btn btn-primary">upload</button>
                <a href="/mahasiswa" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-is57/resources/views/upload/form.blade.php ENDPATH**/ ?>