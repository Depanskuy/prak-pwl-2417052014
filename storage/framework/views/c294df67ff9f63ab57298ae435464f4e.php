

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3 border-bottom">
                <h5 class="mb-0 text-primary fw-bold">Manajemen Data Pengguna</h5>
                <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary btn-sm px-3 shadow-sm">
                    + Tambah Baru
                </a>
            </div>
            <div class="card-body p-0">
                <!-- Memanggil komponen tabel dinamis dan mengirimkan variabel $users -->
                <?php echo $__env->make('components.user-table', ['users' => $users], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\prak-web-lanjut-2417052014\resources\views/list_user.blade.php ENDPATH**/ ?>