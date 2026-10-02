<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover align-middle mb-0">
        <thead class="table-primary text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td class="text-center"><?php echo e($user->id); ?></td>
                <td><?php echo e($user->nama); ?></td>
                <td class="text-center"><?php echo e($user->nim); ?></td>
                <td class="text-center"><?php echo e($user->nama_kelas); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="4" class="text-center text-muted py-3">Belum ada data pengguna yang terdaftar.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div><?php /**PATH C:\laragon\www\prak-web-lanjut-2417052014\resources\views/components/user-table.blade.php ENDPATH**/ ?>