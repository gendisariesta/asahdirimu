<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/47f55c7ead.js" crossorigin="anonymous"></script>
    <style>
        .bg-nav {
            background-color: #C06D59;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>
        <?= $title; ?>
    </title>

    <link rel="stylesheet" href="<?= base_url('assets/sistem/tentangkami/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/sistem/tentangkami/') ?>css/aos.css">
    <link rel="stylesheet" href="<?= base_url('assets/sistem/tentangkami/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/sistem/tentangkami/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/sistem/tentangkami/') ?>css/templatemo-digital-trend.css">
    <link rel="stylesheet" href="<?= base_url('assets/sistem/') ?>vendor/datatables/datatables.min.css">
    <link href="<?= base_url('assets/sistem/'); ?>css/business-frontpage.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/sistem/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/sistem/'); ?>vendor/datatables/datatables.min.js"></script>
    <script src="<?= base_url('assets/sistem/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav">
        <div class="container">
            <a class="navbar-brand" href="#">Asah Dirimu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Admin') ?>">Beranda
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('beranda/tentangkami'); ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('beranda/hubungikami'); ?>">Hubungi Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $user['nama']; ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('page/akun'); ?>">Akun</a>
                            <a class="dropdown-item" href="<?= base_url('member'); ?>">Data Member</a>
                            <a class="dropdown-item" href="<?= base_url('seminar'); ?>">Info Seminar</a>
                            <a class="dropdown-item" href="<?= base_url('lomba'); ?>">Info Lomba</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>