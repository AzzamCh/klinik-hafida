<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Tambah Slider Baru</h3>
        <form action="<?= base_url('dashboard/slider/store'); ?>" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label>Judul Utama</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label>Deskripsi Singkat</label>
                <textarea name="deskripsi" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Link Tujuan (Opsional)</label>
                <input type="text" name="link" class="form-control" placeholder="Contoh: #services atau https://wa.me/...">
                <small class="text-muted">Jika kosong, tombol akan mengarah ke bagian Layanan.</small>
            </div>

            <div class="mb-3">
                <label>Gambar Banner (Landscape)</label>
                <input type="file" name="gambar" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan Slider</button>
            <a href="<?= base_url('dashboard/slider'); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>