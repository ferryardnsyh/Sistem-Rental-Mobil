<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="row justify-content-center w-100">

        <div class="col-md-6 col-lg-4">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">

                    <h3 class="mb-0">

                        Login

                    </h3>

                </div>

                <div class="card-body p-4">

                    <?php if(session()->getFlashdata('error')) : ?>

                        <div class="alert alert-danger">

                            <?= session()->getFlashdata('error'); ?>

                        </div>

                    <?php endif; ?>

                    <?php if(session()->getFlashdata('success')) : ?>

                        <div class="alert alert-success">

                            <?= session()->getFlashdata('success'); ?>

                        </div>

                    <?php endif; ?>

                    <form action="<?= base_url('login') ?>" method="POST">

                        <?= csrf_field(); ?>

                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Masukkan email"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password"
                                required>

                        </div>

                        <button type="submit" class="btn btn-primary w-100">

                            Login

                        </button>

                    </form>

                    <hr>

                    <p class="text-center mb-0">

                        Belum punya akun?

                        <a href="<?= base_url('register') ?>"
                           class="text-decoration-none fw-semibold">

                            Daftar di sini

                        </a>

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>