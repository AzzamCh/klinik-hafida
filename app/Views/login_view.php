<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Klinik Hafida</title>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style>
        body { background-color: #f0fdf4; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card-login { width: 100%; max-width: 400px; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); background: white; }
        .btn-green { background-color: #0f9b0f; color: white; }
        .btn-green:hover { background-color: #0c7a0c; color: white; }
    </style>
</head>
<body>

    <div class="card-login">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-success">Admin Login</h3>
            <p class="text-muted">Silakan masuk untuk mengelola data</p>
        </div>

        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>

        <form action="<?= base_url('/login/auth'); ?>" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-green">Masuk Dashboard</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <a href="<?= base_url('/'); ?>" class="text-decoration-none text-muted small">Kembali ke Website Utama</a>
        </div>
    </div>

</body>
</html>