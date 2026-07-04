<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3>
        Data Mobil
    </h3>

    <a href="<?= base_url('mobil/tambah') ?>" class="btn btn-primary">

        <i class="bi bi-plus-circle"></i>

        Tambah Mobil

    </a>

</div>

<?php if(session()->getFlashdata('success')) : ?>

<script>

Swal.fire({

icon:'success',

title:'Berhasil',

text:'<?= session()->getFlashdata('success')?>',

timer:1800,

showConfirmButton:false

})

</script>

<?php endif; ?>

<?php if(session()->getFlashdata('error')) : ?>

<script>

Swal.fire({

icon:'error',

title:'Oops...',

text:'<?= session()->getFlashdata('error')?>'

})

</script>

<?php endif; ?>

<div class="card shadow">

<div class="card-body">

<table id="tabelMobil" class="table table-striped table-hover">

<thead>
<tr>
    <th>No</th>
    <th>Foto</th>
    <th>Nama Mobil</th>
    <th>Merk</th>
    <th>Plat</th>
    <th>Tahun</th>
    <th>Transmisi</th>
    <th>Harga</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>

<?php

$no=1;

foreach($mobil as $m):

?>

<tr>

<td><?= $no++ ?></td>

<td>
    <?php if (!empty($m['gambar'])) : ?>
        <img src="<?= base_url('uploads/mobil/' . $m['gambar']) ?>"
             width="100"
             class="img-thumbnail">
    <?php else : ?>
        <span class="text-muted">Tidak ada foto</span>
    <?php endif; ?>
</td>

<td><?= $m['nama_mobil'] ?></td>

<td><?= $m['merk'] ?></td>

<td><?= $m['plat_nomor'] ?></td>

<td><?= $m['tahun'] ?></td>

<td><?= $m['transmisi'] ?></td>

<td>

Rp <?= number_format($m['harga_sewa']) ?>

</td>

<td>

<?php

if($m['status']=="Tersedia"){

echo "<span class='badge bg-success'>Tersedia</span>";

}elseif($m['status']=="Disewa"){

echo "<span class='badge bg-warning'>Disewa</span>";

}else{

echo "<span class='badge bg-danger'>Maintenance</span>";

}

?>

</td>

<td>

<a href="<?= base_url('mobil/edit/'.$m['id']) ?>"

class="btn btn-warning btn-sm">

<i class="bi bi-pencil-square"></i>

</a>

<button

class="btn btn-danger btn-sm"

onclick="hapus(<?= $m['id']?>)">

<i class="bi bi-trash"></i>

</button>

</td>

</tr>

<?php endforeach ?>

</tbody>

</table>

</div>

</div>

<script>

new DataTable('#tabelMobil');

function hapus(id){

Swal.fire({

title:'Hapus data?',

text:'Data yang dihapus tidak dapat dikembalikan.',

icon:'warning',

showCancelButton:true,

confirmButtonText:'Ya',

cancelButtonText:'Batal'

}).then((result)=>{

if(result.isConfirmed){

window.location='<?= base_url('mobil/hapus/') ?>'+id;

}

})

}

</script>

<?= $this->endSection() ?>