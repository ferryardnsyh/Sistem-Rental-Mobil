<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="mb-0">Data Booking</h3>

    <a href="<?= base_url('booking/tambah') ?>" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>
        Booking Mobil
    </a>

</div>

<?php if (session()->getFlashdata('success')) : ?>

<script>
Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'success',
    title: '<?= session()->getFlashdata('success') ?>',
    showConfirmButton: false,
    timer: 2000
});
</script>

<?php endif; ?>

<div class="card shadow-sm border-0">

    <div class="card-body">

        <div class="table-responsive">

            <table id="bookingTable" class="table table-striped table-hover align-middle">

                <thead class="table-light">

                    <tr>

                        <th>No</th>
                        <th>Customer</th>
                        <th>Mobil</th>
                        <th>Tgl Sewa</th>
                        <th>Tgl Kembali</th>
                        <th>Lama</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th width="220">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    <?php $no = 1; ?>

                    <?php foreach ($booking as $b) : ?>

                    <tr>

                        <td><?= $no++ ?></td>

                        <td><?= $b['nama'] ?></td>

                        <td><?= $b['nama_mobil'] ?></td>

                        <td><?= date('d-m-Y', strtotime($b['tanggal_sewa'])) ?></td>

                        <td><?= date('d-m-Y', strtotime($b['tanggal_kembali'])) ?></td>

                        <td><?= $b['lama_sewa'] ?> Hari</td>

                        <td>
                            Rp <?= number_format($b['total_harga'], 0, ',', '.') ?>
                        </td>

                        <td>

                            <?php if ($b['status'] == 'Menunggu') : ?>

                                <span class="badge bg-warning">
                                    Menunggu
                                </span>

                            <?php elseif ($b['status'] == 'Disetujui') : ?>

                                <span class="badge bg-success">
                                    Disetujui
                                </span>

                            <?php elseif ($b['status'] == 'Selesai') : ?>

                                <span class="badge bg-primary">
                                    Selesai
                                </span>

                            <?php else : ?>

                                <span class="badge bg-danger">
                                    Dibatalkan
                                </span>

                            <?php endif; ?>

                        </td>

                        <td>

                            <?php if ($b['status'] == 'Menunggu') : ?>

                                <a href="<?= base_url('booking/setujui/' . $b['id']) ?>"
                                   class="btn btn-success btn-sm">

                                    <i class="bi bi-check-circle"></i>

                                    Setujui

                                </a>

                                <a href="<?= base_url('booking/tolak/' . $b['id']) ?>"
                                   class="btn btn-danger btn-sm">

                                    <i class="bi bi-x-circle"></i>

                                    Tolak

                                </a>

                            <?php elseif ($b['status'] == 'Disetujui') : ?>

                                <a href="<?= base_url('booking/selesai/' . $b['id']) ?>"
                                   class="btn btn-primary btn-sm">

                                    <i class="bi bi-check2-circle"></i>

                                    Selesai

                                </a>

                            <?php else : ?>

                                <span class="text-muted">-</span>

                            <?php endif; ?>

                        </td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<script>

new DataTable('#bookingTable', {
    responsive: true,
    pageLength: 10,
    autoWidth: false,
    language: {
        search: "Cari :",
        lengthMenu: "Tampilkan _MENU_ data",
        info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        zeroRecords: "Data tidak ditemukan",
        paginate: {
            previous: "←",
            next: "→"
        }
    }
});

</script>

<?= $this->endSection() ?>