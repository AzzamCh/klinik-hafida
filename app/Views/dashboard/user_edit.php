<?= $this->extend('dashboard/layout'); ?>
<?= $this->section('content'); ?>

<div class="mb-4">
    <h2 class="fw-bold text-dark">Edit Data Admin</h2>
    <p class="text-muted">Ubah informasi akun admin di bawah ini.</p>
</div>

<?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="card border-0 shadow-sm" style="max-width: 600px;">
    <div class="card-body p-4">
        <form action="<?= base_url('dashboard/user/update/' . $user['id']) ?>" method="post">
            
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="<?= $user['nama_lengkap']; ?>" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Username</label>
                <input type="text" name="username" class="form-control" value="<?= $user['username']; ?>" required>
            </div>
            
            <div class="mb-4">
                <label class="form-label fw-bold">Password Baru <span class="text-muted fw-normal">(Opsional)</span></label>
                <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah password" minlength="4">
                <small class="text-muted"><i class="bi bi-info-circle me-1"></i>Isi kolom ini hanya jika Anda ingin mengganti password admin ini.</small>
            </div>
            
            <hr class="mb-4">
            
            <button type="submit" class="btn btn-warning px-4 text-dark fw-bold">
                <i class="fas fa-save me-1"></i> Update Data
            </button>
            <a href="<?= base_url('dashboard/user') ?>" class="btn btn-secondary px-4">Batal</a>
            
        </form>
    </div>
</div>

<?= $this->endSection(); ?>