<?= view('layouts/header') ?>

<?= view('layouts/navbar') ?>

<div class="container-fluid">

<div class="row">

<div class="col-lg-2 p-0">

<?= view('layouts/sidebar') ?>

</div>

<div class="col-lg-10">

<div class="content">

<?= $this->renderSection('content') ?>

</div>

</div>

</div>

</div>

<?= view('layouts/footer') ?>