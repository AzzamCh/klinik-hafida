<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>
<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold text-warning"><i class="fas fa-edit me-2"></i> Edit Artikel</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('dashboard/artikel/update/' . $artikel['id_artikel']); ?>" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label class="form-label fw-bold">Judul Artikel</label>
                <input type="text" name="judul" class="form-control" value="<?= $artikel['judul']; ?>" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= $artikel['tanggal']; ?>" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Ganti Gambar (Opsional)</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*">
                    
                    <input type="hidden" name="gambar_lama" value="<?= $artikel['gambar']; ?>">

                    <?php if(!empty($artikel['gambar'])) : ?>
                        <div class="mt-2">
                            <small>Gambar Saat Ini:</small><br>
                            <img src="<?= base_url('assets/img/blog/' . $artikel['gambar']); ?>" width="100" class="rounded border p-1">
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Isi Artikel</label>
                <textarea name="isi_artikel" class="form-control" rows="10" required><?= $artikel['isi_artikel']; ?></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning"><i class="fas fa-save me-1"></i> Update Perubahan</button>
                <a href="<?= base_url('dashboard/artikel'); ?>" class="btn btn-secondary">Batal</a>
            </div>

        </form>
    </div>
</div>
<?= $this->endSection(); ?>