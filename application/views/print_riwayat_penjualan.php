<?php 

if($export == 'pdf'){
    echo "<script>window.print()</script>";
}elseif($export == 'excel'){
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Report Riwayat Penjualan.xls");
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Report Riwayat Penjualan</title>
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
    <tr class="bg-warning" style="color:white">
        <th>No</th>
        <th>Kode Penjualan</th>
        <th>Kode Barang</th>
        <th>Qty</th>
        <th>Total Bayar</th>
        <th>Tanggal</th>
    </tr>
    <?php $i=1; foreach($riwayat_pj as $p) :?>
    <tr>
        <td><?= $i++; ?></td>
        <td><?= $p['kd_penjualan']; ?></td>
        <td><?= $p['kd_barang']; ?></td>
        <td><?= $p['qty']; ?></td>
        <td>Rp. <?= $p['total_bayar']; ?></td>
        <td><?= $p['tanggal_penjualan']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>

</html>