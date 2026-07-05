<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">

                Tambah User

            </h4>

        </div>

        <div class="card-body">

            <form action="<?= base_url('user/simpan') ?>" method="post">

                <?= csrf_field(); ?>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Nama Lengkap

                        </label>

                        <input
                            type="text"
                            name="nama"
                            class="form-control"
                            required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Username

                        </label>

                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            required>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Email

                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">No. Telepon</label>
                        <input type="text"
                            name="no_telp"
                            class="form-control"
                            placeholder="Masukkan nomor telepon"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Password

                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            required>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Role

                        </label>

                        <select
                            name="role"
                            class="form-select"
                            required>

                            <option value="">-- Pilih Role --</option>

                            <option value="admin">

                                Admin

                            </option>

                            <option value="customer">

                                Customer

                            </option>

                        </select>

                    </div>

                </div>

                <div class="mt-3">

                    <button class="btn btn-success">

                        <i class="bi bi-save"></i>

                        Simpan

                    </button>

                    <a href="<?= base_url('user') ?>"
                       class="btn btn-secondary">

                        <i class="bi bi-arrow-left"></i>

                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<?= $this->endSection() ?>