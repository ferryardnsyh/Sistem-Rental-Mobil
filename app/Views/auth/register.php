<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#f4f6f9;
            font-family:'Segoe UI',sans-serif;
        }

        .register-card{
            width:100%;
            max-width:520px;
        }

        .card{
            border:none;
            border-radius:18px;
            overflow:hidden;
        }

        .card-header{
            background:#0d6efd;
            color:#fff;
            padding:20px;
        }

        .card-header h3{
            margin:0;
            font-weight:700;
        }

        .card-body{
            padding:30px;
        }

        .form-control{
            height:48px;
            border-radius:10px;
        }

        .btn-success{
            height:48px;
            border-radius:10px;
            font-weight:600;
        }

        hr{
            margin:25px 0 18px;
        }

        a{
            text-decoration:none;
            font-weight:600;
        }

    </style>

</head>

<body>

<div class="register-card">

    <div class="card shadow-lg">

        <div class="card-header text-center">

            <h3>Registrasi</h3>

        </div>

        <div class="card-body">

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

            <form action="<?= base_url('register') ?>" method="POST">

                <?= csrf_field(); ?>

                <div class="mb-3">

                    <label class="form-label">

                        Nama Lengkap

                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        placeholder="Masukkan nama lengkap"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Username

                    </label>

                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan username"
                        required>

                </div>

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

                        No. Telepon

                    </label>

                    <input
                        type="text"
                        name="no_telp"
                        class="form-control"
                        placeholder="Masukkan nomor telepon"
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

                <div class="mb-4">

                    <label class="form-label">

                        Konfirmasi Password

                    </label>

                    <input
                        type="password"
                        name="konfirmasi_password"
                        class="form-control"
                        placeholder="Masukkan ulang password"
                        required>

                </div>

                <button type="submit" class="btn btn-success w-100">

                    Registrasi

                </button>

            </form>

            <hr>

            <p class="text-center mb-0">

                Sudah punya akun?

                <a href="<?= base_url('login') ?>">

                    Login di sini

                </a>

            </p>

        </div>

    </div>

</div>

</body>

</html>