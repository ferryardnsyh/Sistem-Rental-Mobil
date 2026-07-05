<?php
$segment = service('uri')->getSegment(1);
?>

<style>

.sidebar{

    background:#1f2937;
    min-height:100vh;
    padding:20px 15px;
    box-shadow:4px 0 15px rgba(0,0,0,.08);

}

.sidebar-title{

    color:#fff;
    font-weight:700;
    text-align:center;
    margin-bottom:30px;

}

.sidebar .nav-link{

    color:#d1d5db;
    border-radius:10px;
    padding:12px 15px;
    margin-bottom:8px;
    font-weight:500;
    transition:all .3s ease;
    position:relative;

}

.sidebar .nav-link i{

    margin-right:10px;
    width:20px;
    transition:.3s;

}

/* Hover */

.sidebar .nav-link:hover{

    background:#0d6efd;
    color:#fff;
    transform:translateX(6px);

}

.sidebar .nav-link:hover i{

    transform:scale(1.15);

}

/* Menu Aktif */

.sidebar .nav-link.active{

    background:#0d6efd;
    color:#fff;
    font-weight:600;

}

/* Garis kiri */

.sidebar .nav-link::before{

    content:"";
    position:absolute;
    left:0;
    top:8px;
    width:4px;
    height:70%;
    background:#fff;
    border-radius:0 4px 4px 0;
    opacity:0;
    transition:.3s;

}

.sidebar .nav-link:hover::before,
.sidebar .nav-link.active::before{

    opacity:1;

}

</style>

<div class="sidebar">

    <h4 class="sidebar-title">
        <i class="bi bi-car-front-fill"></i>
        Rental Mobil
    </h4>

    <ul class="nav flex-column">

        <li class="nav-item">

            <a href="<?= base_url('dashboard') ?>"
               class="nav-link <?= $segment == 'dashboard' ? 'active' : '' ?>">

                <i class="bi bi-speedometer2"></i>
                Dashboard

            </a>

        </li>

        <li class="nav-item">

            <a href="<?= base_url('mobil') ?>"
               class="nav-link <?= $segment == 'mobil' ? 'active' : '' ?>">

                <i class="bi bi-car-front-fill"></i>
                Mobil

            </a>

        </li>

        <li class="nav-item">

            <a href="<?= base_url('booking') ?>"
               class="nav-link <?= $segment == 'booking' ? 'active' : '' ?>">

                <i class="bi bi-calendar-check"></i>
                Booking

            </a>

        </li>

        <li class="nav-item">

            <a href="<?= base_url('user') ?>"
               class="nav-link <?= $segment == 'user' ? 'active' : '' ?>">

                <i class="bi bi-people-fill"></i>
                User

            </a>

        </li>

        <li class="nav-item">

            <a href="<?= base_url('about') ?>"
               class="nav-link <?= $segment == 'about' ? 'active' : '' ?>">

                <i class="bi bi-info-circle"></i>
                About Us

            </a>

        </li>

    </ul>

</div>