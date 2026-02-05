<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tulis Artikel Baru</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-success text-white"><h5>Tulis Artikel Baru</h5></div>
            <div class="card-body">
                <form action="<?= base_url('dashboard/artikel/store'); ?>" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label>Judul Artikel</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Tanggal Tayang</label>
                        <input type="date" name="tanggal" class="form-control" value="<?= date('Y-m-d'); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Isi Berita</label>
                        <textarea name="isi_artikel" class="form-control" rows="8" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Gambar Sampul</label>
                        <input type="file" name="gambar" class="form-control">
                        <div class="form-text">Format: JPG/PNG.</div>
                    </div>

                    <button type="submit" class="btn btn-success">Terbitkan</button>
                    <a href="<?= base_url('dashboard/artikel'); ?>" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>