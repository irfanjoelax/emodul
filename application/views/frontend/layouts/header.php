<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= TITLE_BAR ?></title>

    <link rel="shortcut icon" href="<?= base_url('ci-icon.png') ?>" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('backend/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('backend/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <style>
        body{
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-light bg-success">
        <a class="navbar-brand text-white"><?= $this->session->userdata('userusr') ?></a>
        <div class="float-right">
            <button class="btn btn-outline-light btn-home"><i class="fa fa-home"></i></button>
            &nbsp;
            <button class="btn btn-outline-light btn-profil"><i class="fa fa-user"></i></button>
            &nbsp;
            <button class="btn btn-outline-light" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out-alt"></i></button>
        </div>
    </nav>
    <!-- navbar -->