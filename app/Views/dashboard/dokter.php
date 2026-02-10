<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<h2 class="mb-4">Data Dokter</h2>

<a href="<?= base_url('dashboard/dokter/create'); ?>" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Dokter Baru
</a>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Dokter</th>
                    <th>Spesialisasi</th>
                    <th>Jadwal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($dokter as $d): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td>
                        <?php if(!empty($d['foto'])): ?>
                            <img src="<?= base_url('assets/img/doctors/' . $d['foto']); ?>" width="50" height="50" class="rounded-circle object-fit-cover border">
                        <?php else: ?>
                            <span class="badge bg-secondary">No img</span>
                        <?php endif; ?>
                    </td>
                    <td class="fw-bold"><?= $d['nama_dokter']; ?></td>
                    <td><?= $d['spesialisasi']; ?></td>
                    <td><small class="text-muted"><?= $d['jadwal']; ?></small></td>
                    <td>
                        <a href="<?= base_url('dashboard/dokter/edit/' . $d['id_dokter']); ?>" class="btn btn-sm btn-warning" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= base_url('dashboard/dokter/delete/' . $d['id_dokter']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus dokter ini?');" title="Hapus">
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