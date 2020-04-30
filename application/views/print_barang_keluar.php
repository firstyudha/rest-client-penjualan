<?php 

if($export == 'pdf'){
    echo "<script>window.print()</script>";
}elseif($export == 'excel'){
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Report Barang Keluar.xls");
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Report Barang Keluar</title>
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
  
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png');?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/img/favicon.png');?>">
</head>

<body>
<table class="table table-bordered">
    <tr class="bg-danger" style="color:white">
        <th>Tanggal</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Qty</th>
    </tr>
    <?php foreach($riwayat_brg as $r) :?>
    <tr>
        <td><?= $r['tanggal_penjualan']; ?></td>
        <td><?= $r['kd_barang']; ?></td>
        <td><?= $r['nama_barang']; ?></td>
        <td><?= $r['qty']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>

</html>