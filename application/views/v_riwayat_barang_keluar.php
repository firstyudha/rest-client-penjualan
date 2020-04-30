<?php $this->load->view('templates/header'); ?>
<!-- fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>


<h1>Riwayat Barang Keluar</h1>
<br>


<a href="<?= base_url(); ?>export/barang_keluar/pdf" target="_blank" class="btn" style="float:right"><i class="fas fa-file-pdf"></i> Pdf</a>
<a href="<?= base_url(); ?>export/barang_keluar/excel" target="_blank" class="btn" style="float:right;margin-right:5px;color:red"><i class="far fa-file-excel"></i> Excel</a>


<br><br>
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


<?php $this->load->view('templates/footer'); ?>