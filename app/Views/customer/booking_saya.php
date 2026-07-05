<?= $this->extend('customer/layouts/template') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">

            Booking Saya

        </h2>

        <p class="text-muted">

            Daftar seluruh booking yang pernah Anda lakukan.

        </p>

    </div>

</div>

<?php if(session()->getFlashdata('success')) : ?>

<div class="alert alert-success">

    <?= session()->getFlashdata('success') ?>

</div>

<?php endif; ?>

<?php if(empty($booking)) : ?>

<div class="card border-0 shadow rounded-4">

    <div class="card-body text-center py-5">

        <i class="bi bi-car-front"
           style="font-size:80px;color:#0d6efd"></i>

        <h4 class="mt-3">

            Belum Ada Booking

        </h4>

        <p class="text-muted">

            Silakan pilih mobil terlebih dahulu.

        </p>

        <a href="<?= base_url('customer/mobil') ?>"
           class="btn btn-primary rounded-pill px-4">

            Lihat Mobil

        </a>

    </div>

</div>

<?php else: ?>

<div class="row">

<?php foreach($booking as $b): ?>

<div class="col-lg-6 mb-4">

<div class="card shadow border-0 rounded-4 h-100">

<img src="<?= base_url('uploads/mobil/'.$b['gambar']) ?>"
     class="card-img-top"
     style="height:220px;object-fit:cover;">

<div class="card-body">

<h4 class="fw-bold">

<?= esc($b['nama_mobil']) ?>

</h4>

<hr>

<div class="row mb-3">

<div class="col-6">

<small class="text-muted">

Tanggal Sewa

</small>

<div>

<?= $b['tanggal_sewa'] ?>

</div>

</div>

<div class="col-6">

<small class="text-muted">

Tanggal Kembali

</small>

<div>

<?= $b['tanggal_kembali'] ?>

</div>

</div>

</div>

<div class="row mb-3">

    <div class="col-6">

        <small class="text-muted">
            Lama Sewa
        </small>

        <div>
            <?= $b['lama_sewa'] ?> Hari
        </div>

    </div>

    <div class="col-6">

        <small class="text-muted">
            Total
        </small>

        <div class="fw-bold text-primary">
            Rp <?= number_format($b['total_harga'],0,',','.') ?>
        </div>

    </div>

</div>

<div class="mb-3">

    <small class="text-muted">
        Metode Pembayaran
    </small>

    <div class="fw-semibold">

        <?php
        switch($b['metode_pembayaran']){

            case 'bca':
                echo '<span class="badge bg-primary">Transfer BCA</span>';
                break;

            case 'bni':
                echo '<span class="badge bg-warning text-dark">Transfer BNI</span>';
                break;

            case 'bri':
                echo '<span class="badge bg-danger">Transfer BRI</span>';
                break;

            case 'mandiri':
                echo '<span class="badge bg-success">Transfer Mandiri</span>';
                break;

            case 'gopay':
                echo '<span class="badge bg-info text-dark">GoPay</span>';
                break;

            case 'ovo':
                echo '<span class="badge bg-secondary">OVO</span>';
                break;

            case 'dana':
                echo '<span class="badge bg-primary">DANA</span>';
                break;

            case 'qris':
                echo '<span class="badge bg-dark">QRIS</span>';
                break;

            default:
                echo '<span class="badge bg-light text-dark">'
                     . esc($b['metode_pembayaran']) .
                     '</span>';
        }
        ?>

    </div>

</div>

<?php

$status='secondary';

if($b['status']=='Menunggu'){

$status='warning';

}elseif($b['status']=='Disetujui'){

$status='success';

}elseif($b['status']=='Selesai'){

$status='primary';

}elseif($b['status']=='Dibatalkan'){

$status='danger';

}

?>

<span class="badge bg-<?= $status ?> rounded-pill">

<?= $b['status'] ?>

</span>

</div>

</div>

</div>

<?php endforeach; ?>

</div>

<?php endif; ?>

<?= $this->endSection() ?>