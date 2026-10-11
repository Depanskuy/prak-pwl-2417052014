<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Buat Mata Kuliah Baru</h1>

    <form action="<?php echo e(route('matakuliah.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label for="nama_mk">Nama Mata Kuliah:</label><br>
        <input type="text" id="nama_mk" name="nama_mk" required><br><br>

        <label for="sks">SKS:</label><br>
        <input type="number" id="sks" name="sks" required><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\prak-web-lanjut-2417052014\resources\views/create_mk.blade.php ENDPATH**/ ?>