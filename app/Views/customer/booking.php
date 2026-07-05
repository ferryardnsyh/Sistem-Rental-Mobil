<?= $this->extend('customer/layouts/template') ?>

<?= $this->section('content') ?>

<div class="row g-4">

    <!-- Detail Mobil -->
    <div class="col-lg-5">

        <div class="card shadow border-0 rounded-4">

            <img src="<?= base_url('uploads/mobil/'.$mobil['gambar']) ?>"
                 class="card-img-top"
                 style="height:320px;object-fit:cover;">

            <div class="card-body">

                <h3 class="fw-bold">

                    <?= esc($mobil['nama_mobil']) ?>

                </h3>

                <p class="text-muted">

                    <?= esc($mobil['merk']) ?>

                </p>

                <hr>

                <div class="mb-2">

                    <i class="bi bi-calendar"></i>

                    Tahun :

                    <strong><?= esc($mobil['tahun']) ?></strong>

                </div>

                <div class="mb-2">

                    <i class="bi bi-gear"></i>

                    <?= esc($mobil['transmisi']) ?>

                </div>

                <div class="mb-3">

                    <span class="badge bg-success rounded-pill">

                        <?= esc($mobil['status']) ?>

                    </span>

                </div>

                <h3 class="text-primary fw-bold">

                    Rp <?= number_format($mobil['harga_sewa'],0,',','.') ?>

                    <small class="text-muted fs-6">

                        / Hari

                    </small>

                </h3>

            </div>

        </div>

    </div>

    <!-- Form Booking -->
    <div class="col-lg-7">

        <div class="card shadow border-0 rounded-4">

            <div class="card-body p-4">

                <h3 class="fw-bold mb-4">

                    Booking Mobil

                </h3>

                <?php if(session()->getFlashdata('error')) : ?>

                    <div class="alert alert-danger">

                        <?= session()->getFlashdata('error') ?>

                    </div>

                <?php endif; ?>

                <form action="<?= base_url('customer/simpanBooking') ?>" method="post">

                    <?= csrf_field() ?>

                    <input type="hidden"
                           name="mobil_id"
                           value="<?= $mobil['id'] ?>">

                    <input type="hidden"
                           id="harga"
                           name="harga_sewa"
                           value="<?= $mobil['harga_sewa'] ?>">

                    <div class="mb-3">

                        <label class="form-label">

                            Tanggal Sewa

                        </label>

                        <input type="date"
                               class="form-control"
                               id="tglSewa"
                               name="tanggal_sewa"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">

                            Tanggal Kembali

                        </label>

                        <input type="date"
                               class="form-control"
                               id="tglKembali"
                               name="tanggal_kembali"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">

                            Lama Sewa

                        </label>

                        <input type="text"
                               id="lama"
                               class="form-control"
                               readonly>

                    </div>

                    <div class="mb-4">

                        <label class="form-label">

                            Total Harga

                        </label>

                        <input type="text"
                               id="total"
                               class="form-control fw-bold"
                               readonly>

                    </div>

                    <button class="btn btn-primary btn-lg rounded-pill w-100">

                        <i class="bi bi-check-circle"></i>

                        Konfirmasi Booking

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

<script>

const tgl1 = document.getElementById('tglSewa');

const tgl2 = document.getElementById('tglKembali');

function hitungTotal(){

    if(tgl1.value && tgl2.value){

        let awal = new Date(tgl1.value);

        let akhir = new Date(tgl2.value);

        let lama = (akhir-awal)/(1000*60*60*24);

        if(lama > 0){

            document.getElementById('lama').value = lama + " Hari";

            let harga = parseInt(document.getElementById('harga').value);

            let total = lama * harga;

            document.getElementById('total').value =

            "Rp " + total.toLocaleString('id-ID');

        }else{

            document.getElementById('lama').value = "";

            document.getElementById('total').value = "";

        }

    }

}

tgl1.addEventListener('change', hitungTotal);

tgl2.addEventListener('change', hitungTotal);

</script>

<?= $this->endSection() ?>