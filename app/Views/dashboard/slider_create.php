<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold text-success"><i class="fas fa-image me-2"></i> Tambah Slider Baru</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('dashboard/slider_store'); ?>" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label class="form-label fw-bold">Judul Slider (Headline)</label>
                <input type="text" name="judul" class="form-control" placeholder="Contoh: Selamat Datang di Klinik Hafida" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi Singkat</label>
                <textarea name="deskripsi" class="form-control" rows="3" placeholder="Contoh: Melayani dengan sepenuh hati..." required></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Link Tombol (Opsional)</label>
                    <input type="text" name="link" class="form-control" placeholder="Contoh: #jadwal atau https://wa.me/...">
                    <small class="text-muted">Biarkan kosong jika tidak ada tombol.</small>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Upload Gambar (Landscape)</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*" required>
                    <small class="text-muted">Disarankan ukuran 1920x800 pixel (Lebar).</small>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Terbitkan Slider</button>
                <a href="<?= base_url('dashboard/slider'); ?>" class="btn btn-secondary">Batal</a>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection(); ?>