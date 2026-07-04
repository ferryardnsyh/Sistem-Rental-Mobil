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

</style>

</head>

<body>