<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <h2 class="fw-bold text-center mb-5">
        Daftar Anggota
    </h2>

    <div class="row justify-content-center">

        <!-- Anggota 1 -->
        <div class="col-lg-3 col-md-6 mb-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <img src="<?= base_url('images/profil/1.jpg') ?>"
                         class="rounded-circle shadow mb-3"
                         width="120"
                         height="120"
                         style="object-fit:cover;"
                         onerror="this.src='https://placehold.co/120x120';">

                    <h5 class="fw-bold">
                        Ferry Ardiansyah
                    </h5>

                    <p class="text-muted nim">
                        2350081001
                    </p>

                    <span class="badge bg-primary px-3 py-2">
                        DSE-A
                    </span>

                </div>

            </div>

        </div>

        <!-- Anggota 2 -->
        <div class="col-lg-3 col-md-6 mb-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <img src="<?= base_url('images/profil/2.jpg') ?>"
                         class="rounded-circle shadow mb-3"
                         width="120"
                         height="120"
                         style="object-fit:cover;"
                         onerror="this.src='https://placehold.co/120x120';">

                    <h5 class="fw-bold">
                        Nur Yasani Qalam Nabilah
                    </h5>

                    <p class="text-muted nim">
                        2350081013
                    </p>

                    <span class="badge bg-primary px-3 py-2">
                        DSE-A
                    </span>

                </div>

            </div>

        </div>

        <!-- Anggota 3 -->
        <div class="col-lg-3 col-md-6 mb-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <img src="<?= base_url('images/profil/3.jpg') ?>"
                         class="rounded-circle shadow mb-3"
                         width="120"
                         height="120"
                         style="object-fit:cover;"
                         onerror="this.src='https://placehold.co/120x120';">

                    <h5 class="fw-bold">
                        Aditya Rivarwa Prasetia
                    </h5>

                    <p class="text-muted nim">
                        2350081018
                    </p>

                    <span class="badge bg-primary px-3 py-2">
                        DSE-A
                    </span>

                </div>

            </div>

        </div>

        <!-- Anggota 4 -->
        <div class="col-lg-3 col-md-6 mb-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <img src="<?= base_url('images/profil/4.jpg') ?>"
                         class="rounded-circle shadow mb-3"
                         width="120"
                         height="120"
                         style="object-fit:cover;"
                         onerror="this.src='https://placehold.co/120x120';">

                    <h5 class="fw-bold">
                        Ihsan Nur Majid
                    </h5>

                    <p class="text-muted nim">
                        2350081026
                    </p>

                    <span class="badge bg-primary px-3 py-2">
                        DSE-A
                    </span>

                </div>

            </div>

        </div>

    </div>

</div>

<style>

.card{
    transition:.3s;
    border-radius:18px;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(0,0,0,.15)!important;
}

.rounded-circle{
    border:4px solid #f1f3f5;
}

.card h5{
    font-size:18px;
    font-weight:700;
    margin-bottom:2px;
    line-height:1.3;
}

.card .nim{
    font-size:15px;
    color:#6c757d;
    margin-bottom:12px;
    line-height:1.2;
}

.badge{
    font-size:14px;
    border-radius:20px;
    padding:8px 18px;
}

</style>

<?= $this->endSection() ?>