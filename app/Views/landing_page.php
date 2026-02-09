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

  <main class="main">

  <section id="hero" class="hero-custom">
      <div class="container h-100">
        
        <div id="heroCarousel" class="carousel slide h-100" data-bs-ride="carousel" data-bs-interval="5000">
          
          <div class="carousel-inner h-100">

          <?php if(!empty($slider)): ?>
    <?php foreach($slider as $key => $slide): ?>
    
    <div class="carousel-item <?= ($key == 0) ? 'active' : ''; ?>" data-bs-interval="5000">
        <div class="row align-items-center">
        <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up">
            <span class="badge bg-success text-white mb-3 px-3 py-2 rounded-pill">Info Terkini</span>
            
            <h1><?= $slide['judul']; ?></h1>
            <p><?= $slide['deskripsi']; ?></p>
            
            <a href="<?= !empty($slide['link']) ? $slide['link'] : '#services'; ?>" class="btn btn-light text-success fw-bold rounded-pill px-4 py-2 shadow-sm">
                Lihat Selengkapnya
            </a>
            </div>
        
        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="zoom-in">
            <img src="<?= base_url('assets/img/' . $slide['gambar']); ?>" class="hero-img-custom" alt="Banner">
        </div>
        </div>
    </div>

    <?php endforeach; ?>
<?php else: ?>
              
              <div class="carousel-item active">
                 <div class="row align-items-center">
                   <div class="col-lg-6 order-2 order-lg-1">
                     <span class="badge bg-success text-white mb-3 px-3 py-2 rounded-pill">Selamat Datang</span>
                     <h1>Klinik Pratama Hafida</h1>
                     <p>Melayani dengan sepenuh hati untuk kesehatan keluarga Anda.</p>
                     <a href="#about" class="btn btn-light text-success fw-bold rounded-pill px-4 py-2 shadow-sm">Tentang Kami</a>
                   </div>
                   <div class="col-lg-6 order-1 order-lg-2 text-center">
                      <img src="<?= base_url('assets/img/hero-img.png'); ?>" class="hero-img-custom" alt="Default">
                   </div>
                 </div>
              </div>

            <?php endif; ?>

          </div>

          <div class="carousel-controls-bottom">
            <button class="btn-nav-hero" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"><i class="fas fa-chevron-left"></i></button>
            <button class="btn-nav-hero" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>

      </div>
    </section>

    <section id="about" class="about section">
      <div class="container">
        
        <div class="row gy-4 gx-5 mb-5 align-items-center">
          <div class="col-lg-5 position-relative" data-aos="fade-right">
            <img src="<?= base_url('assets/img/tentang.jpg'); ?>" class="img-fluid rounded shadow" alt="Gedung Klinik">
          </div>
          <div class="col-lg-7 content" data-aos="fade-left">
            <h3 class="fw-bold text-success">Tentang Klinik Pratama Hafida</h3>
            <p class="fst-italic text-muted">
              "Klinik Pratama Hafida hadir untuk masyarakat Pemalang dan dapat meningkatkan derajat kesehatan secara optimal."
            </p>
            <p>
              Berlokasi strategis di Jl. Sulawesi No. 45, Kel. Mulyoharjo, Pemalang. Kami berkomitmen memberikan pelayanan kesehatan dasar yang bermutu, didukung oleh tenaga medis profesional dan manajemen yang handal di bawah naungan <strong>CV. Hafida Medika Sejahtera</strong>.
            </p>
            
            <div class="row mt-4">
               <div class="col-md-6">
                 <div class="d-flex align-items-center mb-3">
                   <i class="bi bi-check-circle-fill text-success me-2 fs-4"></i>
                   <span class="fw-bold">Pelayanan 5S (Senyum, Salam, Sapa, Sopan, Santun)</span>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="d-flex align-items-center mb-3">
                   <i class="bi bi-check-circle-fill text-success me-2 fs-4"></i>
                   <span class="fw-bold">Fasilitas Medis Modern</span>
                 </div>
               </div>
            </div>
          </div>
        </div>

        <div class="row gy-4" data-aos="fade-up">
           <div class="col-lg-4">
              <div class="card border-0 shadow-sm h-100 p-3">
                 <div class="card-body text-center">
                    <div class="mb-3 text-success"><i class="bi bi-eye fs-1"></i></div>
                    <h4 class="card-title fw-bold">Visi</h4>
                    <p class="card-text small text-muted">
                      Menjadi klinik pratama pilihan utama masyarakat Pemalang dengan pelayanan kesehatan yang berkualitas dan terjangkau.
                    </p>
                 </div>
              </div>
           </div>

           <div class="col-lg-4">
              <div class="card border-0 shadow-sm h-100 p-3">
                 <div class="card-body text-center">
                    <div class="mb-3 text-success"><i class="bi bi-bullseye fs-1"></i></div>
                    <h4 class="card-title fw-bold">Misi</h4>
                    <p class="card-text small text-muted text-start">
                      1. Memberikan pelayanan kesehatan yang profesional.<br>
                      2. Mengutamakan keselamatan dan kepuasan pasien.<br>
                      3. Meningkatkan kompetensi SDM secara berkala.
                    </p>
                 </div>
              </div>
           </div>

           <div class="col-lg-4">
              <div class="card border-0 shadow-sm h-100 p-3">
                 <div class="card-body text-center">
                    <div class="mb-3 text-success"><i class="bi bi-gem fs-1"></i></div>
                    <h4 class="card-title fw-bold">Tata Nilai</h4>
                    <p class="card-text small text-muted">
                      <strong>HAFIDA</strong><br>
                      (Handal, Akurat, Friendly, Inovatif, Dedikasi, Amanah)
                    </p>
                 </div>
              </div>
           </div>
        </div>

      </div>
    </section>

    <section id="stats" class="stats section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          
          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-user-doctor"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="<?= $total_dokter; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Dokter Profesional</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-regular fa-hospital"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="<?= $total_poli; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Poli Layanan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-flask"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p>Laboratorium Lengkap</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p>% Kepuasan Pasien</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <p>Solusi kesehatan komprehensif untuk kebutuhan keluarga Anda</p>
      </div>
      <div class="container">
        <div class="row gy-4">
          <?php foreach ($layanan_kami as $poli) : ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon"><i class="<?= $poli['icon']; ?>"></i></div>
                <a href="<?= base_url('layanan/detail/' . $poli['slug']); ?>" class="stretched-link">
                  <h3><?= $poli['nama_poli']; ?></h3>
                </a>
                <p><?= $poli['deskripsi']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="appointment" class="appointment section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Pendaftaran Online</h2>
        <p>Daftar lebih mudah tanpa antre melalui layanan WhatsApp kami</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      <form id="waForm" class="php-email-form">
  <div class="row">
    
    <div class="col-md-4 form-group">
      <input type="text" name="name" class="form-control" id="inputNama" placeholder="Nama Lengkap Pasien" required>
    </div>
    
    <div class="col-md-4 form-group mt-3 mt-md-0">
      <input type="number" class="form-control" id="inputNik" placeholder="NIK (KTP/KK)" required>
    </div>
    
    <div class="col-md-4 form-group mt-3 mt-md-0">
      <input type="tel" class="form-control" id="inputHp" placeholder="Nomor WhatsApp Aktif" required>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 form-group mt-3">
      <input type="date" name="date" class="form-control datepicker" id="inputTanggal" required>
    </div>

    <div class="col-md-6 form-group mt-3">
      <select name="department" id="inputPoli" class="form-select" required>
        <option value="">-- Pilih Poli Tujuan --</option>
        <?php foreach($layanan_kami as $poli): ?>
          <option value="<?= $poli['nama_poli']; ?>"><?= $poli['nama_poli']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    
    </div>

  <div class="form-group mt-3">
    <textarea class="form-control" name="message" id="inputKeluhan" rows="5" placeholder="Tuliskan keluhan atau gejala yang dirasakan..." required></textarea>
  </div>
  
  <div class="text-center mt-3">
    <button type="submit" class="btn btn-success rounded-pill px-5 py-2">
      <i class="fab fa-whatsapp me-2"></i> Kirim Pendaftaran via WA
    </button>
  </div>

</form>
      </div>
    </section>

    <section id="doctors" class="doctors section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Tim Medis Kami</h2>
        <p>Ditangani langsung oleh dokter berpengalaman dan bersertifikasi</p>
      </div>
      <div class="container">
        <div class="row gy-4">
          <?php foreach ($para_dokter as $dokter) : ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member d-flex align-items-start">
                <div class="pic">
                  <img src="<?= base_url('assets/img/doctors/' . $dokter['foto']); ?>" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4><?= $dokter['nama_dokter']; ?></h4>
                  <span><?= $dokter['spesialisasi']; ?></span>
                  <p class="small text-muted mb-2"><i class="fa fa-clock me-1"></i> <?= $dokter['jadwal']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="articles" class="services section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita & Kegiatan</h2>
        <p>Informasi terkini seputar kesehatan dan kegiatan Klinik Pratama Hafida</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <?php if(!empty($articles)): ?>
            <?php foreach($articles as $item): ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                <div style="height: 200px; overflow: hidden; position: relative;">
                    <?php if(!empty($item['gambar'])) : ?>
                        <img src="<?= base_url('assets/img/blog/' . $item['gambar']); ?>" alt="<?= $item['judul']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                    <?php else : ?>
                        <div class="d-flex align-items-center justify-content-center text-muted" style="width: 100%; height: 100%; background-color: #e9ecef;">
                            <i class="bi bi-card-image fs-1"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-2 text-muted small">
                    <i class="bi bi-calendar3 me-2 text-success"></i> 
                    <?= date('d M Y', strtotime($item['tanggal'])); ?>
                  </div>
                  <h5 class="card-title mb-3">
                    <a href="<?= base_url('artikel/' . $item['slug']); ?>" class="text-dark text-decoration-none fw-bold stretched-link">
                      <?= $item['judul']; ?>
                    </a>
                  </h5>
                  <p class="card-text text-muted">
                    <?= substr(strip_tags($item['isi_artikel']), 0, 90); ?>...
                  </p>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="<?= base_url('artikel'); ?>" class="btn btn-outline-success rounded-pill px-4 py-2">
                Lihat Semua Berita
            </a>
        </div>
      </div>
    </section>

    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak & Lokasi</h2>
        <p>Kami siap melayani Anda. Kunjungi kami di alamat berikut.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="rounded-4 overflow-hidden shadow-sm" style="height: 100%; min-height: 400px;">
                <iframe 
                    style="border:0; width: 100%; height: 100%;" 
                    src="https://maps.google.com/maps?q=Klinik+Pratama+Hafida,+Jl.+Sulawesi+No.45,+Mulyoharjo,+Pemalang&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    frameborder="0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center ps-lg-5">
            
            <div class="info-item d-flex mb-4 align-items-start" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box bg-success text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; margin-right: 15px;">
                  <i class="bi bi-geo-alt fs-4" style="color: #ffffff;"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-1">Alamat</h3>
                <p class="mb-0">Jalan Sulawesi Nomor 45. Kel. Mulyoharjo</p>
                <p>Kec. Pemalang, Kab. Pemalang, Jawa Tengah</p>
              </div>
            </div>

            <div class="info-item d-flex mb-4 align-items-start" data-aos="fade-up" data-aos-delay="300">
               <div class="icon-box bg-success text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; margin-right: 15px;">
                  <i class="bi bi-telephone fs-4" style="color: #ffffff;"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-1">Telepon</h3>
                <p class="mb-0">Telp: +62 811-2800-0588  </p>
              </div>
            </div>

            <div class="info-item d-flex mb-4 align-items-start" data-aos="fade-up" data-aos-delay="400">
               <div class="icon-box bg-success text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; margin-right: 15px;">
                  <i class="bi bi-envelope fs-4" style="color: #ffffff;"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-1">Email</h3>
                <p>klinikhafida@gmail.com</p>
              </div>
            </div>

            <div class="alert alert-success mt-2 border-0 shadow-sm" role="alert">
                <div class="d-flex">
                    <i class="bi bi-clock-history me-3 fs-2"></i>
                    <div>
                        <strong>Jam Operasional:</strong><br>
                        Senin - Sabtu: 07.00 - 21.00 WIB<br>
                        Minggu: Libur / Perjanjian
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer light-background pt-5">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto mb-3">
            <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" class="me-2" style="max-height: 40px;">
            <h1 class="sitename h4 m-0">Klinik Pratama Hafida</h1>
          </a>
          <p class="text-muted small">
            Melayani dengan sepenuh hati, profesional, dan mengutamakan keselamatan pasien. Terakreditasi dan bekerjasama dengan BPJS Kesehatan.
          </p>
          <div class="social-links d-flex mt-3">
             <a href="https://www.facebook.com/klinik.hafida.3" target="_blank" class="facebook bg-white text-primary border shadow-sm"><i class="bi bi-facebook"></i></a>
             <a href="https://www.instagram.com/klinikhafida.id/?hl=id" target="_blank" class="instagram bg-white text-danger border shadow-sm"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 class="text-dark">Tautan</h4>
          <ul>
            <li><a href="<?= base_url('/') ?>" class="text-muted">Beranda</a></li>
            <li><a href="<?= base_url('/') ?>#about" class="text-muted">Profil</a></li>
            <li><a href="<?= base_url('/') ?>#services" class="text-muted">Layanan</a></li>
            <li><a href="<?= base_url('/') ?>#articles" class="text-muted">Berita</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4 class="text-dark">Layanan Unggulan</h4>
          <ul>
            <li><a href="#" class="text-muted">Poli Umum</a></li>
            <li><a href="#" class="text-muted">Poli Gigi & Mulut</a></li>
            <li><a href="#" class="text-muted">KIA & KB</a></li>
            <li><a href="#" class="text-muted">Laboratorium</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4 class="text-dark">Kontak Kami</h4>
          <p class="text-muted small">
            Jl. Sulawesi No. 45<br>
            Kel. Mulyoharjo, Pemalang<br><br>
            <strong>Telp:</strong> +62 811-2800-0588<br>
            <strong>Email:</strong> klinikhafida@gmail.com
          </p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4 border-top pt-4">
      <p class="mb-0">© 2025 <strong>Klinik Pratama Hafida</strong>. All Rights Reserved</p>
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
  <script>
  document.getElementById('waForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // 1. Ambil Data (Tanpa Dokter)
    var nama    = document.getElementById('inputNama').value;
    var nik     = document.getElementById('inputNik').value;
    var hp      = document.getElementById('inputHp').value;
    var tanggal = document.getElementById('inputTanggal').value;
    var poli    = document.getElementById('inputPoli').value;
    var keluhan = document.getElementById('inputKeluhan').value;

    // 2. Nomor WA Admin (GANTI DENGAN NOMOR MU)
    var nomorAdmin = "6281128000588"; 

    // 3. Format Pesan (Baris Dokter dihapus)
    var pesan = "*PENDAFTARAN PASIEN BARU*" + "%0A" +
                "----------------------------------" + "%0A" +
                "*Nama:* " + nama + "%0A" +
                "*NIK:* " + nik + "%0A" +
                "*No HP:* " + hp + "%0A" +
                "*Rencana Datang:* " + tanggal + "%0A" +
                "*Poli Tujuan:* " + poli + "%0A" +
                "*Keluhan:* " + keluhan + "%0A" +
                "----------------------------------" + "%0A" +
                "Mohon info ketersediaan dokter ya min. Terima kasih!";

    // 4. Kirim
    var linkWA = "https://wa.me/" + nomorAdmin + "?text=" + pesan;
    window.open(linkWA, '_blank');
  });
</script>

</body>
</html>