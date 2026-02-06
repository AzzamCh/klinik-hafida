<div class="bg-dark text-white p-3 vh-100" style="width: 250px; min-height: 100vh;">
    <h4 class="mb-4 text-center fw-bold">Admin Klinik</h4>
    <hr>
    <div class="d-flex flex-column gap-2">
        <a href="<?= base_url('dashboard'); ?>" class="text-white text-decoration-none p-2 rounded hover-bg-secondary">
            <i class="fas fa-home me-2"></i> Dashboard
        </a>
        <a href="<?= base_url('dashboard/dokter'); ?>" class="text-white text-decoration-none p-2 rounded hover-bg-secondary">
            <i class="fas fa-user-md me-2"></i> Kelola Dokter
        </a>
        <a href="<?= base_url('dashboard/poli'); ?>" class="text-white text-decoration-none p-2 rounded hover-bg-secondary">
            <i class="fas fa-hospital me-2"></i> Kelola Poli
        </a>
        <a href="<?= base_url('dashboard/artikel'); ?>" class="text-white text-decoration-none p-2 rounded hover-bg-secondary">
            <i class="fas fa-newspaper me-2"></i> Kelola Artikel
        </a>
        <a href="<?= base_url('dashboard/slider'); ?>" class="text-white text-decoration-none p-2 rounded bg-primary">
            <i class="fas fa-images me-2"></i> Kelola Slider
        </a>
    </div>
    <hr class="mt-auto">
    <a href="<?= base_url('logout'); ?>" class="btn btn-danger w-100">
        <i class="fas fa-sign-out-alt me-2"></i> Logout
    </a>
</div>