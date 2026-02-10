<?= $this->extend('dashboard/home'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Admin</h1>
    <div class="card mb-4 col-md-6">
        <div class="card-body">
            <?php if(session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
            <?php endif; ?>

            <form action="<?= base_url('dashboard/user/save'); ?>" method="post">
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('dashboard/user'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>