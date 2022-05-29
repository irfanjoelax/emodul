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

    <!-- Custom styles for this page -->
   <link href="<?= base_url('backend/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
               <!-- <i class="fas fa-tachometer-alt"></i> -->
            </div>
            <div class="sidebar-brand-text mx-3"><?= TITLE_BAR ?></div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('welcome/admin/home') ?>">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">Components</div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('welcome/admin/materi') ?>"">
               <i class="fas fa-fw fa-list"></i>
               <span>Materi</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('welcome/admin/submateri') ?>"">
               <i class="fas fa-fw fa-newspaper"></i>
               <span>Submateri</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('welcome/admin/soal') ?>">
               <i class="fas fa-fw fa-question"></i>
               <span>Soal</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('welcome/admin/user') ?>">
               <i class="fas fa-fw fa-users"></i>
               <span>User/Pelajar</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('welcome/admin/kompetensi') ?>">
               <i class="fas fa-fw fa-check"></i>
               <span>Kompetensi</span>
            </a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
               </button>

               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">
                  <div class="topbar-divider d-none d-sm-block"></div>
                  
                  <!-- Nav Item - setting user -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="#">
                     <i class="fas fa-user fa-fw"></i> &nbsp; <?php echo $this->session->userdata('namausr') ?>
                     </a>
                  </li>
                  
                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - setting user -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="<?= site_url('welcome/admin/profil') ?>">
                     <i class="fas fa-cog fa-fw"></i> &nbsp; Profil
                     </a>
                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>
                  
                  <!-- Nav Item - sign-out -->
                  <li class="nav-item dropdown no-arrow mx-1">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="modal" data-target="#logoutModal">
                     <i class="fas fa-sign-out-alt fa-fw"></i> &nbsp; Keluar
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- End of Topbar -->