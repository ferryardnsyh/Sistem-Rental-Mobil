<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= $title ?? 'Rental Mobil'; ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

<style>

body{

    background:#f4f6f9;

}

.content{

    padding:20px;

}

.card{

    border:none;

    border-radius:15px;

}

.navbar{

    box-shadow:0 2px 10px rgba(0,0,0,.08);

}

.sidebar{

    min-height:100vh;

    background:#0d6efd;

}

.sidebar a{

    color:white;

    text-decoration:none;

    display:block;

    padding:12px 20px;

}

.sidebar a:hover{

    background:rgba(255,255,255,.15);

}

@media(max-width:768px){

.sidebar{

min-height:auto;

}

}

.admin-navbar{
    background:#1e293b;
    border-bottom:1px solid rgba(255,255,255,.08);
    box-shadow:0 4px 18px rgba(0,0,0,.12);
    height:70px;
}

.admin-navbar .navbar-brand{
    color:#fff;
    font-size:28px;
    font-weight:700;
    margin-left:20px;
}

.admin-navbar .nav-link{
    color:#f8fafc !important;
    font-weight:500;
}

.admin-navbar .nav-link i{
    font-size:18px;
}

.admin-navbar .btn-danger{
    border-radius:30px;
    padding:7px 18px;
    transition:.3s;
}

.admin-navbar .btn-danger:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(220,53,69,.35);
}

.sidebar{
    background:#1e293b;
}

.sidebar .nav-link{
    color:#dbe4f0;
    border-radius:10px;
    transition:.3s;
}

.sidebar .nav-link:hover{
    background:#2563eb;
    color:#fff;
    transform:translateX(8px);
}

.sidebar .nav-link.active{
    background:#2563eb;
    color:#fff;
}

</style>

</head>

<body>