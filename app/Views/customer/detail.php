<?= $this->extend('customer/layouts/template') ?>

<?= $this->section('content') ?>

<div class="row">

    <div class="col-lg-7">

        <div class="card border-0 shadow rounded-4">

            <img src="<?= base_url('uploads/mobil/'.$mobil['gambar']) ?>"
                 class="img-fluid rounded-4">

        </div>

    </div>

    <div class="col-lg-5">

        <div class="card border-0 shadow rounded-4">

            <div class="card-body p-4">

                <h2 class="fw-bold">

                    <?= esc($mobil['nama_mobil']) ?>

                </h2>

                <p class="text-muted">

                    <?= esc($mobil['merk']) ?>

                </p>

                <hr>

                <div class="mb-3">

                    <i class="bi bi-calendar"></i>

                    Tahun

                    <strong class="float-end">

                        <?= esc($mobil['tahun']) ?>

                    </strong>

                </div>

                <div class="mb-3">

                    <i class="bi bi-gear"></i>

                    Transmisi

                    <strong class="float-end">

                        <?= esc($mobil['transmisi']) ?>

                    </strong>

                </div>

                <div class="mb-3">

                    <i class="bi bi-credit-card"></i>

                    Plat Nomor

                    <strong class="float-end">

                        <?= esc($mobil['plat_nomor']) ?>

                    </strong>

                </div>

                <div class="mb-4">

                    <span class="badge bg-success rounded-pill">

                        <?= esc($mobil['status']) ?>

                    </span>

                </div>

                <h2 class="text-primary fw-bold">

                    Rp <?= number_format($mobil['harga_sewa'],0,',','.') ?>

                    <small class="fs-5 text-muted">

                        / Hari

                    </small>

                </h2>

                <hr>

                <a href="<?= base_url('customer/booking/'.$mobil['id']) ?>"
                class="btn btn-primary btn-lg w-100 rounded-pill">

                <i class="bi bi-calendar-check"></i>

                Booking Sekarang

                </a>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>