<?= $this->extend('customer/layouts/template') ?>

<?= $this->section('content') ?>

<!-- Tentang Sistem -->
<div class="card border-0 shadow-sm rounded-4 mb-5">

    <div class="card-body p-5">

        <h2 class="fw-bold mb-3">
            Tentang Sistem
        </h2>

        <p class="text-muted mb-0">
            Sistem Rental Mobil merupakan aplikasi berbasis web yang
            dikembangkan untuk mempermudah proses penyewaan kendaraan
            secara online. Melalui aplikasi ini, pengguna dapat melihat
            daftar mobil, melakukan booking, serta memantau status
            penyewaan dengan lebih mudah, cepat, dan efisien.
        </p>

    </div>

</div>

<!-- Daftar Anggota -->
<h2 class="fw-bold text-center mb-5">
    Daftar Anggota
</h2>

<div class="row justify-content-center">

    <!-- Anggota 1 -->
    <div class="col-lg-3 col-md-6 mb-4">

        <div class="card border-0 shadow-sm rounded-4 h-100">

            <div class="card-body text-center p-3">

                <img src="<?= base_url('images/profil/ferry.jpg') ?>"
                     class="rounded-circle shadow mb-3"
                     width="120"
                     height="120"
                     style="object-fit:cover;"
                     onerror="this.src='https://placehold.co/120x120';">

                <table class="table table-borderless table-sm text-start mb-0">

                    <tr>
                        <th width="35%">Nama</th>
                        <td>: Ferry Ardiansyah</td>
                    </tr>

                    <tr>
                        <th>NIM</th>
                        <td>: 2350081001</td>
                    </tr>

                    <tr>
                        <th>Kelas</th>
                        <td>: DSE-A</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

    <!-- Anggota 2 -->
    <div class="col-lg-3 col-md-6 mb-4">

        <div class="card border-0 shadow-sm rounded-4 h-100">

            <div class="card-body text-center p-3">

                <img src="<?= base_url('images/profil/anggota2.jpg') ?>"
                     class="rounded-circle shadow mb-3"
                     width="120"
                     height="120"
                     style="object-fit:cover;"
                     onerror="this.src='https://placehold.co/120x120';">

                <table class="table table-borderless table-sm text-start mb-0">

                    <tr>
                        <th width="35%">Nama</th>
                        <td>: Nur Yasani Qalam Nabilah</td>
                    </tr>

                    <tr>
                        <th>NIM</th>
                        <td>: 2350081013</td>
                    </tr>

                    <tr>
                        <th>Kelas</th>
                        <td>: DSE-A</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

    <!-- Anggota 3 -->
    <div class="col-lg-3 col-md-6 mb-4">

        <div class="card border-0 shadow-sm rounded-4 h-100">

            <div class="card-body text-center p-3">

                <img src="<?= base_url('images/profil/anggota3.jpg') ?>"
                     class="rounded-circle shadow mb-3"
                     width="120"
                     height="120"
                     style="object-fit:cover;"
                     onerror="this.src='https://placehold.co/120x120';">

                <table class="table table-borderless table-sm text-start mb-0">

                    <tr>
                        <th width="35%">Nama</th>
                        <td>: Aditya Rivarwa Prasetia</td>
                    </tr>

                    <tr>
                        <th>NIM</th>
                        <td>: 2350081018</td>
                    </tr>

                    <tr>
                        <th>Kelas</th>
                        <td>: DSE-A</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

    <!-- Anggota 4 -->
    <div class="col-lg-3 col-md-6 mb-4">

        <div class="card border-0 shadow-sm rounded-4 h-100">

            <div class="card-body text-center p-3">

                <img src="<?= base_url('images/profil/anggota4.jpg') ?>"
                     class="rounded-circle shadow mb-3"
                     width="120"
                     height="120"
                     style="object-fit:cover;"
                     onerror="this.src='https://placehold.co/120x120';">

                <table class="table table-borderless table-sm text-start mb-0">

                    <tr>
                        <th width="35%">Nama</th>
                        <td>: Ihsan Nur Majid</td>
                    </tr>

                    <tr>
                        <th>NIM</th>
                        <td>: 2350081026</td>
                    </tr>

                    <tr>
                        <th>Kelas</th>
                        <td>: DSE-A</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>

</div>

<style>
.card{
    transition: .3s;
}

.card:hover{
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,.15)!important;
}

.table th,
.table td{
    font-size:14px;
    vertical-align:middle;
}

.table th{
    color:#555;
}

.rounded-circle{
    border:4px solid #f1f3f5;
}

@media(max-width:992px){
    .col-lg-3{
        margin-bottom:20px;
    }
}
</style>

<?= $this->endSection() ?>