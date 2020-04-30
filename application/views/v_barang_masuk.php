<?php $this->load->view('templates/header'); ?>
<!-- fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    
<center>
<p><?php echo $error;?></p>
</center>

<h1><i class="fas fa-box-open"></i> Barang Masuk</h1>
<br>
<?php $message = $this->session->flashdata('msg'); if(isset($message)): ?>
    <div class="alert bg-success" style="color:white;font-style:bold;"><center><span class="lnr lnr-checkmark-circle"></span> <?= $message."!"; ?></center></div>
<?php endif; ?>
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
<i class="fas fa-plus-circle"></i> Tambah Barang Masuk
</button>
<a href="<?= base_url(); ?>export/barang_masuk/pdf" target="_blank" class="btn" style="float:right"><i class="fas fa-file-pdf"></i> Pdf</a>
<a href="<?= base_url(); ?>export/barang_masuk/excel" target="_blank" class="btn" style="float:right;margin-right:5px;color:red"><i class="far fa-file-excel"></i> Excel</a>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Barang Masuk</h4>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form action="<?= base_url()."admin/tambah_barang"; ?>" method="post" enctype="multipart/form-data">
        
        <!-- inputan -->
        <label for="kd_barang">Kode Barang</label>
        <input type="text" name="kd_barang" class="form-control">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control">
        <label for="jml_barang">Jumlah Barang</label>
        <input type="number" min="1" name="jml_barang" class="form-control">
        <label for="harga_pcs">Harga Barang @pcs</label>
        <input type="number" min="1" name="harga_pcs" class="form-control">
        <!-- akhir inputan -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        <!-- akhir form -->
      </div>
    </div>
  </div>
</div>
<br><br>
<table class="table">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Harga @pcs</th>
        <th>Pengaturan</th>
    </tr>
    <?php $i=1; foreach($barang as $b) :?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $b['kd_barang']; ?></td>
        <td><?= $b['nama_barang']; ?></td>
        <td><?= $b['jml_barang']; ?></td>
        <td>Rp. <?= $b['harga_pcs']; ?></td>
        <td>
            <a href="<?= base_url()."admin/edit_barang/".$b['kd_barang']; ?>" class="btn btn-sm btn-success" style="color:white"><i class="far fa-edit"></i></a> <a href="<?= base_url()."admin/hapus_barang/".$b['kd_barang']; ?>" class="btn btn-sm btn-danger " style="color:white" onClick='return doconfirm()';><i class="far fa-trash-alt"></i></a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


<?php $this->load->view('templates/footer'); ?>