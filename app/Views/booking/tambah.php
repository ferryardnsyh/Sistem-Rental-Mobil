<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">
                Booking Mobil
            </h4>

        </div>

        <div class="card-body">

            <form action="<?= base_url('booking/simpan') ?>" method="post">

                <?= csrf_field(); ?>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Pilih Mobil
                        </label>

                        <select
                            class="form-select"
                            name="mobil_id"
                            id="mobil"
                            required>

                            <option value="">-- Pilih Mobil --</option>

                            <?php foreach($mobil as $m): ?>

                                <option
                                    value="<?= $m['id']; ?>"
                                    data-harga="<?= $m['harga_sewa']; ?>">

                                    <?= $m['nama_mobil']; ?>
                                    (Rp <?= number_format($m['harga_sewa'],0,',','.'); ?>/hari)

                                </option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                    <div class="col-md-3 mb-3">

                        <label class="form-label">

                            Tanggal Sewa

                        </label>

                        <input
                            type="date"
                            class="form-control"
                            id="tanggal_sewa"
                            name="tanggal_sewa"
                            required>

                    </div>

                    <div class="col-md-3 mb-3">

                        <label class="form-label">

                            Tanggal Kembali

                        </label>

                        <input
                            type="date"
                            class="form-control"
                            id="tanggal_kembali"
                            name="tanggal_kembali"
                            required>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">

                        <label class="form-label">

                            Harga / Hari

                        </label>

                        <input
                            type="text"
                            id="harga"
                            class="form-control"
                            readonly>

                    </div>

                    <div class="col-md-4 mb-3">

                        <label class="form-label">

                            Lama Sewa

                        </label>

                        <input
                            type="text"
                            id="lama"
                            class="form-control"
                            readonly>

                    </div>

                    <div class="col-md-4 mb-3">

                        <label class="form-label">

                            Total Harga

                        </label>

                        <input
                            type="text"
                            id="total"
                            class="form-control"
                            readonly>

                    </div>

                </div>

                <input type="hidden" name="lama_sewa" id="lama_hidden">

                <input type="hidden" name="total_harga" id="total_hidden">

                <div class="mt-3">

                    <button class="btn btn-success">

                        Simpan Booking

                    </button>

                    <a href="<?= base_url('booking'); ?>"
                       class="btn btn-secondary">

                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<script>

const mobil = document.getElementById('mobil');
const harga = document.getElementById('harga');

const tanggalSewa = document.getElementById('tanggal_sewa');
const tanggalKembali = document.getElementById('tanggal_kembali');

function hitungBooking(){

    if(mobil.value=="") return;

    let hargaMobil = parseInt(
        mobil.options[mobil.selectedIndex].dataset.harga
    );

    harga.value="Rp "+hargaMobil.toLocaleString("id-ID");

    if(tanggalSewa.value!="" && tanggalKembali.value!=""){

        let awal=new Date(tanggalSewa.value);
        let akhir=new Date(tanggalKembali.value);

        let selisih=(akhir-awal)/(1000*60*60*24);

        if(selisih<1){

            selisih=1;

        }

        let total=selisih*hargaMobil;

        document.getElementById("lama").value=selisih+" Hari";
        document.getElementById("total").value="Rp "+total.toLocaleString("id-ID");

        document.getElementById("lama_hidden").value=selisih;
        document.getElementById("total_hidden").value=total;

    }

}

mobil.addEventListener("change",hitungBooking);

tanggalSewa.addEventListener("change",hitungBooking);

tanggalKembali.addEventListener("change",hitungBooking);

</script>

<?= $this->endSection() ?>