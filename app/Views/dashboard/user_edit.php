<?= $this->extend('dashboard/home'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Admin</h1>
    <div class="card mb-4 col-md-6">
        <div class="card-body">
            <form action="<?= base_url('dashboard/user/update/' . $user['id']); ?>" method="post">
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?= $user['nama_lengkap']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?= $user['username']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Password Baru <small class="text-danger">(Kosongkan jika tidak ganti)</small></label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('dashboard/user'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>