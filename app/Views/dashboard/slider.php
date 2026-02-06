<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Slider - Admin</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        /* Gaya Sidebar SAMA PERSIS dengan poli.php */
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
        <h2 class="mb-4">Kelola Banner Slider</h2>
        
        <a href="<?= base_url('dashboard/slider/create'); ?>" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Slider</a>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul & Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($slider)): ?>
                            <tr>
                                <td colspan="4" class="text-center text-muted py-3">Belum ada data slider.</td>
                            </tr>
                        <?php else: ?>
                            <?php $i=1; foreach($slider as $item): ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td>
                                    <img src="<?= base_url('assets/img/' . $item['gambar']); ?>" class="img-thumbnail" style="width: 150px; height: 80px; object-fit: cover;">
                                </td>
                                <td>
                                    <strong><?= $item['judul']; ?></strong><br>
                                    <small class="text-muted"><?= $item['deskripsi']; ?></small>
                                </td>
                                <td>
                                    <a href="<?= base_url('dashboard/slider/edit/' . $item['id']); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('dashboard/slider/delete/' . $item['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus slider ini?')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>