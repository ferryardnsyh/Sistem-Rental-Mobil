<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="card shadow-sm border-0">

    <div class="card-header">
        <h4>Edit Data Mobil</h4>
    </div>

    <div class="card-body">

        <form action="<?= base_url('mobil/update/'.$mobil['id']) ?>"
              method="post"
              enctype="multipart/form-data">

            <?= csrf_field() ?>

            <input type="hidden"
                   name="gambar_lama"
                   value="<?= $mobil['gambar'] ?>">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Nama Mobil</label>
                    <input type="text"
                           class="form-control"
                           name="nama_mobil"
                           value="<?= $mobil['nama_mobil'] ?>"
                           required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Merk</label>
                    <input type="text"
                           class="form-control"
                           name="merk"
                           value="<?= $mobil['merk'] ?>"
                           required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Plat Nomor</label>
                    <input type="text"
                           class="form-control"
                           name="plat_nomor"
                           value="<?= $mobil['plat_nomor'] ?>"
                           required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tahun</label>
                    <input type="number"
                           class="form-control"
                           name="tahun"
                           value="<?= $mobil['tahun'] ?>"
                           required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Transmisi</label>

                    <select name="transmisi" class="form-select">

                        <option value="Manual"
                            <?= $mobil['transmisi']=='Manual'?'selected':'' ?>>
                            Manual
                        </option>

                        <option value="Matic"
                            <?= $mobil['transmisi']=='Matic'?'selected':'' ?>>
                            Matic
                        </option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">
                    <label>Harga</label>

                    <input type="number"
                           class="form-control"
                           name="harga_sewa"
                           value="<?= $mobil['harga_sewa'] ?>"
                           required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Status</label>

                    <select class="form-select"
                            name="status">

                        <option value="Tersedia"
                        <?= $mobil['status']=='Tersedia'?'selected':'' ?>>
                            Tersedia
                        </option>

                        <option value="Disewa"
                        <?= $mobil['status']=='Disewa'?'selected':'' ?>>
                            Disewa
                        </option>

                        <option value="Maintenance"
                        <?= $mobil['status']=='Maintenance'?'selected':'' ?>>
                            Maintenance
                        </option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Foto Baru</label>

                    <input type="file"
                           class="form-control"
                           name="gambar"
                           accept="image/*">

                </div>

                <div class="col-md-12 mb-3">

                    <img
                    id="preview"
                    src="<?= base_url('uploads/mobil/'.$mobil['gambar']) ?>"
                    class="img-thumbnail"
                    width="250">

                </div>

            </div>

            <button class="btn btn-success">

                Update

            </button>

            <a href="<?= base_url('mobil') ?>"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

<script>

document.querySelector('input[name="gambar"]')
.addEventListener('change',function(){

    const reader=new FileReader();

    reader.onload=function(e){

        document.getElementById('preview').src=e.target.result;

    }

    reader.readAsDataURL(this.files[0]);

});

</script>

<?= $this->endSection() ?>