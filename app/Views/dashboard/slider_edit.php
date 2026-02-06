<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Slider - Admin</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        /* Gaya Sidebar SAMA PERSIS dengan poli/slider */
        .sidebar { min-height: 100vh; background-color: #0f9b0f; color: white; }
        .sidebar a { color: white; text-decoration: none; padding: 15px; display: block; }
        .sidebar a:hover { background-color: #0c7a0c; }
    </style>
</head>
<body>

<div class="d-flex">
    <div class="sidebar p-3" style="width: 250px;">
        <h4 class="mb-4 text-center fw-bold">Klinik Hafida</h4>
        
        <a href="<?= base_url('dashboard'); ?>"><i class="fas fa-home me-2"></i> Dashboard</a>
        <a href="<?= base_url('dashboard/dokter'); ?>"><i class="fas fa-user-md me-2"></i> Kelola Dokter</a>
        <a href="<?= base_url('dashboard/poli'); ?>"><i class="fas fa-hospital me-2"></i> Kelola Poli</a>
        <a href="<?= base_url('dashboard/artikel'); ?>"><i class="fas fa-newspaper me-2"></i> Kelola Artikel</a>
        
        <a href="<?= base_url('dashboard/slider'); ?>" class="bg-success"><i class="fas fa-images me-2"></i> Kelola Slider</a>
        
        <hr>
        <a href="<?= base_url('logout'); ?>" class="text-warning"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
    </div>

    <div class="flex-grow-1 p-4 bg-light">
        <h2 class="mb-4">Edit Slider</h2>
        
        <div class="card shadow-sm border-0">
            <div class="card-body">
                
                <form action="<?= base_url('dashboard/slider/update/' . $slider['id']); ?>" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="gambar_lama" value="<?= $slider['gambar']; ?>">

                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Utama</label>
                        <input type="text" name="judul" class="form-control" value="<?= $slider['judul']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3"><?= $slider['deskripsi']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Link Tujuan</label>
                        <input type="text" name="link" class="form-control" value="<?= $slider['link']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Gambar Banner</label>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="<?= base_url('assets/img/' . $slider['gambar']); ?>" class="img-thumbnail w-100" alt="Preview Lama">
                                <small class="text-muted d-block text-center mt-1">Gambar Saat Ini</small>
                            </div>
                            <div class="col-md-9">
                                <input type="file" name="gambar" class="form-control">
                                <div class="form-text text-danger">* Biarkan kosong jika tidak ingin mengganti gambar.</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save me-1"></i> Update
                        </button>
                        <a href="<?= base_url('dashboard/slider'); ?>" class="btn btn-secondary px-4">
                            Batal
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>