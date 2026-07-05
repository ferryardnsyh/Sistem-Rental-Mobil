<?= $this->extend('customer/layouts/template') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card border-0 shadow rounded-4">

            <div class="card-body p-5">

                <div class="text-center mb-4">

                    <img src="<?= base_url('images/profile-default.png') ?>"
                         class="rounded-circle shadow"
                         width="140"
                         height="140"
                         style="object-fit:cover;"
                         onerror="this.src='https://placehold.co/140x140';">

                    <h3 class="fw-bold mt-3">
                        <?= esc($user['nama']) ?>
                    </h3>

                    <span class="badge bg-primary">
                        <?= ucfirst($user['role']) ?>
                    </span>

                </div>

                <hr class="my-4">

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Nama Lengkap
                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?= esc($user['nama']) ?>"
                               readonly>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Username
                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?= esc($user['username']) ?>"
                               readonly>

                    </div>

                    <div class="col-md-12 mb-3">

                        <label class="form-label fw-semibold">
                            Email
                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?= esc($user['email']) ?>"
                               readonly>

                    </div>

                    <div class="col-md-12 mb-4">

                        <label class="form-label fw-semibold">
                            Role
                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?= ucfirst($user['role']) ?>"
                               readonly>

                    </div>

                </div>

                <div class="d-flex justify-content-center gap-3">

                    <a href="<?= base_url('customer/profil/edit') ?>"
                    class="btn btn-primary rounded-pill px-4">
                        <i class="bi bi-pencil-square"></i>
                        Edit Profil
                    </a>

                    <a href="<?= base_url('customer/profil/password') ?>"
                    class="btn btn-outline-primary rounded-pill px-4">
                        <i class="bi bi-key-fill"></i>
                        Ubah Password
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>