<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= $title ?? 'Rental Mobil' ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<style>

html{
    scroll-behavior:smooth;
}

body{
    background:#f5f7fb;
    font-family:'Segoe UI',sans-serif;
    color:#333;
}

/* ===========================
   NAVBAR
=========================== */

.navbar{
    background:#fff !important;
    box-shadow:0 4px 20px rgba(0,0,0,.08);
    transition:.3s;
}

.navbar-brand{
    font-size:1.4rem;
    font-weight:700;
    letter-spacing:.5px;
}

.navbar-brand i{
    font-size:28px;
}

/* Menu */

.navbar-nav .nav-link{

    position:relative;

    color:#444 !important;

    font-weight:600;

    margin:0 12px;

    padding:10px 0;

    transition:.3s;

}

/* Hover */

.navbar-nav .nav-link:hover{

    color:#0d6efd !important;

}

/* Underline Animation */

.navbar-nav .nav-link::after{

    content:"";

    position:absolute;

    left:0;

    bottom:0;

    width:0;

    height:2px;

    background:#0d6efd;

    transition:width .3s ease;

}

.navbar-nav .nav-link:hover::after{

    width:100%;

}

/* Active */

.navbar-nav .nav-link.active{

    color:#0d6efd !important;

}

.navbar-nav .nav-link.active::after{

    width:100%;

}

/* Dropdown */

.dropdown-menu{
    border:none;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,.12);
}

.dropdown-item{
    padding:10px 18px;
    transition:.25s;
}

.dropdown-item:hover{
    background:#f4f7fb;
    padding-left:25px;
}

/* ===========================
   CAROUSEL
=========================== */

.carousel-img{
    height:520px;
    object-fit:cover;
    filter:brightness(55%);
}

.carousel-caption{
    bottom:22%;
}

.carousel-caption h1{
    font-size:55px;
    font-weight:700;
}

.carousel-caption p{
    font-size:22px;
}

/* ===========================
   SECTION
=========================== */

.section-mobil{
    background:#fff;
    border-radius:25px;
    padding:40px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

/* ===========================
   CARD MOBIL
=========================== */

.car-card{

    transition:.35s;

    overflow:hidden;

    border-radius:20px;

}

.car-card:hover{

    transform:translateY(-10px);

    box-shadow:0 18px 35px rgba(0,0,0,.18);

}

.card-img-top{

    transition:.4s;

}

.car-card:hover .card-img-top{

    transform:scale(1.08);

}

.btn-primary{

    border-radius:50px;

}

.btn-primary:hover{

    transform:translateY(-2px);

    transition:.25s;

}

/* ===========================
   FOOTER
=========================== */

footer{

    background:#6c757d;

    color:#ffffff;

    margin-top:80px;

    border-top:1px solid #5c636a;

}

.footer-title{

    font-weight:700;

    color:#ffffff;

    margin-bottom:18px;

}

.footer-link{

    color:#f8f9fa;

    text-decoration:none;

    transition:all .3s ease;

}

.footer-link:hover{

    color:#0d6efd;

    padding-left:6px;

}

.footer-contact{

    color:#f8f9fa;

}

.footer-contact i{

    color:#ffffff;

    margin-right:8px;

}

.footer-bottom{

    background:#5c636a;

    color:#f8f9fa;

    padding:18px;

    text-align:center;

    border-top:1px solid rgba(255,255,255,.15);

}

/* ===========================
   RESPONSIVE
=========================== */

@media(max-width:991px){

.navbar-nav{

    padding-top:15px;

}

.navbar .nav-link{

    position:relative;

    margin:0 10px;

    color:#495057;

    font-weight:500;

    transition:.3s;

}

.navbar .nav-link:hover{

    color:#0d6efd;

}

.navbar .nav-link::after{

    content:'';

    position:absolute;

    left:0;

    bottom:-6px;

    width:0;

    height:3px;

    background:#0d6efd;

    border-radius:20px;

    transition:.3s;

}

/* Hover */

.navbar .nav-link:hover::after{

    width:100%;

}

/* Active */

.navbar .nav-link.active{

    color:#0d6efd;

    font-weight:600;

}

.navbar .nav-link.active::after{

    width:100%;

}

@media(max-width:768px){

.carousel-img{

    height:260px;

}

.carousel-caption{

    bottom:10%;

}

.carousel-caption h1{

    font-size:30px;

}

.carousel-caption p{

    font-size:15px;

}

.section-mobil{

    padding:20px;

}

}

</style>

</head>

<body>

<?= $this->include('customer/layouts/navbar') ?>

<div class="container py-5">

    <?= $this->renderSection('content') ?>

</div>

<?= $this->include('customer/layouts/footer') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>