<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Dashboard Admin'; ?> - Klinik Hafida</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <style>
        body { display: flex; min-height: 100vh; overflow-x: hidden; }
        .sidebar { min-width: 250px; max-width: 250px; background-color: #0f9b0f; color: white; min-height: 100vh; }
        .sidebar a { color: white; text-decoration: none; padding: 15px; display: block; transition: 0.3s; }
        .sidebar a:hover { background-color: #0c7a0c; padding-left: 20px; }
        .content-wrapper { flex-grow: 1; padding: 20px; background-color: #f8f9fa; }
        .card-stat { border-left: 5px solid #0f9b0f; }
    </style>
</head>
<body>

    <div class="sidebar p-3">
        <h4 class="mb-4 text-center fw-bold">Klinik Hafida</h4>
        
        <a href="<?= base_url('dashboard'); ?>"><i class="fas fa-home me-2"></i> Dashboard</a>
        <a href="<?= base_url('dashboard/dokter'); ?>"><i class="fas fa-user-md me-2"></i> Kelola Dokter</a>
        <a href="<?= base_url('dashboard/poli'); ?>"><i class="fas fa-hospital me-2"></i> Kelola Poli</a>
        <a href="<?= base_url('dashboard/artikel'); ?>"><i class="fas fa-newspaper me-2"></i> Kelola Artikel</a>
        <a href="<?= base_url('dashboard/slider'); ?>"><i class="fas fa-images me-2"></i> Kelola Slider</a>
        
        <a href="<?= base_url('dashboard/user'); ?>"><i class="fas fa-users-cog me-2"></i> Kelola Admin</a>
        
        <hr>
        <a href="<?= base_url('logout'); ?>" class="text-warning"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
    </div>

    <div class="content-wrapper">
        <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
            <h2>Selamat Datang, <?= session()->get('username'); ?>!</h2>
            <div class="text-muted"><?= date('d M Y'); ?></div>
        </div>

        <?= $this->renderSection('content'); ?>
    </div>

    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>