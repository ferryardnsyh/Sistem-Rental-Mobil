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
<h2 class="fw-bold text-center mb-4">
    Daftar Anggota
</h2>

<div class="row">

    <!-- Anggota 1 -->
    <div class="col-lg-4 col-md-6 mb-4">

        <div class="card border-0 shadow rounded-4 h-100">

            <div class="card-body text-center p-4">

                <img src="<?= base_url('images/profil/ferry.jpg') ?>"
                     class="rounded-circle shadow mb-4"
                     width="150"
                     height="150"
                     style="object-fit:cover;"
                     onerror="this.src='https://placehold.co/150x150';">

                <table class="table table-borderless text-start mb-0">

                    <tr>
                        <th width="30%">Nama</th>
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
    <div class="col-lg-4 col-md-6 mb-4">

        <div class="card border-0 shadow rounded-4 h-100">

            <div class="card-body text-center p-4">

                <img src="<?= base_url('images/profil/anggota2.jpg') ?>"
                     class="rounded-circle shadow mb-4"
                     width="150"
                     height="150"
                     style="object-fit:cover;"
                     onerror="this.src='https://placehold.co/150x150';">

                <table class="table table-borderless text-start mb-0">

                    <tr>
                        <th width="30%">Nama</th>
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
    <div class="col-lg-4 col-md-6 mb-4">

        <div class="card border-0 shadow rounded-4 h-100">

            <div class="card-body text-center p-4">

                <img src="<?= base_url('images/profil/anggota3.jpg') ?>"
                     class="rounded-circle shadow mb-4"
                     width="150"
                     height="150"
                     style="object-fit:cover;"
                     onerror="this.src='https://placehold.co/150x150';">

                <table class="table table-borderless text-start mb-0">

                    <tr>
                        <th width="30%">Nama</th>
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

</div>

<?= $this->endSection() ?>