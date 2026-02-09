<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $title; ?></title>
    
    <link href="<?= base_url('assets/img/favicon.png'); ?>" rel="icon">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">
</head>

<body>

    <header id="header" class="header sticky-top">
        <div class="branding d-flex align-items-center">
             <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto">
                    <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" class="me-2" style="max-height: 40px;">
                    <h1 class="sitename">Klinik Hafida</h1>
                </a>
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
                <div class="col-lg-4 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body text-center bg-light rounded">
                            <i class="<?= $layanan['icon']; ?> fa-5x text-success mb-3 mt-4"></i>
                            
                            <h3 class="fw-bold mb-3"><?= $layanan['nama_poli']; ?></h3>
                            <hr>
                            <p class="text-muted fst-italic">Siap melayani kebutuhan kesehatan Anda dan keluarga.</p>
                            
                            <div class="d-grid gap-2 mt-4">
                                <a href="https://wa.me/6281128000588?text=Halo%20Admin,%20saya%20mau%20tanya%20tentang%20layanan%20<?= $layanan['nama_poli']; ?>" class="btn btn-success rounded-pill" target="_blank">
                                    <i class="bi bi-whatsapp"></i> Chat WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <h2 class="mb-3 fw-bold" style="color: var(--accent-color);">Deskripsi Layanan</h2>
                    
                    <p class="lead" style="line-height: 1.8;">
                        <?= $layanan['deskripsi']; ?>
                    </p>
                    
                    <div class="alert alert-info mt-4">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <strong>Informasi:</strong> Untuk jadwal dokter spesifik dan booking antrean, silakan hubungi bagian pendaftaran kami.
                    </div>
                    
                    <h4 class="mt-4 mb-3">Fasilitas Standar:</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Ruang Tindakan Steril</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Peralatan Medis Modern</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Tenaga Medis Berpengalaman</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Ruang Tunggu Nyaman</li>
                    </ul>
                    
                    <div class="mt-5">
                        <a href="<?= base_url('/') ?>#services" class="btn btn-outline-secondary rounded-pill px-4">
                            <i class="bi bi-arrow-left"></i> Kembali ke Menu Layanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer id="footer" class="footer light-background mt-auto">
        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">Klinik Hafida</strong></p>
        </div>
    </footer>

    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>