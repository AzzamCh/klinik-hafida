<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $title; ?></title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">
</head>

<body>
    <header id="header" class="header sticky-top">
        <div class="branding d-flex align-items-center">
             <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto"><h1 class="sitename">Klinik Hafida</h1></a>
                <nav id="navmenu" class="navmenu">
                  <ul>
                    <li><a href="<?= base_url('/') ?>">Kembali ke Beranda</a></li>
                  </ul>
                </nav>
                <a class="cta-btn d-none d-sm-block" href="<?= base_url('/') ?>#appointment">Daftar Sekarang</a>
             </div>
        </div>
    </header>

    <main class="main mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-center bg-light">
                            <i class="fas fa-heartbeat fa-5x text-success mb-3 mt-3"></i>
                            <h3 class="fw-bold"><?= $layanan['judul']; ?></h3>
                            <hr>
                            <p class="text-start mb-1"><strong>Dokter Jaga:</strong> <br> <?= $layanan['dokter']; ?></p>
                            <p class="text-start"><strong>Jam Operasional:</strong> <br> <?= $layanan['jam']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="mb-3" style="color: var(--accent-color);">Deskripsi Layanan</h2>
                    <p class="lead"><?= $layanan['deskripsi']; ?></p>
                    
                    <h4 class="mt-4">Fasilitas & Tindakan:</h4>
                    <ul class="list-group list-group-flush">
                        <?php foreach($layanan['fasilitas'] as $f): ?>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> <?= $f; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <div class="mt-5">
                        <a href="<?= base_url('/') ?>#appointment" class="btn btn-warning text-white rounded-pill px-4">Buat Janji Temu</a>
                        <a href="<?= base_url('/') ?>" class="btn btn-outline-secondary rounded-pill px-4 ms-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer id="footer" class="footer light-background">
        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">Klinik Hafida</strong></p>
        </div>
    </footer>

    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>