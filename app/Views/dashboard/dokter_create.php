<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold text-success"><i class="fas fa-user-plus me-2"></i> Tambah Dokter Baru</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('dashboard/dokter/store'); ?>" method="post" enctype="multipart/form-data">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nama Dokter</label>
                    <input type="text" name="nama_dokter" class="form-control" placeholder="Contoh: dr. Budi Santoso" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Spesialisasi / Jabatan</label>
                    <input type="text" name="spesialisasi" class="form-control" placeholder="Contoh: Dokter Umum / Dokter Gigi" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Jadwal Praktik</label>
                <input type="text" name="jadwal" class="form-control" placeholder="Contoh: Senin - Jumat (08.00 - 14.00)" required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Foto Dokter</label>
                <input type="file" name="foto" class="form-control" accept="image/*">
                <small class="text-muted">Disarankan rasio 1:1 (Kotak). Format JPG/PNG.</small>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Simpan Dokter</button>
                <a href="<?= base_url('dashboard/dokter'); ?>" class="btn btn-secondary">Batal</a>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection(); ?>