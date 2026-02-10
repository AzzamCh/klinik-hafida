<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold text-success"><i class="fas fa-hospital-symbol me-2"></i> Tambah Poli Baru</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('dashboard/poli/store'); ?>" method="post">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nama Poli</label>
                    <input type="text" name="nama_poli" class="form-control" placeholder="Contoh: Poli Gigi" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Kode Icon (FontAwesome)</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-icons"></i></span>
                        <input type="text" name="icon" class="form-control" placeholder="Contoh: fas fa-tooth" required>
                    </div>
                    <small class="text-muted">Cari kode icon di <a href="https://fontawesome.com/v5/search?m=free" target="_blank">FontAwesome</a>.</small>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Deskripsi Layanan</label>
                <textarea name="deskripsi" class="form-control" rows="5" placeholder="Jelaskan layanan apa saja yang ada di poli ini..." required></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Simpan Poli</button>
                <a href="<?= base_url('dashboard/poli'); ?>" class="btn btn-secondary">Batal</a>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection(); ?>