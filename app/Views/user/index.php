<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="mb-0">Data User</h3>

    <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>
        Tambah User
    </a>

</div>

<?php if(session()->getFlashdata('success')) : ?>

<script>

Swal.fire({

    toast:true,

    position:'top-end',

    icon:'success',

    title:'<?= session()->getFlashdata('success') ?>',

    showConfirmButton:false,

    timer:2000

});

</script>

<?php endif; ?>

<div class="card shadow-sm border-0">

    <div class="card-body">

        <div class="table-responsive">

            <table id="userTable" class="table table-striped table-hover align-middle">

                <thead class="table-light">

                    <tr>

                        <th>No</th>

                        <th>Nama</th>

                        <th>Username</th>

                        <th>Email</th>

                        <th>No. Telepon</th>

                        <th>Role</th>

                        <th width="170">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                <?php $no = 1; ?>

                <?php foreach($users as $u): ?>

                    <tr>

                        <td><?= $no++ ?></td>

                        <td><?= esc($u['nama']) ?></td>

                        <td><?= esc($u['username']) ?></td>

                        <td><?= esc($u['email']) ?></td>

                        <td><?= esc($u['no_telp']); ?></td>

                        <td>

                            <?php if($u['role']=="admin"): ?>

                                <span class="badge bg-primary">

                                    Admin

                                </span>

                            <?php else: ?>

                                <span class="badge bg-success">

                                    Customer

                                </span>

                            <?php endif; ?>

                        </td>

                        <td>

                            <a href="<?= base_url('user/edit/'.$u['id']) ?>"
                               class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil"></i>

                            </a>

                            <a href="<?= base_url('user/hapus/'.$u['id']) ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus user ini?')">

                                <i class="bi bi-trash"></i>

                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<script>

new DataTable('#userTable',{

    responsive:true,

    pageLength:10,

    autoWidth:false

});

</script>

<?= $this->endSection() ?>