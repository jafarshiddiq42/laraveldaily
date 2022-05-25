
<?php $__env->startSection('title','tambah data mahasiswa'); ?>
<?php $__env->startSection('navmhs','active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form tambah data mahasiswa
        </div>
        <div class="card-body">
            <form method="POST" action="/mahasiswa/store">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nim</label>
                  <input type="text" name="nim" value="<?php echo e(old('nim')); ?>" class="form-control  <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ">
                  <?php $__errorArgs = ['nim'];
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
                  <label for="exampleInputEmail1" class="form-label">nama lengkap</label>
                  <input type="text" name="nama" value="<?php echo e(old('nama')); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">tempat lahir</label>
                  <input type="text" name="tempat"  class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">tanggal lahir</label>
                  <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">jenis kelamin</label>
                  <input type="radio" name="jk" value="L">laki-laki
                  <input type="radio" name="jk" value="P">perempuan
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">jurusan</label>
                  <select name="jurusan" class="form-control">
                    <option value="">-pilih jurusan-</option>
                    <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->jurusan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">agama</label>
                  <select name="agama" class="form-control">
                    <option value="islam">=pilih agama-</option>
                    <option value="islam">islam</option>
                    <option value="kristen">kristen</option>
                    <option value="hindu">hindu</option>
                    <option value="buddha">buddha</option>
                    <option value="katolik">katolik</option>
                    <option value="konghucu">konghucu</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">foto</label>
                  <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                
                </div>
                <button type="submit" class="btn btn-primary">tambah data</button>
                <a href="/mahasiswa" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-is57\resources\views/page/mahasiswa/form.blade.php ENDPATH**/ ?>