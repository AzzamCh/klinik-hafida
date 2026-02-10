<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<h2 class="mb-4">Data Artikel / Berita</h2>

<a href="<?= base_url('dashboard/artikel/create'); ?>" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tulis Berita Baru
</a>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($artikel as $a): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td>
                        <?php if($a['gambar']): ?>
                            <img src="<?= base_url('assets/img/blog/' . $a['gambar']); ?>" width="60" class="rounded">
                        <?php else: ?>
                            <span class="text-muted small">No Image</span>
                        <?php endif; ?>
                    </td>
                    <td><?= $a['judul']; ?></td>
                    <td><?= date('d M Y', strtotime($a['tanggal'])); ?></td>
                    <td>
                        <a href="<?= base_url('dashboard/artikel/edit/'.$a['id_artikel']); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('dashboard/artikel/delete/'.$a['id_artikel']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus artikel ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>