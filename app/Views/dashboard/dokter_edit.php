<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold text-warning"><i class="fas fa-user-edit me-2"></i> Edit Data Dokter</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('dashboard/dokter/update/' . $dokter['id_dokter']); ?>" method="post" enctype="multipart/form-data">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nama Dokter</label>
                    <input type="text" name="nama_dokter" class="form-control" value="<?= $dokter['nama_dokter']; ?>" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Spesialisasi</label>
                    <input type="text" name="spesialisasi" class="form-control" value="<?= $dokter['spesialisasi']; ?>" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Jadwal Praktik</label>
                <input type="text" name="jadwal" class="form-control" value="<?= $dokter['jadwal']; ?>" required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Ganti Foto (Opsional)</label>
                <input type="file" name="foto" class="form-control" accept="image/*">
                
                <input type="hidden" name="foto_lama" value="<?= $dokter['foto']; ?>">

                <?php if(!empty($dokter['foto'])): ?>
                    <div class="mt-2">
                        <small>Foto Saat Ini:</small><br>
                        <img src="<?= base_url('assets/img/doctors/' . $dokter['foto']); ?>" width="80" class="rounded border p-1">
                    </div>
                <?php endif; ?>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning"><i class="fas fa-save me-1"></i> Update Data</button>
                <a href="<?= base_url('dashboard/dokter'); ?>" class="btn btn-secondary">Batal</a>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection(); ?>