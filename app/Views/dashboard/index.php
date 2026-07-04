<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<h3 class="mb-4">
    Dashboard
</h3>

<div class="row">

    <!-- Total Mobil -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted mb-2">Total Mobil</h6>
                    <h1 class="fw-bold mb-0">
                        <?= $totalMobil ?>
                    </h1>
                </div>

                <div class="text-primary">
                    <i class="bi bi-car-front-fill" style="font-size:50px;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted mb-2">Booking</h6>
                    <h1 class="fw-bold mb-0">
                        <?= $totalBooking ?>
                    </h1>
                </div>

                <div class="text-success">
                    <i class="bi bi-calendar-check-fill" style="font-size:50px;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Customer -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted mb-2">Customer</h6>
                    <h1 class="fw-bold mb-0">
                        <?= $totalCustomer ?>
                    </h1>
                </div>

                <div class="text-warning">
                    <i class="bi bi-people-fill" style="font-size:50px;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Pendapatan -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card shadow border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted mb-2">Pendapatan</h6>
                    <h3 class="fw-bold text-success mb-0">
                        Rp <?= number_format($pendapatan, 0, ',', '.') ?>
                    </h3>
                </div>

                <div class="text-danger">
                    <i class="bi bi-cash-stack" style="font-size:50px;"></i>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Booking Terbaru -->

<div class="card shadow border-0">

    <div class="card-header bg-white">

        <h5 class="mb-0">

            Booking Terbaru

        </h5>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>

                        <th>No</th>

                        <th>Nama Customer</th>

                        <th>Mobil</th>

                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                    <?php if(!empty($bookingTerbaru)): ?>

                        <?php $no = 1; ?>

                        <?php foreach($bookingTerbaru as $b): ?>

                            <tr>

                                <td><?= $no++ ?></td>

                                <td><?= esc($b['nama']) ?></td>

                                <td><?= esc($b['nama_mobil']) ?></td>

                                <td>

                                    <?php

                                    switch($b['status']){

                                        case 'Menunggu':

                                            echo "<span class='badge bg-warning'>Menunggu</span>";

                                            break;

                                        case 'Disetujui':

                                            echo "<span class='badge bg-success'>Disetujui</span>";

                                            break;

                                        case 'Selesai':

                                            echo "<span class='badge bg-primary'>Selesai</span>";

                                            break;

                                        default:

                                            echo "<span class='badge bg-danger'>Dibatalkan</span>";

                                    }

                                    ?>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="4" class="text-center text-muted">

                                Belum ada data booking.

                            </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection() ?>