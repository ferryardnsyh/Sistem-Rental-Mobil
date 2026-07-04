<?= $this->extend('customer/layouts/template') ?>

<?= $this->section('content') ?>

<!-- Carousel -->
<div id="carouselRental"
     class="carousel slide carousel-fade mb-5 shadow rounded-4 overflow-hidden"
     data-bs-ride="carousel"
     data-bs-interval="3000"
     data-bs-pause="false"
     data-bs-wrap="true"
     data-bs-touch="true">

    <!-- Indicator -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselRental" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselRental" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselRental" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">

            <img src="<?= base_url('images/slider1.jpeg') ?>"
                 class="d-block w-100 carousel-img"
                 alt="Slider 1">

            <div class="carousel-caption text-start">

                <h1 class="fw-bold display-4">
                    Rental Mobil Terpercaya
                </h1>

                <p class="lead">
                    Sewa mobil dengan mudah, cepat, aman,
                    dan harga terbaik.
                </p>

            </div>

        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">

            <img src="<?= base_url('images/slider2.jpeg') ?>"
                 class="d-block w-100 carousel-img"
                 alt="Slider 2">

            <div class="carousel-caption">

                <h2 class="fw-bold">
                    Armada Lengkap
                </h2>

                <p>
                    Avanza • Innova • Brio • Fortuner • Xpander
                </p>

            </div>

        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">

            <img src="<?= base_url('images/slider3.jpeg') ?>"
                 class="d-block w-100 carousel-img"
                 alt="Slider 3">

            <div class="carousel-caption">

                <h2 class="fw-bold">
                    Harga Mulai Rp200.000 / Hari
                </h2>

                <p>
                    Mobil bersih, nyaman, dan siap digunakan.
                </p>

            </div>

        </div>

    </div>

    <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselRental"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

    </button>

    <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselRental"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

    </button>

</div>

<!-- Section Mobil -->
<section class="section-mobil">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Mobil Tersedia
            </h2>

            <p class="text-muted mb-0">
                Pilih mobil sesuai kebutuhan perjalanan Anda.
            </p>

        </div>

    </div>

    <div class="row">

        <?php foreach($mobil as $m): ?>

        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">

            <div class="card car-card border-0 shadow-sm h-100 rounded-4">

                <img src="<?= base_url('uploads/mobil/'.$m['gambar']) ?>"
                     class="card-img-top"
                     style="height:220px;object-fit:cover;"
                     alt="<?= esc($m['nama_mobil']) ?>">

                <div class="card-body">

                    <h5 class="fw-bold mb-1">
                        <?= esc($m['nama_mobil']) ?>
                    </h5>

                    <p class="text-muted mb-3">
                        <?= esc($m['merk']) ?>
                    </p>

                    <div class="row text-center mb-3">

                        <div class="col">

                            <small class="text-muted">
                                Tahun
                            </small>

                            <div class="fw-semibold">
                                <?= esc($m['tahun']) ?>
                            </div>

                        </div>

                        <div class="col">

                            <small class="text-muted">
                                Transmisi
                            </small>

                            <div class="fw-semibold">
                                <?= esc($m['transmisi']) ?>
                            </div>

                        </div>

                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <span class="badge bg-success px-3 py-2">
                            <?= esc($m['status']) ?>
                        </span>

                        <h5 class="text-primary fw-bold mb-0">
                            Rp <?= number_format($m['harga_sewa'],0,',','.') ?>
                        </h5>

                    </div>

                    <a href="<?= base_url('customer/detail/'.$m['id']) ?>"
                       class="btn btn-primary rounded-pill w-100">

                        <i class="bi bi-car-front-fill me-1"></i>
                        Detail Mobil

                    </a>

                </div>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const carousel = document.querySelector('#carouselRental');

    new bootstrap.Carousel(carousel, {
        interval: 3000,
        ride: 'carousel',
        pause: false,
        wrap: true,
        touch: true
    });

});
</script>

<?= $this->endSection() ?>