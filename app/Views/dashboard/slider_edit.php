<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold text-warning"><i class="fas fa-edit me-2"></i> Edit Slider</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('dashboard/slider_update/' . $slider['id']); ?>" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label class="form-label fw-bold">Judul Slider</label>
                <input type="text" name="judul" class="form-control" value="<?= $slider['judul']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3" required><?= $slider['deskripsi']; ?></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Link Tombol</label>
                    <input type="text" name="link" class="form-control" value="<?= $slider['link']; ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Ganti Gambar (Opsional)</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*">
                    <input type="hidden" name="gambar_lama" value="<?= $slider['gambar']; ?>">

                    <?php if(!empty($slider['gambar'])): ?>
                        <div class="mt-2">
                            <small>Gambar Saat Ini:</small><br>
                            <img src="<?= base_url('assets/img/' . $slider['gambar']); ?>" width="150" class="rounded border p-1">
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning"><i class="fas fa-save me-1"></i> Update Data</button>
                <a href="<?= base_url('dashboard/slider'); ?>" class="btn btn-secondary">Batal</a>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection(); ?>