<nav class="navbar navbar-expand-lg bg-white">

<div class="container-fluid">

<a class="navbar-brand fw-bold">

Rental Mobil

</a>

<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">

<span class="nav-link">

<?= session()->get('nama'); ?>

</span>

</li>

<li class="nav-item">

<a class="nav-link text-danger"

href="<?= base_url('logout')?>">

Logout

</a>

</li>

</ul>

</div>

</div>

</nav>