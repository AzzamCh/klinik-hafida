<?= $this->extend('dashboard/layout'); ?>

<?= $this->section('content'); ?>

<div class="mb-4">
    <h2 class="fw-bold text-dark">Dashboard Overview</h2>
    <p class="text-muted">Selamat datang kembali, <strong><?= $user_nama; ?></strong>!</p>
</div>

<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm h-100 py-2 border-start border-4 border-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dokter</div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $total_dokter; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-md fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm h-100 py-2 border-start border-4 border-success">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Layanan Poli</div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $total_poli; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hospital fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow-sm h-100 py-2 border-start border-4 border-warning">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Berita Terbit</div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $total_artikel; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3">
                <h6 class="m-0 font-weight-bold text-dark">Statistik Artikel Tahun Ini</h6>
            </div>
            <div class="card-body">
                <canvas id="chartArtikel" style="height: 300px;"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3">
                <h6 class="m-0 font-weight-bold text-dark">Dokter per Spesialisasi</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="chartDokter"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // --- 1. KONFIGURASI CHART ARTIKEL (Line Chart) ---
    const ctxArtikel = document.getElementById('chartArtikel').getContext('2d');
    new Chart(ctxArtikel, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Jumlah Artikel',
                data: <?= json_encode($grafik_artikel_total); ?>,
                borderColor: '#0f9b0f',
                backgroundColor: 'rgba(15, 155, 15, 0.1)',
                borderWidth: 2,
                tension: 0.4, // Garis melengkung
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    // --- 2. KONFIGURASI CHART DOKTER (Doughnut Chart) ---
    const ctxDokter = document.getElementById('chartDokter').getContext('2d');
    new Chart(ctxDokter, {
        type: 'doughnut',
        data: {
            labels: <?= json_encode($grafik_dokter_label); ?>,
            datasets: [{
                data: <?= json_encode($grafik_dokter_total); ?>,
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'],
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });
</script>

<?= $this->endSection(); ?>