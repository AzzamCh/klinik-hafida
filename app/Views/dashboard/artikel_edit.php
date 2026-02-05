<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Artikel</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-warning"><h5>Edit Artikel</h5></div>
            <div class="card-body">
                <form action="<?= base_url('dashboard/artikel/update/'.$artikel['id_artikel']); ?>" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="gambar_lama" value="<?= $artikel['gambar']; ?>">

                    <div class="mb-3">
                        <label>Judul Artikel</label>
                        <input type="text" name="judul" class="form-control" value="<?= $artikel['judul']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Tanggal Tayang</label>
                        <input type="date" name="tanggal" class="form-control" value="<?= $artikel['tanggal']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Isi Berita</label>
                        <textarea name="isi_artikel" class="form-control" rows="8" required><?= $artikel['isi_artikel']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Ganti Gambar (Opsional)</label><br>
                        <?php if($artikel['gambar']): ?>
                            <img src="<?= base_url('assets/img/blog/'.$artikel['gambar']); ?>" width="100" class="mb-2 rounded">
                        <?php endif; ?>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="<?= base_url('dashboard/artikel'); ?>" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>