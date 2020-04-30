<?php $this->load->view('templates/header'); ?>
<!-- 
<h1><span class="lnr lnr-store"></span> Aplikasi Pencatatan Penjualan Barang</h1> -->
<br>
                            <div class="row">
								<div class="col-md-3">
									<div class="metric bg-primary"><i class="fa fa-shopping-bag " style="font-size:40px"> Stok</i>
										<p>
											<span style="font-size:30px" class="number"> <b><?= $jml_barang; ?></b></span>
											<span style="font-size:20px" class="title"><a href="<?php echo base_url().'admin/stok_barang'?>" style="color:white">Lihat Detail</a></span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric bg-warning" style="color:white">
										<i class="fa fa-shopping-cart" style="font-size:40px"> Terjual</i>
										<p>
											<span class="number" style="font-size:30px"><b><?= $penjualan; ?></b></span>
											<span class="title" style="font-size:20px"><a href="<?php echo base_url().'admin/riwayat_penjualan'?>" style="color:white">Lihat Detail</a>l</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric bg-success" style="color:white	">
										<i class="fa fa-bar-chart" style="font-size:40px"> Income</i>
										<p>
											<span style="font-size:30px" class="number"> <b> Rp. <?= $penghasilan; ?> </b></span>
											<span style="font-size:20px" class="title"><a href="<?php echo base_url().'admin/laporan_uang_masuk'?>" style="color:white">Lihat Detail</a></span>
										</p>
									</div>
								</div>
							</div>


<?php $this->load->view('templates/footer'); ?>