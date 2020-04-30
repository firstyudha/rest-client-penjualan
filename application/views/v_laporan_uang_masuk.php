<?php $this->load->view('templates/header'); ?>
<!-- fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>


<h1>Laporan Uang Masuk (income)</h1>
<br>


<a href="<?= base_url(); ?>export/uang_masuk/pdf" target="_blank" class="btn" style="float:right"><i class="fas fa-file-pdf"></i> Pdf</a>
<a href="<?= base_url(); ?>export/uang_masuk/excel" target="_blank" class="btn" style="float:right;margin-right:5px;color:red"><i class="far fa-file-excel"></i> Excel</a>


<br><br>
<table class="table table-bordered">
    <tr class="bg-success" style="color:white">
        <th>Tanggal</th>
        <th>Kode Penjualan</th>
        <th>Pemasukan</th>
    </tr>
    <?php foreach($penjualan as $p) :?>
    <tr>
        <td><?= $p['tanggal_penjualan']; ?></td>
        <td><?= $p['kd_penjualan']; ?></td>
        <td>Rp. <?= $p['total_bayar']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<?php $this->load->view('templates/footer'); ?>