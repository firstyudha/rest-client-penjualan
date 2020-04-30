<?php
class Export extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(['barang_model','penjualan_model']);
        $this->load->helper('url');
    }
 
    function barang_masuk($export){
        $fetch = $this->barang_model->tampil_barang();
        $hasil = $fetch['data'];
        $data['barang'] =  $hasil;
        $data['export'] = $export;
        $this->load->view('print_barang_masuk',$data);
    }

    function uang_masuk($export){ 
        $fetch = $this->penjualan_model->tampil_pemasukan();
        $hasil = $fetch['data'];
        $data['penjualan'] = $hasil;
        $data['export'] = $export;
        $this->load->view('print_uang_masuk',$data);
    }

    function barang_keluar($export){
        $fetch = $this->penjualan_model->tampil_riwayat_barang_keluar();
        $hasil = $fetch['data'];
        $data['riwayat_brg'] = $hasil; 
        $data['export'] = $export;
        $this->load->view('print_barang_keluar',$data);
    }

    function penjualan($export){
        $fetch = $this->penjualan_model->tampil_riwayat_penjualan();
        $hasil = $fetch['data'];
        $data['riwayat_pj'] = $hasil;
        $data['export'] = $export;
        $this->load->view('print_riwayat_penjualan',$data);
    }

    function stok($export){   
        $fetch = $this->barang_model->tampil_stok_barang();
        $hasil = $fetch['data'];
        $data['stok_brg'] = $hasil;
        $data['export'] = $export;
        $this->load->view('print_stok_barang',$data);
    }
 
 
}