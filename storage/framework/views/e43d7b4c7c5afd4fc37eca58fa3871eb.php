<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Tugas Praktikum 4</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(url('/user')); ?>">Daftar Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('user.create')); ?>">Tambah Pengguna</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\laragon\www\prak-web-lanjut-2417052014\resources\views/components/navbar.blade.php ENDPATH**/ ?>