<?php $this->load->view('templates/header'); ?>


<h1>Edit Barang Masuk</h1>
<br>
<?= $error; ?>
<br><br>
<form action="<?= base_url().'admin/update_barang'; ?>" method="post" enctype="multipart/form-data">
    <!-- inputan -->
    <?php foreach($barang as $b) : ?>
    <label for="kd_barang">Kode Barang</label>
    <input type="text" name="kd_barang" class="form-control" value = "<?= $b['kd_barang']; ?>">
    <br>
    <label for="nama_barang">Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control" value = "<?= $b['nama_barang']; ?>">
    <br>
    <label for="jml_barang">Jumlah Barang</label>
    <input type="number" min="1" name="jml_barang" class="form-control" value = "<?= $b['jml_barang']; ?>">
    <br>
    <label for="harga_pcs">Harga Barang @pcs</label>
    <input type="number" min="1" name="harga_pcs" class="form-control" value = "<?= $b['harga_pcs']; ?>">
    <br>
    <?php endforeach; ?>
    <!-- akhir inputan -->
    <button type="submit" class="btn btn-success">Update</button>

</form>


<?php $this->load->view('templates/footer'); ?>