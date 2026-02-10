<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>
<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold text-success"><i class="fas fa-pen-nib me-2"></i> Tulis Berita Baru</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('dashboard/artikel/store'); ?>" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label class="form-label fw-bold">Judul Artikel</label>
                <input type="text" name="judul" class="form-control" placeholder="Contoh: Tips Menjaga Kesehatan Gigi" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Tanggal Terbit</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= date('Y-m-d'); ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Upload Gambar (Thumbnail)</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*">
                    <small class="text-muted">Format: JPG/PNG. Maks 2MB.</small>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Isi Artikel</label>
                <textarea name="isi_artikel" class="form-control" rows="10" placeholder="Tulis isi berita di sini..." required></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Terbitkan</button>
                <a href="<?= base_url('dashboard/artikel'); ?>" class="btn btn-secondary">Batal</a>
            </div>

        </form>
    </div>
</div>
<?= $this->endSection(); ?>