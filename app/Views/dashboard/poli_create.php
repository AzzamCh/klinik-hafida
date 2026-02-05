x<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Poli</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-success text-white"><h5>Tambah Poli Baru</h5></div>
            <div class="card-body">
                <form action="<?= base_url('dashboard/poli/store'); ?>" method="post">
                    <div class="mb-3">
                        <label>Nama Poli</label>
                        <input type="text" name="nama_poli" class="form-control" required placeholder="Contoh: Poli Mata">
                    </div>
                    <div class="mb-3">
                        <label>Kode Icon (FontAwesome)</label>
                        <input type="text" name="icon" class="form-control" required placeholder="Contoh: fas fa-eye">
                        <div class="form-text">Cari kode icon di <a href="https://fontawesome.com/v5/search" target="_blank">FontAwesome</a>.</div>
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('dashboard/poli'); ?>" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>