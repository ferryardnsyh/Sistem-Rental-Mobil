<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Judul -->

    <div class="text-center mb-5">

        <h2 class="fw-bold">

            About Us

        </h2>

        <p class="text-muted">

            Sistem Rental Mobil Berbasis Web menggunakan CodeIgniter 4

        </p>

    </div>

    <!-- Informasi Aplikasi -->

    <div class="card shadow-sm border-0 mb-5">

        <div class="card-body">

            <h4 class="mb-3">

                Tentang Aplikasi

            </h4>

            <p align="justify">

                Sistem Rental Mobil merupakan aplikasi berbasis web yang
                digunakan untuk mempermudah proses penyewaan mobil secara
                online. Aplikasi ini memiliki dua jenis pengguna yaitu
                <strong>Admin</strong> dan
                <strong>Customer</strong>.

            </p>

            <p align="justify">

                Customer dapat melihat daftar mobil, melakukan booking,
                dan memantau status penyewaan.

                Sedangkan Admin dapat mengelola data mobil, data user,
                data booking, serta melakukan persetujuan penyewaan.

            </p>

        </div>

    </div>

    <!-- Tim -->

    <h3 class="text-center mb-4">

        Tim Pengembang

    </h3>

    <div class="row g-4">

        <!-- Anggota 1 -->

        <div class="col-lg-4 col-md-6">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body text-center">

                    <img src="<?= base_url('assets/img/default.png') ?>"
                         class="rounded-circle mb-3"
                         width="140">

                    <h5>

                        Ferry Ardiansyah

                    </h5>

                    <span class="badge bg-primary">

                        Full Stack Developer

                    </span>

                    <hr>

                    <p>

                        Bertanggung jawab terhadap
                        analisis sistem,
                        perancangan database,
                        frontend,
                        backend,
                        serta implementasi CodeIgniter 4.

                    </p>

                </div>

            </div>

        </div>

        <!-- Anggota 2 -->

        <div class="col-lg-4 col-md-6">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body text-center">

                    <img src="<?= base_url('assets/img/default.png') ?>"
                         class="rounded-circle mb-3"
                         width="140">

                    <h5>

                        Nama Anggota 2

                    </h5>

                    <span class="badge bg-success">

                        UI / UX Designer

                    </span>

                    <hr>

                    <p>

                        Mendesain tampilan aplikasi,
                        membuat wireframe,
                        prototype,
                        dan memastikan tampilan
                        responsif pada desktop maupun mobile.

                    </p>

                </div>

            </div>

        </div>

        <!-- Anggota 3 -->

        <div class="col-lg-4 col-md-6">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body text-center">

                    <img src="<?= base_url('assets/img/default.png') ?>"
                         class="rounded-circle mb-3"
                         width="140">

                    <h5>

                        Nama Anggota 3

                    </h5>

                    <span class="badge bg-warning text-dark">

                        System Analyst

                    </span>

                    <hr>

                    <p>

                        Melakukan analisis kebutuhan,
                        dokumentasi,
                        pengujian sistem,
                        dan penyusunan laporan proyek.

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>