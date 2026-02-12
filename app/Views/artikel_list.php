<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Berita & Artikel - Klinik Hafida</title>

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
  
  <style>
      /* Styling untuk Pagination agar rapi */
      .pagination { justify-content: center; margin-top: 20px; }
      .page-item .page-link { color: #198754; border-radius: 5px; margin: 0 2px; }
      .page-item.active .page-link { background-color: #198754; border-color: #198754; color: white; }
  </style>
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
              <h1>Artikel & Berita Kesehatan</h1>
              <p class="mb-0">Dapatkan informasi terkini seputar kesehatan, tips hidup sehat, dan kegiatan terbaru dari Klinik Hafida.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url('/') ?>">Beranda</a></li>
            <li class="current">Artikel</li>
          </ol>
        </div>
      </nav>
    </div>

    <section id="blog-posts" class="blog-posts section">
      <div class="container">
        
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 col-lg-6">
                <form action="" method="get">
                    <div class="input-group input-group-lg shadow-sm">
                        <input type="text" class="form-control border-success" placeholder="Cari artikel (misal: gigi, vaksin)..." name="keyword" value="<?= $keyword ?? ''; ?>">
                        <button class="btn btn-success px-4" type="submit">
                            <i class="fas fa-search me-2"></i> Cari
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row gy-4">

          <?php if(!empty($artikel)): ?>
            <?php foreach($artikel as $item): ?>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s ease;">
                
                <div style="height: 240px; overflow: hidden; position: relative;">
                    <?php if(!empty($item['gambar'])) : ?>
                        <img src="<?= base_url('assets/img/blog/' . $item['gambar']); ?>" alt="<?= $item['judul']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                    <?php else : ?>
                        <div style="width: 100%; height: 100%; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #adb5bd;">
                            <i class="bi bi-card-image" style="font-size: 3rem;"></i>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="card-body p-4 d-flex flex-column">
                  <div class="d-flex align-items-center mb-2 text-muted small">
                    <i class="bi bi-calendar3 me-2" style="color: var(--accent-color);"></i> 
                    <?= date('d M Y', strtotime($item['tanggal'])); ?>
                  </div>
                  
                  <h5 class="card-title mb-3">
                    <a href="<?= base_url('artikel/' . $item['slug']); ?>" style="color: var(--heading-color); text-decoration: none; font-weight: bold;">
                      <?= $item['judul']; ?>
                    </a>
                  </h5>
                  
                  <p class="card-text text-muted flex-grow-1">
                    <?= substr(strip_tags($item['isi_artikel']), 0, 100); ?>...
                  </p>
                  
                  <a href="<?= base_url('artikel/' . $item['slug']); ?>" class="read-more align-self-end mt-3" style="color: var(--accent-color); font-weight: 600; text-decoration: none;">
                    Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                  </a>
                </div>

              </div>
            </div>

            <?php endforeach; ?>
          <?php else: ?>
            
            <div class="col-12 text-center py-5">
                <div class="alert alert-light" role="alert">
                  <h4 class="alert-heading text-muted"><i class="bi bi-search"></i> Artikel tidak ditemukan</h4>
                  <p>Maaf, tidak ada artikel yang cocok dengan kata kunci <strong>"<?= $keyword; ?>"</strong>.</p>
                  <a href="<?= base_url('artikel'); ?>" class="btn btn-outline-success btn-sm mt-2">Lihat Semua Artikel</a>
                </div>
            </div>

          <?php endif; ?>

        </div> 
        
        <div class="row mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12 d-flex justify-content-center">
                <?= $pager->links('artikel', 'default_full') ?>
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