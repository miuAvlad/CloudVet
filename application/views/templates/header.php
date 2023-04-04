<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--  favicon png -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.png">
  <title>CloudVet</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/jquery.dataTables.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/buttons.dataTables.min.css" />
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/theme/css/sb-admin-2.min.css" rel="stylesheet">



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i style="color:lawngreen;" class="fas fa-dog"></i>
        </div> -->
        <!-- <div class="sidebar-brand-text mx-3">CloudVet <sup>1.0</sup></div> -->
        <img src="<?php echo base_url(); ?>assets/logo.png" width="100px">
      </a>



      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Acasa</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Caini
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCaini" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-dog"></i>
          <span>Caini</span>
        </a>
        <div id="collapseCaini" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestiune caini:</h6>

            <a class="collapse-item" href="<?= base_url(); ?>caini/adauga_caine">Adauga caine</a>
            <a class="collapse-item" href="<?= base_url(); ?>caini/lista_caini">Lista caini</a>

          </div>
        </div>
      </li>
      <div class="sidebar-heading">
        Boxe
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBoxe" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-box"></i>
          <span>Boxe</span>
        </a>
        <div id="collapseBoxe" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestiune boxe:</h6>
            <a class="collapse-item" href="<?= base_url(); ?>boxe/lista_boxe">Lista boxe</a>

          </div>
        </div>
      </li>


      <!-- Heading -->
      <div class="sidebar-heading">
        Utilizatori
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Utilizatori</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestiune utilizatori:</h6>
            <?php if ($this->session->userdata('status') == "admin") { ?>
              <a class="collapse-item" href="<?= base_url(); ?>utilizatori/adauga_utilizator">Adauga utilizator</a>
              <a class="collapse-item" href="<?= base_url(); ?>utilizatori/lista_utilizatori/">Lista utilizatori</a>
            <?php } ?>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

      <hr class="sidebar-divider d-none d-md-block">



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

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bine ai venit, <b><?= $this->session->userdata('nume'); ?></b></span>

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <span class="dropdown-item">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  <?= $this->session->userdata('status'); ?>
                </span>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Delogare
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url(); ?>assets/theme/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url(); ?>assets/theme/vendor/jquery-easing/jquery.easing.min.js"></script>


        <!-- Page level plugins -->
        <script src="<?php echo base_url(); ?>assets/theme/vendor/chart.js/Chart.min.js"></script>
        <!-- Page level plugins - Tables -->
        <!-- <script src="<?php echo base_url(); ?>assets/theme/vendor/datatables/jquery.dataTables.min.js"></script> -->
        <!-- <script src="<?php echo base_url(); ?>assets/theme/vendor/datatables/dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/vendor/datatables/datatables.min.css" /> -->


        <!-- Page level custom scripts -->

        <!-- Page level custom scripts --tables -->
        <!-- <script src="<?php echo base_url(); ?>assets/theme/js/demo/datatables-demo.js"></script> -->
        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url(); ?>assets/theme/js/sb-admin-2.js"></script>



        <!-- SWEETALERT IMPORT -->
        <script src="<?php echo base_url(); ?>assets/sweetalert/sweetalert2.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert/sweetalert2.css" />

        <!-- TOASTR -->
        <link href="<?php echo base_url(); ?>assets/toastr/toastr.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/toastr/toastr.min.js"></script>



        <script src="<?php echo base_url(); ?>assets/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>assets/jszip.min.js"></script>


        <body>