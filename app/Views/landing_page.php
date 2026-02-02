<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Klinik Hafida - Melayani Sepenuh Hati</title>
  <meta name="description" content="Website Resmi Klinik Pratama Hafida">
  <meta name="keywords" content="klinik, dokter, kesehatan, hafida">

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

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:admin@klinikhafida.com">admin@klinikhafida.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 812 3456 7890</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center me-auto">
          <h1 class="sitename">Klinik Hafida</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="<?= base_url('/') ?>#hero" class="active">Beranda</a></li>
            <li><a href="<?= base_url('/') ?>#about">Tentang Kami</a></li>
            <li><a href="<?= base_url('/') ?>#services">Layanan</a></li>
            <li><a href="<?= base_url('/') ?>#doctors">Dokter</a></li>
            <li><a href="<?= base_url('/') ?>#articles">Artikel</a></li> 
            <li><a href="<?= base_url('/') ?>#contact">Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="<?= base_url('/') ?>#appointment">Daftar Online</a>
      </div>
    </div>
  </header>

  <main class="main">

    <section id="hero" class="hero section light-background">
      <img src="<?= base_url('assets/img/hero-bg.jpg'); ?>" alt="" data-aos="fade-in">

      <div class="container position-relative">
        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>SELAMAT DATANG DI KLINIK HAFIDA</h2>
          <p>Kesehatan dan kenyamanan keluarga Anda adalah prioritas utama pelayanan kami.</p>
        </div>

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Kenapa Klinik Hafida?</h3>
              <p>
                Kami menyediakan pelayanan kesehatan terpadu dengan fasilitas modern, dokter yang berpengalaman, serta biaya yang terjangkau. Lokasi strategis dan pelayanan ramah adalah komitmen kami.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Selengkapnya</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Rekam Medis Digital</h4>
                    <p>Data kesehatan pasien tersimpan aman dan mudah diakses untuk riwayat pengobatan.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-gem"></i>
                    <h4>Fasilitas Lengkap</h4>
                    <p>Ruang tunggu nyaman, Apotek, Laboratorium dasar, dan ruang tindakan steril.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-clock"></i>
                    <h4>Layanan Cepat</h4>
                    <p>Sistem antrean yang efisien meminimalkan waktu tunggu Anda di klinik.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about section">
      <div class="container">
        <div class="row gy-4 gx-5">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="<?= base_url('assets/img/about.jpg'); ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Tentang Kami</h3>
            <p>
              Klinik Hafida berdiri sejak tahun 2020 dengan visi menjadi klinik pratama pilihan utama masyarakat. Kami melayani pasien umum, BPJS, dan asuransi swasta dengan standar pelayanan medis yang tinggi.
            </p>
            <ul>
              <li>
                <i class="fa-solid fa-user-doctor"></i>
                <div>
                  <h5>Tenaga Medis Profesional</h5>
                  <p>Didukung oleh dokter umum, dokter gigi, dan perawat yang bersertifikasi dan berpengalaman.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-pump-medical"></i>
                <div>
                  <h5>Peralatan Medis Modern</h5>
                  <p>Menggunakan alat kesehatan terkini yang terjamin sterilitas dan akurasinya.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-heart-circle-check"></i>
                <div>
                  <h5>Pelayanan Sepenuh Hati</h5>
                  <p>Kami menerapkan budaya 5S (Senyum, Salam, Sapa, Sopan, Santun) kepada setiap pasien.</p>
                </div>
              </li>
            </ul>
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
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Dokter</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-regular fa-hospital"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
              <p>Poli Layanan</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-flask"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p>Laboratorium</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-users"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pasien Puas</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <p>Solusi kesehatan lengkap untuk kebutuhan keluarga Anda</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <a href="<?= base_url('layanan/detail/poli-umum'); ?>" class="stretched-link"><h3>Poli Umum</h3></a>
              <p>Pemeriksaan kesehatan umum, konsultasi dokter, pengobatan penyakit ringan hingga kronis.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-tooth"></i></div>
              <a href="<?= base_url('layanan/detail/poli-gigi'); ?>" class="stretched-link"><h3>Poli Gigi</h3></a>
              <p>Perawatan gigi, tambal gigi, cabut gigi, pembersihan karang gigi (scaling), dan konsultasi.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-baby"></i></div>
              <a href="<?= base_url('layanan/detail/kia'); ?>" class="stretched-link"><h3>KIA & KB</h3></a>
              <p>Kesehatan Ibu dan Anak, pemeriksaan kehamilan, imunisasi bayi, dan layanan Keluarga Berencana.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <a href="#" class="stretched-link"><h3>Laboratorium</h3></a>
              <p>Cek Gula Darah, Kolesterol, Asam Urat, Golongan Darah, dan tes urin sederhana.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <a href="#" class="stretched-link"><h3>Apotek</h3></a>
              <p>Instalasi farmasi yang menyediakan obat-obatan lengkap dan terjamin keasliannya sesuai resep.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <a href="#" class="stretched-link"><h3>Surat Sehat</h3></a>
              <p>Pembuatan surat keterangan sehat untuk keperluan melamar kerja, sekolah, atau perjalanan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="appointment" class="appointment section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Buat Janji Temu</h2>
        <p>Daftar lebih mudah dan cepat melalui layanan WhatsApp kami</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <form action="#" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Nomor WhatsApp" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <select name="department" id="department" class="form-select" required="">
                <option value="">Pilih Poli</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="KIA">KIA</option>
              </select>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Keluhan (Opsional)"></textarea>
          </div>
          
          <div class="mt-3 text-center">
            <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Klinik%20Hafida,%20saya%20ingin%20mendaftar%20berobat." target="_blank" class="btn btn-primary" style="background-color: var(--secondary-color); border: none; padding: 12px 35px; border-radius: 50px; color: white; font-weight: bold;">
              <i class="bi bi-whatsapp"></i> Kirim via WhatsApp
            </a>
          </div>
        </form>
      </div>
    </section>

    <section id="doctors" class="doctors section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Dokter Kami</h2>
        <p>Siap melayani kesehatan Anda dengan profesionalisme</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="<?= base_url('assets/img/doctors/doctors-1.jpg'); ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>dr. Budi Santoso</h4>
                <span>Kepala Klinik / Dokter Umum</span>
                <p>Berpengalaman lebih dari 10 tahun menangani pasien umum dan gawat darurat dasar.</p>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="<?= base_url('assets/img/doctors/doctors-2.jpg'); ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>drg. Siti Aminah</h4>
                <span>Dokter Gigi</span>
                <p>Ahli dalam perawatan konservasi gigi dan estetika gigi yang ramah anak.</p>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="articles" class="services section light-background">
      
      <div class="container section-title" data-aos="fade-up">
        <h2>Artikel & Berita</h2>
        <p>Informasi kesehatan terkini dan kegiatan terbaru dari Klinik Hafida</p>
      </div>

      <div class="container">
        <div class="row gy-4">

          <?php if(!empty($articles)): ?>
            <?php foreach($articles as $item): ?>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden;">
                
                <div style="height: 200px; background-color: #e9ecef; display: flex; align-items: center; justify-content: center; color: #adb5bd;">
                  <i class="bi bi-card-image" style="font-size: 3rem;"></i>
                  </div>

                <div class="card-body p-4">
                  <div class="d-flex align-items-center mb-2 text-muted small">
                    <i class="bi bi-calendar3 me-2" style="color: var(--accent-color);"></i> 
                    <?= $item['tanggal']; ?>
                  </div>
                  
                  <h5 class="card-title mb-3">
                    <a href="<?= base_url('artikel'); ?>" style="color: var(--heading-color); text-decoration: none; font-weight: bold;">
                      <?= $item['judul']; ?>
                    </a>
                  </h5>
                  
                  <p class="card-text text-muted">
                    <?= $item['excerpt']; ?>
                  </p>
                  
                  <a href="<?= base_url('artikel'); ?>" class="read-more align-self-end" style="color: var(--accent-color); font-weight: 600; text-decoration: none;">
                    Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <?php endforeach; ?>
          <?php endif; ?>

        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="<?= base_url('artikel'); ?>" class="btn btn-outline-success px-4 py-2" style="border-color: var(--accent-color); color: var(--accent-color); border-radius: 50px;">
                Lihat Semua Artikel
            </a>
        </div>

      </div>
    </section>

    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak & Lokasi</h2>
        <p>Kunjungi kami atau hubungi untuk informasi lebih lanjut</p>
      </div>

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3!2d106.8!3d-6.2!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDAuMCJTIDEwNsKwNDgnMDAuMCJF!5e0!3m2!1sen!2sid!4v1600000000000" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl. Merdeka Raya No. 123, Kota Anda, Indonesia</p>
              </div>
            </div>
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon / WhatsApp</h3>
                <p>+62 812 3456 7890</p>
              </div>
            </div>
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>admin@klinikhafida.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
             <div class="alert alert-success">
                 <strong>Info:</strong> Untuk respon cepat, silakan hubungi kami langsung melalui tombol WhatsApp di atas atau datang langsung ke klinik pada jam operasional.
             </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
            <span class="sitename">Klinik Hafida</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Merdeka Raya No. 123</p>
            <p>Kota Anda, Indonesia</p>
            <p class="mt-3"><strong>HP:</strong> <span>+62 812 3456 7890</span></p>
            <p><strong>Email:</strong> <span>admin@klinikhafida.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Link Cepat</h4>
          <ul>
            <li><a href="<?= base_url('/') ?>">Beranda</a></li>
            <li><a href="<?= base_url('/') ?>#about">Tentang Kami</a></li>
            <li><a href="<?= base_url('/') ?>#services">Layanan</a></li>
            <li><a href="<?= base_url('/') ?>#articles">Artikel</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan</h4>
          <ul>
            <li><a href="#">Poli Umum</a></li>
            <li><a href="#">Poli Gigi</a></li>
            <li><a href="#">KIA & Imunisasi</a></li>
            <li><a href="#">Cek Laboratorium</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Jam Buka</h4>
          <ul>
            <li>Senin - Jumat: 08.00 - 21.00</li>
            <li>Sabtu: 08.00 - 17.00</li>
            <li>Minggu: Libur / Perjanjian</li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Klinik Hafida</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
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