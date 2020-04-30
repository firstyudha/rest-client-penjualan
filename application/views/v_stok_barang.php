<?php $this->load->view('templates/header'); ?>

<h1>Informasi Stok Barang</h1>

<!-- fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

<a href="<?= base_url(); ?>export/stok/pdf" target="_blank" class="btn" style="float:right"><i class="fas fa-file-pdf"></i> Pdf</a>
<a href="<?= base_url(); ?>export/stok/excel" target="_blank" class="btn" style="float:right;margin-right:5px;color:red"><i class="far fa-file-excel"></i> Excel</a>

<br><br>
<table class="table">
    <tr class="bg-success" style="color:white">
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Stok Tersisa</th>
    </tr>
    <?php $i=1; foreach($stok_brg as $s) :?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $s['kd_barang']; ?></td>
        <td><?= $s['nama_barang']; ?></td>
        <td><?php echo $s['jml_barang']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<?php $this->load->view('templates/footer'); ?>