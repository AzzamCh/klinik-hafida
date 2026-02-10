<?= $this->extend('dashboard/layout'); ?> 

<?= $this->section('content'); ?>
<div class="card shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold text-success"><i class="fas fa-users-cog me-2"></i> Daftar Admin</h5>
        <a href="<?= base_url('dashboard/user/create'); ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Admin
        </a>
    </div>
    <div class="card-body">
        <?php if(session()->getFlashdata('success')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($users as $u) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $u['nama_lengkap'] ?? '-'; ?></td>
                    <td><?= $u['username']; ?></td>
                    <td>
                        <a href="<?= base_url('dashboard/user/edit/'.$u['id']); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('dashboard/user/delete/'.$u['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?');"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>