
<?php $__env->startSection('title','data dosen'); ?>
<?php $__env->startSection('navdos','active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container  mt-3 p-4" >
    <a href="/dosen/form" style="float: right" class="btn btn-primary btn-sm ">tambah data</a>
<br>
<br>
    <div class="card">
        <div class="card-header">
            data dosen
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nidn</th>
                    <th scope="col">dosen</th>
                    <th scope="col">tanggal bergabung</th>
                    <th scope="col">golongan</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($nomor++); ?></th>
                        <td><?php echo e($item->nidn); ?></td>
                        <td><?php echo e($item->nama_dosen); ?></td>
                        <td><?php echo e($item->tgl_bergabung); ?></td>
                        <td><?php echo e($item->golongan); ?></td>
                        <td>
                            <a href="/dosen/edit/<?php echo e($item->id); ?>" class="btn btn-success btn-sm">edit</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#a<?php echo e($item->id); ?>">
                                hapus
                              </button>
                              <!-- Modal -->
<div class="modal fade" id="a<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">peringatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          apakah data dengan nidn <?php echo e($item->nidn); ?> ingin dihapus ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
          <form method="POST" action="/dosen/<?php echo e($item->id); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
          <button type="submit" class="btn btn-primary">ok</button>
        </form>
        </div>
      </div>
    </div>
  </div>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4">tidak ada data</td>
                        </tr>
                    <?php endif; ?>
                  
                </tbody>
              </table>
        </div>
      </div>
</div>

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-is57\resources\views/page/dosen/index.blade.php ENDPATH**/ ?>