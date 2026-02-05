<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Poli</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-warning"><h5>Edit Poli</h5></div>
            <div class="card-body">
                <form action="<?= base_url('dashboard/poli/update/'.$poli['id_poli']); ?>" method="post">
                    <div class="mb-3">
                        <label>Nama Poli</label>
                        <input type="text" name="nama_poli" class="form-control" value="<?= $poli['nama_poli']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Kode Icon</label>
                        <input type="text" name="icon" class="form-control" value="<?= $poli['icon']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4" required><?= $poli['deskripsi']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="<?= base_url('dashboard/poli'); ?>" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>