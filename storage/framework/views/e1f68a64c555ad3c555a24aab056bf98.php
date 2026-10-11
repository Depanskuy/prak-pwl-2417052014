    <?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Daftar Mata Kuliah</h1>
        <a href="<?php echo e(route('matakuliah.create')); ?>" class="btn btn-success mb-3">Tambah Mata Kuliah Baru</a>
        
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <table border="1" class="table table-striped" cellpadding="10" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($mk->id); ?></td>
                        <td><?php echo e($mk->nama_mk); ?></td>
                        <td><?php echo e($mk->sks); ?></td>
                        <td>
                            <a href="<?php echo e(route('matakuliah.edit', $mk->id)); ?>" class="btn btn-sm btn-primary me-2">Edit</a>
                            <form action="<?php echo e(route('matakuliah.destroy', $mk->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" 
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\prak-web-lanjut-2417052014\resources\views/list_mk.blade.php ENDPATH**/ ?>