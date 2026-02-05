<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dokter</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">Edit Dokter: <?= $dokter['nama_dokter']; ?></h5>
                    </div>
                    <div class="card-body">
                        
                        <form action="<?= base_url('dashboard/dokter/update/' . $dokter['id_dokter']); ?>" method="post" enctype="multipart/form-data">
                            
                            <input type="hidden" name="foto_lama" value="<?= $dokter['foto']; ?>">

                            <div class="mb-3">
                                <label class="form-label">Nama Dokter</label>
                                <input type="text" name="nama_dokter" class="form-control" value="<?= $dokter['nama_dokter']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Spesialisasi</label>
                                <input type="text" name="spesialisasi" class="form-control" value="<?= $dokter['spesialisasi']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jadwal Praktik</label>
                                <input type="text" name="jadwal" class="form-control" value="<?= $dokter['jadwal']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ganti Foto (Opsional)</label>
                                <br>
                                <img src="<?= base_url('assets/img/doctors/' . $dokter['foto']); ?>" width="100" class="mb-2 rounded">
                                <input type="file" name="foto" class="form-control">
                                <div class="form-text">Biarkan kosong jika tidak ingin mengganti foto.</div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="<?= base_url('dashboard/dokter'); ?>" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-warning">Update Data</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>