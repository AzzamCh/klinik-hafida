<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Klinik Pratama Hafida - Mitra Sehat Keluarga</title>
  <meta name="description" content="Profil Resmi Klinik Pratama Hafida Pemalang - Melayani dengan Hati">
  <meta name="keywords" content="klinik pratama, hafida, pemalang, dokter, bpjs, kesehatan">

  <link href="<?= base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:klinikhafida@gmail.com">klinikhafida@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 811-2800-0588</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://www.facebook.com/klinik.hafida.3" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/klinikhafida.id/?hl=id" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto">
          <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" class="me-2" style="max-height: 45px;">
          <h1 class="sitename">Klinik Pratama Hafida</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="<?= base_url('/') ?>#hero" class="active">Beranda</a></li>
            <li><a href="<?= base_url('/') ?>#about">Profil</a></li>
            <li><a href="<?= base_url('/') ?>#services">Layanan</a></li>
            <li><a href="<?= base_url('/') ?>#doctors">Dokter</a></li>
            <li><a href="<?= base_url('/') ?>#articles">Berita</a></li> 
            <li><a href="<?= base_url('/') ?>#contact">Kontak</a></li>
            
            <?php if(session()->get('logged_in')) : ?>
                <li><a href="<?= base_url('dashboard'); ?>" style="color: #0f9b0f; font-weight: bold;">Dashboard</a></li>
            <?php else : ?>
                <li><a href="<?= base_url('login'); ?>">Login Admin</a></li>
            <?php endif; ?>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="<?= base_url('/') ?>#appointment">Daftar Online</a>
      </div>
    </div>
  </header>