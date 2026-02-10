<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<h2 class="mb-4">Kelola Slider (Hero Image)</h2>

<a href="<?= base_url('dashboard/slider_create'); ?>" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Slider Baru
</a>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Gambar Preview</th>
                    <th>Judul & Deskripsi</th>
                    <th>Link Tujuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($slider as $s): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td>
                        <img src="<?= base_url('assets/img/' . $s['gambar']); ?>" width="120" class="rounded border p-1">
                    </td>
                    <td>
                        <span class="fw-bold d-block"><?= $s['judul']; ?></span>
                        <small class="text-muted"><?= substr($s['deskripsi'], 0, 50); ?>...</small>
                    </td>
                    <td>
                        <?php if(!empty($s['link'])): ?>
                            <a href="<?= $s['link']; ?>" target="_blank" class="badge bg-info text-decoration-none">Buka Link</a>
                        <?php else: ?>
                            <span class="badge bg-secondary">-</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('dashboard/slider_edit/'.$s['id']); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('dashboard/slider_delete/'.$s['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus slider ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>