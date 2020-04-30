<?php $this->load->view('templates/header'); ?>
<!-- fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

<h1><i class="fas fa-shopping-cart"></i> Transaksi / Penjualan </h1>
<br>


<?php $message = $this->session->flashdata('msg'); if(isset($message)): ?>
    <div class="alert bg-success" style="color:white;font-style:bold;"><center><span class="lnr lnr-checkmark-circle"></span> <?= $message."!"; ?></center></div>
<?php endif; ?>

<br><br>
<form action="<?= base_url().'admin/tambah_penjualan'; ?>" method="post" >
    <!-- inputan -->
    <div class="col-md-4">
        <label for="kd_penjualan">Kode Penjualan</label>
        <input type="text" name="kd_penjualan" value="TR<?php echo sprintf("%04s", $kd_penjualan) ?>" readonly class="form-control" >
        <br>
        <label for="tanggal_penjualan">Tanggal Penjualan</label>
        <input type="date" name="tanggal_penjualan" placeholder="isi disini..." class="form-control" >
        <br>
        <button type="reset" class="btn btn-danger" style="margin-top:25px;width:150px;"><i class="fas fa-retweet"></i> reset</button>
        <button type="submit" class="btn btn-primary" style="margin-top:25px;width:150px;"><i class="far fa-save"></i> simpan</button>
    </div>
    <div class="col-md-4">
        <label for="kd_barang">Kode Barang</label>
        <select name="kd_barang" class="form-control">
            <?php foreach($barang as $b) : ?>
            <option value="<?= $b['kd_barang'] ?>"><?= $b['kd_barang'].'-'.$b['nama_barang'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="qty">Jumlah/Qty</label>
        <input type="number" min="1" name="qty" placeholder="isi disini..." class="form-control" >
        <br>
        <label for="total_bayar">Total Bayar</label>
        <input type="number" min="1" name="total_bayar" placeholder="isi disini..." class="form-control"  >
        <br>
    </div>
    <!-- akhir inputan -->
    

</form>


<?php $this->load->view('templates/footer'); ?>