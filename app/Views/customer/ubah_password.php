<?= $this->extend('customer/layouts/template') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center">

<div class="col-lg-6">

<div class="card border-0 shadow rounded-4">

<div class="card-header bg-primary text-white">

<h4 class="mb-0">

<i class="bi bi-key-fill"></i>

Ubah Password

</h4>

</div>

<div class="card-body p-4">

<?php if(session()->getFlashdata('error')): ?>

<div class="alert alert-danger">

<?= session()->getFlashdata('error') ?>

</div>

<?php endif; ?>

<form action="<?= base_url('customer/profil/password/update') ?>"
      method="post">

<div class="mb-3">

<label class="form-label">

Password Lama

</label>

<input type="password"
       class="form-control"
       name="password_lama"
       required>

</div>

<div class="mb-3">

<label class="form-label">

Password Baru

</label>

<input type="password"
       class="form-control"
       name="password_baru"
       required>

</div>

<div class="mb-4">

<label class="form-label">

Konfirmasi Password

</label>

<input type="password"
       class="form-control"
       name="konfirmasi_password"
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

Simpan Password

</button>

</div>

</form>

</div>

</div>

</div>

</div>

<?= $this->endSection() ?>