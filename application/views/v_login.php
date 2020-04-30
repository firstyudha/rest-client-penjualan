<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
  <title>Login</title>
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
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png');?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/img/favicon.png');?>">
  <!-- fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
 
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <div class="vertical-align-wrap">
      <div class="vertical-align-middle">
        <div class="auth-box ">
          <div class="left">
            <div class="content">
              <div class="header">
                <div class="logo text-center"><i class="fas fa-shopping-bag fa-5x"></i></div>
                <p class="lead">Login to your account</p>
                <?php echo $this->session->flashdata('msg');?>
              </div>
              <form class="form-auth-small" action="<?php echo base_url('Login/auth');?>" method="post">
                <div class="form-group">
                  <label for="signin-email" class="control-label sr-only">Email</label>
                  <input type="text" name="username" class="form-control" id="signin-email" placeholder="Masukan username...">
                </div>
                <div class="form-group">
                  <label for="signin-password" class="control-label sr-only">Password</label>
                  <input type="password" name="password" class="form-control" id="signin-password" value="admin" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                
              </form>
            </div>
          </div>
          <div class="right">
            <div class="overlay"></div>
            <div class="content text">
              <h1 class="heading">Aplikasi Pencatatan Data Penjualan</h1>
              <p>by Yudha Pratama</p>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->
</body>

</html>
