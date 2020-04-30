<!doctype html>
<html lang="en">

<head>
  <title>Dashboard | ADMIN</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/linearicons/style.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/chartist/css/chartist-custom.css');?>">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/main.css');?>">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="<?= base_url('assets/css/demo.css');?>">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  
    <!-- delete pop up -->
    <script>
        function doconfirm()
        {
            job=confirm("Anda yakin akan menghapus data ini?");
            if(job!=true)
            {
                return false;
            }
        }
    </script>
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png');?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/img/favicon.png');?>">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="#">
        <span class="lnr lnr-store"> ADMIN PAGE</span>
        </a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        
        <div class="navbar-btn navbar-btn-right">
          <a class="btn btn-danger" href="<?php echo base_url().'login/logout'?>"><span class="lnr lnr-exit"></span><span>LOG OUT</span></a>
        </div>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">

          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            
            <li><a href="<?php echo base_url().'admin'?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

            <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>Input Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
                  <li><a href="<?php echo base_url().'admin/barang_masuk'?>" class=""><i class="lnr lnr-inbox"></i> <span>Barang Masuk</span></a></li>
                  <li><a href="<?php echo base_url().'admin/penjualan'?>" class=""><i class="lnr lnr-cart"></i> <span>Transaksi / Penjualan</span></a></li>
								</ul>
							</div>
            </li>
            
            <li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Report Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
                  <li><a href="<?php echo base_url().'admin/laporan_uang_masuk'?>" class=""><i class="lnr lnr-chart-bars"></i><span>Uang Masuk</span></a></li> 
                  <li><a href="<?php echo base_url().'admin/riwayat_barang_keluar'?>" class=""><i class="lnr lnr-gift"></i> <span>Barang Keluar</span></a></li>
                  <li><a href="<?php echo base_url().'admin/riwayat_penjualan'?>" class=""><i class="lnr lnr-history"></i> <span>Riwayat Penjualan</span></a></li>
                  <li><a href="<?php echo base_url().'admin/stok_barang'?>" class=""><i class="lnr lnr-layers"></i> <span>Stok Barang</span></a></li> 
								</ul>
							</div>
						</li>
             
            
          </ul>
        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">