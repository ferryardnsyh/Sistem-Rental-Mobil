<nav class="navbar navbar-expand-lg admin-navbar">

    <div class="container-fluid">

        <a class="navbar-brand fw-bold text-white">

            <i class="bi bi-car-front-fill me-2"></i>

            Rental Mobil

        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item me-3">

                    <span class="nav-link text-white">

                        <i class="bi bi-person-circle me-1"></i>

                        <?= session()->get('nama'); ?>

                    </span>

                </li>

                <li class="nav-item">

                    <a class="btn btn-sm btn-danger px-3"
                       href="<?= base_url('logout')?>">

                        <i class="bi bi-box-arrow-right me-1"></i>

                        Logout

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>