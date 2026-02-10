<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm mb-4 card-stat">
            <div class="card-body">
                <h5 class="text-muted">Total Dokter</h5>
                <h1 class="fw-bold"><?= $count_dokter ?? 0; ?></h1>
                <a href="<?= base_url('dashboard/dokter'); ?>" class="btn btn-sm btn-outline-success mt-2">Lihat Detail</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm mb-4 card-stat">
            <div class="card-body">
                <h5 class="text-muted">Total Poli</h5>
                <h1 class="fw-bold"><?= $count_poli ?? 0; ?></h1>
                <a href="<?= base_url('dashboard/poli'); ?>" class="btn btn-sm btn-outline-success mt-2">Lihat Detail</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card shadow-sm mb-4 card-stat">
            <div class="card-body">
                <h5 class="text-muted">Menu Admin</h5>
                <p>Kelola pengguna sistem</p>
                <a href="<?= base_url('dashboard/user'); ?>" class="btn btn-sm btn-outline-success mt-2">Kelola Admin</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>