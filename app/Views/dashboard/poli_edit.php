<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold text-warning"><i class="fas fa-edit me-2"></i> Edit Data Poli</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('dashboard/poli/update/' . $poli['id_poli']); ?>" method="post">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nama Poli</label>
                    <input type="text" name="nama_poli" class="form-control" value="<?= $poli['nama_poli']; ?>" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Kode Icon</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="<?= $poli['icon']; ?>"></i></span>
                        <input type="text" name="icon" class="form-control" value="<?= $poli['icon']; ?>" required>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Deskripsi Layanan</label>
                <textarea name="deskripsi" class="form-control" rows="5" required><?= $poli['deskripsi']; ?></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning"><i class="fas fa-save me-1"></i> Update Data</button>
                <a href="<?= base_url('dashboard/poli'); ?>" class="btn btn-secondary">Batal</a>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection(); ?>