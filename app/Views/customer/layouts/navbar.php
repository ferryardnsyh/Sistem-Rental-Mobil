<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold text-primary"
           href="<?= base_url('customer') ?>">

            <i class="bi bi-car-front-fill me-2"></i>

            FAS Rental Mobil

        </a>

        <!-- Toggle -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse"
             id="navbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">

                    <a class="nav-link <?= uri_string() == 'customer' ? 'active' : '' ?>"
                    href="<?= base_url('customer') ?>">

                        Home

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link <?= uri_string() == 'customer/bookingSaya' ? 'active' : '' ?>"
                    href="<?= base_url('customer/bookingSaya') ?>">

                        Booking Saya

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link <?= uri_string() == 'customer/about' ? 'active' : '' ?>"
                    href="<?= base_url('customer/about') ?>">
                        About
                    </a>

                </li>

                <!-- User -->
                <li class="nav-item dropdown ms-lg-3">

                    <a class="nav-link dropdown-toggle d-flex align-items-center"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">

                        <i class="bi bi-person-circle fs-5 me-2"></i>

                        <?= session()->get('nama') ?>

                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3">

                        <li>

                            <a class="dropdown-item"
                               href="<?= base_url('customer/profil') ?>">

                                <i class="bi bi-person me-2"></i>

                                Profil

                            </a>

                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>

                            <a class="dropdown-item text-danger"
                               href="<?= base_url('logout') ?>">

                                <i class="bi bi-box-arrow-right me-2"></i>

                                Logout

                            </a>

                        </li>

                    </ul>

                </li>

            </ul>

        </div>

    </div>

</nav>