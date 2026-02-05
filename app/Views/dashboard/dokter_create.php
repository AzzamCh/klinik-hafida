<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter Baru</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Form Tambah Dokter</h5>
                    </div>
                    <div class="card-body">
                        
                        <form action="<?= base_url('dashboard/dokter/store'); ?>" method="post" enctype="multipart/form-data">
                            
                            <div class="mb-3">
                                <label class="form-label">Nama Dokter</label>
                                <input type="text" name="nama_dokter" class="form-control" placeholder="Contoh: dr. Budi Santoso" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Spesialisasi</label>
                                <input type="text" name="spesialisasi" class="form-control" placeholder="Contoh: Spesialis Jantung" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jadwal Praktik</label>
                                <input type="text" name="jadwal" class="form-control" placeholder="Contoh: Senin - Jumat, 08.00 - 14.00" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Foto Dokter</label>
                                <input type="file" name="foto" class="form-control" required>
                                <div class="form-text">Format: JPG/PNG. Pastikan ukuran proporsional.</div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="<?= base_url('dashboard/dokter'); ?>" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>

                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>