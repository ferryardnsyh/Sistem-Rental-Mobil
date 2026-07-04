<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="card shadow">

    <div class="card-header">

        <h4>Tambah Mobil</h4>

    </div>

    <div class="card-body">

        <form action="<?= base_url('mobil/simpan') ?>"
              method="post"
              enctype="multipart/form-data">

            <?= csrf_field() ?>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Nama Mobil</label>

                    <input
                        type="text"
                        name="nama_mobil"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Merk</label>

                    <input
                        type="text"
                        name="merk"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Plat Nomor</label>

                    <input
                        type="text"
                        name="plat_nomor"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Tahun</label>

                    <input
                        type="number"
                        name="tahun"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Transmisi</label>

                    <select
                        name="transmisi"
                        class="form-select">

                        <option>Manual</option>

                        <option>Matic</option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Harga Sewa / Hari</label>

                    <input
                        type="number"
                        name="harga_sewa"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Status</label>

                    <select
                        name="status"
                        class="form-select">

                        <option>Tersedia</option>

                        <option>Disewa</option>

                        <option>Maintenance</option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

    <label>Foto Mobil</label>

    <input
        type="file"
        name="gambar"
        class="form-control"
        accept="image/*">

    <div class="mt-3">
        <img
            id="preview"
            src="<?= base_url('uploads/no-image.png') ?>"
            class="img-thumbnail"
            style="max-width:200px;">
    </div>

</div>

            </div>

            <button
                class="btn btn-primary">

                Simpan

            </button>

            <a
                href="<?= base_url('mobil')?>"
                class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>
<script>

const gambar = document.querySelector('input[name="gambar"]');

gambar.addEventListener('change', function(){

    const reader = new FileReader();

    reader.onload = function(e){

        document.getElementById('preview').src = e.target.result;

    }

    reader.readAsDataURL(this.files[0]);

});

</script>
<?= $this->endSection() ?>