<?= $this->extend('dashboard/layout'); ?>
<?= $this->section('content'); ?>

<div class="mb-4">
    <h2 class="fw-bold text-dark">Tambah Admin Baru</h2>
</div>

<?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<div class="card border-0 shadow-sm" style="max-width: 600px;">
    <div class="card-body p-4">
        <form action="<?= base_url('dashboard/user/save') ?>" method="post">
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Contoh: admin123" required>
            </div>
            <div class="mb-4">
                <label class="form-label fw-bold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Minimal 4 karakter" required minlength="4">
            </div>
            
            <button type="submit" class="btn btn-success px-4"><i class="fas fa-save me-1"></i> Simpan Admin</button>
            <a href="<?= base_url('dashboard/user') ?>" class="btn btn-secondary px-4">Batal</a>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>