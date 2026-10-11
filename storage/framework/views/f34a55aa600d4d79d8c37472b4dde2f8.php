    <?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Mata Kuliah</h1>
        <a href="<?php echo e(route('matakuliah.index')); ?>" class="btn btn-secondary mb-3">Kembali</a>
        
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('matakuliah.update', $mk->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label for="nama_mk" class="form-label">Nama Mata Kuliah:</label>
                <input type="text" class="form-control" id="nama_mk" name="nama_mk" value="<?php echo e(old('nama_mk', $mk->nama_mk)); ?>" required>
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label">SKS:</label>
                <input type="number" class="form-control" id="sks" name="sks" value="<?php echo e(old('sks', $mk->sks)); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\prak-web-lanjut-2417052014\resources\views/edit_mk.blade.php ENDPATH**/ ?>