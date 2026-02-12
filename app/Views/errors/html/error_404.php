<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Tidak Ditemukan - Klinik Hafida</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; height: 100vh; font-family: "Poppins", sans-serif; }
        .error-container { text-align: center; max-width: 600px; padding: 40px; }
        .error-code { font-size: 8rem; font-weight: 900; color: #198754; line-height: 1; }
        .error-title { font-size: 1.5rem; font-weight: bold; color: #333; margin-bottom: 20px; }
        .btn-back { background-color: #198754; color: white; border-radius: 50px; padding: 10px 30px; text-decoration: none; transition: 0.3s; }
        .btn-back:hover { background-color: #146c43; color: white; }
    </style>
</head>
<body>

    <div class="error-container">
        <div class="mb-4">
             <i class="bi bi-bandaid text-success" style="font-size: 5rem;"></i>
        </div>
        <div class="error-code">404</div>
        <h1 class="error-title">Waduh! Halamannya Sedang "Sakit"</h1>
        <p class="text-muted mb-5">
            Maaf, halaman yang Anda cari tidak ditemukan. Mungkin alamatnya salah ketik atau halamannya sudah dipindahkan.
        </p>
        <a href="<?= base_url('/'); ?>" class="btn-back">
            <i class="bi bi-house-door me-2"></i> Kembali ke Beranda
        </a>
    </div>

</body>
</html>