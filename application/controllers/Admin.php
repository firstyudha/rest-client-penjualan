<?php

class Admin extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
      }else{
          $this->load->helper(array('url','form'));
          $this->load->model(array('barang_model','penjualan_model'));
      }
  }
 
  function index(){

    $fetchQT = $this->penjualan_model->QT();
    $fetchJml = $this->penjualan_model->Jml();

    $jumlah = $fetchQT['data'][0]['qty'];
    $penghasilan = $fetchQT['data'][0]['total_bayar'];
    $jml_barang = $fetchJml['data'][0]['jml_barang'];
    
    $data['penjualan'] = $jumlah;
    $data['penghasilan'] = $penghasilan;
    $data['jml_barang'] = $jml_barang;
    $this->load->view('v_dashboard',$data);
    
  }

  function barang_masuk(){
      $fetch = $this->barang_model->tampil_barang();
      $hasil = $fetch['data'];
      $data['barang'] =  $hasil;
      $data['error'] = '';
      $this->load->view('v_barang_masuk',$data);
  }

  function tambah_barang(){
    
      $this->barang_model->insertBarang();
      $this->session->set_flashdata('msg','Barang Berhasil Ditambahkan');
      redirect('admin/barang_masuk');
  
  }


  function edit_barang($kd_barang){
    $fetch = $this->barang_model->edit_data($kd_barang);
    $hasil = $fetch;

    $data['barang'] = $hasil;
    $data['error'] = '';
    $this->load->view('v_edit_barang_masuk',$data);
  }

  function hapus_barang($id){
      
      $this->barang_model->hapus_data($id);
      $this->session->set_flashdata('msg', 'Data berhasil dihapus');

      redirect('admin/barang_masuk');
  }

  function update_barang(){

        $data = array(
                    'kd_barang' => $this->input->post('kd_barang'),
                    'nama_barang' => $this->input->post('nama_barang'),
                    'jml_barang' => $this->input->post('jml_barang'),
                    'harga_pcs' => $this->input->post('harga_pcs'),
                    'tanggal_masuk' => $this->input->post('tanggal_masuk')
                );
        $where = array(
				  'kd_barang' => $this->input->post('kd_barang')
        );
        
        $this->barang_model->update_data($where,$data,'barang');
        $this->session->set_flashdata('msg','Data Berhasil Diperbaharui');
        redirect('admin/barang_masuk');
    
  }

  //PENJUALAN
  function penjualan(){
    $fetch = $this->penjualan_model->cekkodepenjualan();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
    $query = $fetch['data'][0]['kodepenjualan'];
    
    $nourut = substr($query, 3, 4);
    $kodePenjualanSekarang = $nourut + 1;
    $data['kd_penjualan'] = $kodePenjualanSekarang;
    
    $fetch2 = $this->barang_model->get_kode_barang();
    $hasil = $fetch2['data'];
    $data['barang'] = $hasil;
    $this->load->view('v_penjualan',$data);
    
  }

  function tambah_penjualan(){
        
    $this->penjualan_model->insertPenjualan();

   $this->session->set_flashdata('msg','Transaksi Berhasil');
    redirect('admin/penjualan');

  }
  
  function laporan_uang_masuk(){
    $fetch = $this->penjualan_model->tampil_pemasukan();
    $hasil = $fetch['data'];
    $data['penjualan'] = $hasil;
    $this->load->view('v_laporan_uang_masuk',$data);
  }

  function riwayat_barang_keluar(){
    $fetch = $this->penjualan_model->tampil_riwayat_barang_keluar();
    $hasil = $fetch['data'];
    $data['riwayat_brg'] = $hasil;
    $this->load->view('v_riwayat_barang_keluar',$data);
  }

  function riwayat_penjualan(){
    $fetch = $this->penjualan_model->tampil_riwayat_penjualan();
    $hasil = $fetch['data'];
    $data['riwayat_pj'] = $hasil;
    $this->load->view('v_riwayat_penjualan',$data);
  }

  function stok_barang(){
    $fetch = $this->barang_model->tampil_stok_barang();
    $hasil = $fetch['data'];
    $data['stok_brg'] = $hasil;
    $this->load->view('v_stok_barang',$data);
  }

}


