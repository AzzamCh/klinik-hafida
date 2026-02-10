<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<h2 class="mb-4">Data Poli / Layanan</h2>

<a href="<?= base_url('dashboard/poli/create'); ?>" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Poli Baru
</a>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th class="text-center">Icon</th>
                    <th>Nama Poli</th>
                    <th>Deskripsi Singkat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($poli as $p): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td class="text-center text-success">
                        <i class="<?= $p['icon']; ?> fa-2x"></i>
                    </td>
                    <td class="fw-bold"><?= $p['nama_poli']; ?></td>
                    <td><?= substr($p['deskripsi'], 0, 60); ?>...</td>
                    <td>
                        <a href="<?= base_url('dashboard/poli/edit/'.$p['id_poli']); ?>" class="btn btn-sm btn-warning" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= base_url('dashboard/poli/delete/'.$p['id_poli']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus poli ini?')" title="Hapus">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>