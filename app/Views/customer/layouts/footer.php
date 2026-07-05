<footer class="footer">

    <div class="container py-5">

        <div class="row">

            <!-- Logo -->
            <div class="col-lg-4 mb-4">

                <h4 class="footer-title">

                    <i class="bi bi-car-front-fill"></i>

                    Rental Mobil

                </h4>

                <p class="footer-text mt-3">
                    Solusi penyewaan mobil yang mudah, cepat, aman, dan terpercaya.
                </p>

            </div>

            <!-- Menu -->
            <div class="col-lg-4 mb-4">

                <h5 class="footer-title">

                    Menu

                </h5>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a class="footer-link" href="<?= base_url('customer') ?>">
                            Home
                        </a>
                    </li>

                    <li class="mb-2">
                        <a class="footer-link" href="<?= base_url('customer/bookingSaya') ?>">
                            Booking Saya
                        </a>
                    </li>

                    <li class="mb-2">
                        <a class="footer-link" href="<?= base_url('customer/about') ?>">
                            About
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Kontak -->
            <div class="col-lg-4 mb-4">

                <h5 class="footer-title">

                    Kontak

                </h5>

                <p class="footer-text">
                    <i class="bi bi-envelope-fill me-2"></i>
                    rentalmobil@gmail.com
                </p>

                <p class="footer-text">
                    <i class="bi bi-telephone-fill me-2"></i>
                    08123456789
                </p>

                <p class="footer-text">
                    <i class="bi bi-geo-alt-fill me-2"></i>
                    Cimahi
                </p>

            </div>

        </div>

    </div>

    <div class="footer-bottom">

        © <?= date('Y') ?> Rental Mobil

    </div>

</footer>

<style>

.footer{

    background:#232C3D;
    color:#fff;

}

.footer-title{

    color:#fff;
    font-weight:700;
    margin-bottom:18px;

}

.footer-text{

    color:#d6dbe4;
    line-height:1.8;
    margin-bottom:12px;

}

.footer-link{

    color:#d6dbe4;
    text-decoration:none;
    transition:.3s;

}

.footer-link:hover{

    color:#0d6efd;
    padding-left:6px;

}

.footer-bottom{

    background:#1b2332;
    color:#d6dbe4;
    text-align:center;
    padding:15px;
    font-size:14px;
    border-top:1px solid rgba(255,255,255,.08);

}

.footer i{

    color:#0d6efd;

}

</style>