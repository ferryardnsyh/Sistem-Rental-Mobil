<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-warning">

            <h4 class="mb-0">

                Edit User

            </h4>

        </div>

        <div class="card-body">

            <form action="<?= base_url('user/update/'.$user['id']) ?>" method="post">

                <?= csrf_field(); ?>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label>Nama Lengkap</label>

                        <input
                            type="text"
                            name="nama"
                            class="form-control"
                            value="<?= $user['nama']; ?>"
                            required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label>Username</label>

                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            value="<?= $user['username']; ?>"
                            required>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label>Email</label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="<?= $user['email']; ?>"
                            required>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">No. Telepon</label>
                        <input type="text"
                            name="no_telp"
                            class="form-control"
                            value="<?= $user['no_telp']; ?>"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">

                        <label>Password Baru</label>

                        <input
                            type="password"
                            name="password"
                            class="form-control">

                        <small class="text-muted">

                            Kosongkan jika password tidak diubah.

                        </small>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label>Role</label>

                        <select
                            name="role"
                            class="form-select">

                            <option value="admin"
                                <?= $user['role']=="admin" ? "selected" : "" ?>>
                                Admin
                            </option>

                            <option value="customer"
                                <?= $user['role']=="customer" ? "selected" : "" ?>>
                                Customer
                            </option>

                        </select>

                    </div>

                </div>

                <button class="btn btn-warning">

                    <i class="bi bi-pencil-square"></i>

                    Update

                </button>

                <a href="<?= base_url('user') ?>"
                   class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

<?= $this->endSection() ?>