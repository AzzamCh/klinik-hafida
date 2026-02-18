<?= $this->extend('dashboard/layout'); ?>
<?= $this->section('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">Kelola Admin</h2>
    <a href="<?= base_url('dashboard/user/create') ?>" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus me-1"></i> Tambah Admin
    </a>
</div>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($users as $u): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="fw-bold"><?= $u['nama_lengkap'] ?></td>
                        <td><?= $u['username'] ?></td>
                        <td>
                            <a href="<?= base_url('dashboard/user/edit/'.$u['id']) ?>" class="btn btn-sm btn-warning text-white"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url('dashboard/user/delete/'.$u['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus admin ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>