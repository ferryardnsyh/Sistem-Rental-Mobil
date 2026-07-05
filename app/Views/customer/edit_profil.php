<?= $this->extend('customer/layouts/template') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card shadow border-0 rounded-4">

            <div class="card-header bg-primary text-white">

                <h4 class="mb-0">
                    <i class="bi bi-pencil-square"></i>
                    Edit Profil
                </h4>

            </div>

            <div class="card-body p-4">

                <form action="<?= base_url('customer/profil/update') ?>"
                      method="post"
                      enctype="multipart/form-data">

                    <?= csrf_field() ?>

                    <div class="text-center mb-4">

                        <img src="<?= !empty($user['foto'])
                            ? base_url('uploads/profil/'.$user['foto'])
                            : base_url('images/default-user.png') ?>"
                            class="rounded-circle shadow"
                            width="150"
                            height="150"
                            style="object-fit:cover;">

                        <div class="mt-3">

                            <label class="form-label fw-semibold">
                                Foto Profil
                            </label>

                            <input type="file"
                                   name="foto"
                                   class="form-control"
                                   accept="image/*">

                            <small class="text-muted">
                                Kosongkan jika tidak ingin mengganti foto.
                            </small>

                        </div>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Nama Lengkap
                        </label>

                        <input type="text"
                               class="form-control"
                               name="nama"
                               value="<?= esc($user['nama']) ?>"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Username
                        </label>

                        <input type="text"
                               class="form-control"
                               name="username"
                               value="<?= esc($user['username']) ?>"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Email
                        </label>

                        <input type="email"
                               class="form-control"
                               name="email"
                               value="<?= esc($user['email']) ?>"
                               required>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            No. Telepon
                        </label>

                        <input type="text"
                               class="form-control"
                               name="no_telp"
                               value="<?= esc($user['no_telp']) ?>"
                               required>

                    </div>

                    <div class="d-flex justify-content-end">

                        <a href="<?= base_url('customer/profil') ?>"
                           class="btn btn-secondary me-2">

                            Kembali

                        </a>

                        <button type="submit"
                                class="btn btn-primary">

                            <i class="bi bi-check-circle"></i>

                            Simpan Perubahan

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>