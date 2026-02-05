<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $artikel['judul']; ?> - Klinik Hafida</title>

  <link href="<?= base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">
</head>

<body class="starter-page-page">

  <header id="header" class="header sticky-top">
    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto">
          <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" class="me-2" style="max-height: 40px;">
          <h1 class="sitename">Klinik Hafida</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="<?= base_url('/') ?>">Beranda</a></li>
            <li><a href="<?= base_url('/') ?>#about">Tentang Kami</a></li>
            <li><a href="<?= base_url('/') ?>#services">Layanan</a></li>
            <li><a href="<?= base_url('/') ?>#doctors">Dokter</a></li>
            <li><a href="<?= base_url('artikel'); ?>" class="active">Artikel</a></li> 
            <li><a href="<?= base_url('/') ?>#contact">Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="<?= base_url('/') ?>#appointment">Daftar Online</a>
      </div>
    </div>
  </header>

  <main class="main">

    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Artikel Kesehatan</h1>
              <p class="mb-0">Informasi terpercaya untuk kesehatan keluarga Anda.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url('/') ?>">Beranda</a></li>
            <li><a href="<?= base_url('artikel'); ?>">Artikel</a></li>
            <li class="current">Baca Berita</li>
          </ol>
        </div>
      </nav>
    </div>

    <section id="blog-details" class="blog-details section">
      <div class="container">
        <div class="row justify-content-center">
          
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <article class="article">

              <div class="post-img mb-4">
                <?php if($artikel['gambar']): ?>
                    <img src="<?= base_url('assets/img/blog/' . $artikel['gambar']); ?>" alt="<?= $artikel['judul']; ?>" class="img-fluid rounded w-100" style="max-height: 500px; object-fit: cover;">
                <?php else: ?>
                    <div class="bg-light rounded p-5 text-center text-muted">
                        <i class="bi bi-image fa-3x"></i><br>Tidak ada gambar
                    </div>
                <?php endif; ?>
              </div>

              <h2 class="title mb-3 fw-bold" style="color: var(--heading-color);"><?= $artikel['judul']; ?></h2>

              <div class="meta-top mb-4 p-2 border-top border-bottom d-flex gap-4 text-muted small">
                <div class="d-flex align-items-center">
                    <i class="bi bi-person me-2 text-primary"></i> Admin Klinik
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-calendar3 me-2 text-primary"></i> 
                    <time><?= date('d F Y', strtotime($artikel['tanggal'])); ?></time>
                </div>
              </div>

              <div class="content fs-5" style="line-height: 1.8; text-align: justify;">
                <?= nl2br($artikel['isi_artikel']); ?>
              </div>

            </article>

            <div class="mt-5 pt-4 border-top">
                <a href="<?= base_url('artikel'); ?>" class="btn btn-outline-secondary rounded-pill px-4">
                    <i class="bi bi-arrow-left me-2"></i> Kembali ke Daftar Artikel
                </a>
            </div>

          </div>

        </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Klinik Hafida</strong> <span>All Rights Reserved</span></p>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>

  <script src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>
</html>