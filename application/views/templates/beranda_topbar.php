<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="<?= base_url('beranda'); ?>">SISTEM INFORMASI EKSTRAKURIKULER SMAN 1 CISAAT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/registration'); ?>">DAFTAR</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('profil'); ?>">PROFIL</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('#'); ?>">JADWAL EKSKUL</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('#'); ?>">INFORMASI</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('auth'); ?>">MASUK</a></li>
                </ul>
            </div>
        </div>
    </nav>