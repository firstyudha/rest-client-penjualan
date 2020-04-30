<?php $this->load->view('templates/header'); ?>
<!-- fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>


<h1>Riwayat Penjualan</h1>
<br>


<a href="<?= base_url(); ?>export/penjualan/pdf" class="btn" style="float:right"><i class="fas fa-file-pdf"></i> Pdf</a>
<a href="<?= base_url(); ?>export/penjualan/excel" class="btn" style="float:right;margin-right:5px;color:red"><i class="far fa-file-excel"></i> Excel</a>


<br><br>
<table class="table table-bordered">
    <tr class="bg-warning" style="color:white">
        <th>No</th>
        <th>Kode Penjualan</th>
        <th>Kode Barang</th>
        <th>Qty</th>
        <th>Total Bayar</th>
        <th>Tanggal</th>
        <th>Pengaturan</th>
    </tr>
    <?php $i=1; foreach($riwayat_pj as $p) :?>
    <tr>
        <td><?= $i++; ?></td>
        <td><?= $p['kd_penjualan']; ?></td>
        <td><?= $p['kd_barang']; ?></td>
        <td><?= $p['qty']; ?></td>
        <td>Rp. <?= $p['total_bayar']; ?></td>
        <td><?= $p['tanggal_penjualan']; ?></td>
        <td>
            <a href="<?= base_url()."admin/edit_riwayat_penjualan/".$p['kd_penjualan']; ?>" class="btn btn-sm btn-success"><i class="far fa-edit"></i></a> <a href="<?= base_url()."admin/hapus_riwayat_penjualan/".$p['kd_penjualan']; ?>" class="btn btn-sm btn-danger" onClick='return doconfirm()';><i class="far fa-trash-alt"></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


<?php $this->load->view('templates/footer'); ?>