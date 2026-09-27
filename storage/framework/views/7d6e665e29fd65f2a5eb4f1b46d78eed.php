

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center mt-3">
    <div class="col-md-7">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-primary text-white text-center py-3">
                <h5 class="mb-0 fw-bold">Formulir Pendaftaran Pengguna</h5>
            </div>
            <div class="card-body p-4 bg-white">
                <form action="<?php echo e(route('user.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control bg-light" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label fw-semibold">Nomor Pokok Mahasiswa (NPM)</label>
                        <input type="text" class="form-control bg-light" id="npm" name="npm" placeholder="Masukkan NPM Anda" required>
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-semibold">Pilih Kelas</label>
                        <select class="form-select bg-light" name="kelas_id" id="kelas_id" required>
                            <option value="" selected disabled>-- Silakan Pilih Kelas --</option>
                            <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelasItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($kelasItem->id); ?>"><?php echo e($kelasItem->nama_kelas); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-primary w-100 fw-bold shadow-sm">Simpan Data</button>
                        <a href="<?php echo e(url('/user')); ?>" class="btn btn-outline-secondary w-100 fw-bold shadow-sm">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\prak-web-lanjut-2417052014\resources\views/create_user.blade.php ENDPATH**/ ?>