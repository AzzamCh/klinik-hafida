<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Klinik Hafida</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background-color: #0f9b0f; color: white; }
        .sidebar a { color: white; text-decoration: none; padding: 15px; display: block; }
        .sidebar a:hover { background-color: #0c7a0c; }
        .card-stat { border-left: 5px solid #0f9b0f; }
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
            
            <hr>
            <a href="<?= base_url('logout'); ?>" class="text-warning"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
        </div>

        <div class="flex-grow-1 p-4 bg-light">
            <h2 class="mb-4">Selamat Datang, <?= $username; ?>!</h2>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4 card-stat">
                        <div class="card-body">
                            <h5 class="text-muted">Total Dokter</h5>
                            <h1 class="fw-bold"><?= $count_dokter; ?></h1>
                            <a href="<?= base_url('dashboard/dokter'); ?>" class="btn btn-sm btn-outline-success mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm mb-4 card-stat">
                        <div class="card-body">
                            <h5 class="text-muted">Total Poli</h5>
                            <h1 class="fw-bold"><?= $count_poli; ?></h1>
                            <a href="<?= base_url('dashboard/poli'); ?>" class="btn btn-sm btn-outline-success mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>