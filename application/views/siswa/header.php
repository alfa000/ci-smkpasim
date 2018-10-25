<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/logo.png">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/auth/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/auth/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/auth/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/auth/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/auth/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/auth/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/auth/bower_components/sweetalert/sweetalert2.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue fixed" data-spy="scroll" data-target="#scrollspy">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <!-- Logo -->
        <a href="<?=base_url()?>assets/admin/index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>PSB</b>FORM</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url()?>login_psb/logout">Log Out</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <div class="sidebar" id="scrollspy">
          <?php
          if ($header=='stk') {
          ?>
          <ul class="nav sidebar-menu">
          <li class="header">Lengkapi Data</li>
            <li>
              <a href="#"> Profile</a>
            </li>
            <li class="active"><a href="#">Saran Jurusan</a></li>
            <li><a href="#">Print</a></li>
          </ul>
          <?php
          }elseif($header=='tampil_siswa'){
          ?>
            <ul class="nav sidebar-menu">
            <li class="header">Lengkapi Data</li>
            <li>
              <a href="#"> Profile</a>
            </li>
            <li><a href="#">Saran Jurusan</a></li>
            <li class="active"><a href="#" onclick="window.print()">Print</a></li>
          </ul>
          <?php
          }else{
          ?>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="nav sidebar-menu">
            <li class="header">Lengkapi Data</li>
            <li class="treeview active" id="scrollspy-components">
              <a href="#"> Profile</a>
            <ul class="nav treeview-menu">
              <li class="treeview active"><a href="#siswa"><i class="fa fa-circle-o"></i> Isi Data Siswa</a></li>
              <li><a href="#ortu"><i class="fa fa-circle-o"></i> Data Orangtua</a></li>
              <li><a href="#akademik"><i class="fa fa-circle-o"></i> Potensi Akademik</a></li>
              <li><a href="#sekolah"><i class="fa fa-circle-o"></i> Data Asal Sekolah</a></li>
              <li><a href="#dokumen"><i class="fa fa-circle-o"></i> Dokumen & Raport</a></li>
            </ul>
            </li>
            <li><a href="#">Saran Jurusan</a></li>
            <li><a href="#">Print</a></li>
          </ul>

        <?php 
      }
         ?>
        </div>
        <!-- /.sidebar -->
      </aside>
