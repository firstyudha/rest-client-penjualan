<?php

use GuzzleHttp\Client;

class Penjualan_model extends CI_Model{
	private $_client;

	function __construct(){
		parent:: __construct();
		$this->_client = new Client([
            'base_uri' => 'http://localhost/ci_penjualan_restserver/api/'
        ]);
	}

	public function cekkodepenjualan()
    {
        $response = $this->_client->request('GET','penjualan/KodePenjualan',
       [
            'query' => [
                'keyapipenjualan' => 'p3nju4l4n'
            ]
       ]);

       return $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'];
    }

    
    function tampil_pemasukan(){
		$response = $this->_client->request('GET','penjualan/pemasukan',
       [
            'query' => [
                'keyapipenjualan' => 'p3nju4l4n'
            ]
       ]);

       return $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'];
	 }
    
    function tampil_riwayat_barang_keluar(){
		$response = $this->_client->request('GET','penjualan/barangKeluar',
       [
            'query' => [
                'keyapipenjualan' => 'p3nju4l4n'
            ]
       ]);

       return $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'];
	}
    
    function tampil_riwayat_penjualan(){
		$response = $this->_client->request('GET','penjualan',
       [
            'query' => [
                'keyapipenjualan' => 'p3nju4l4n'
            ]
       ]);

       return $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'];
    }
    
    function QT(){
		$response = $this->_client->request('GET','penjualan/QT',
       [
            'query' => [
                'keyapipenjualan' => 'p3nju4l4n'
            ]
       ]);

       return $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'];
    }
    
    function Jml(){
		$response = $this->_client->request('GET','penjualan/Jml',
       [
            'query' => [
                'keyapipenjualan' => 'p3nju4l4n'
            ]
       ]);

       return $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'];
	}

    function insertPenjualan(){
		$data = [
            'keyapipenjualan' => 'p3nju4l4n',
            'kd_penjualan' => (string) $this->input->post('kd_penjualan'),
            'kd_barang' => (string) $this->input->post('kd_barang'),
			'qty' => (int)$this->input->post('qty'),
            'total_bayar' => (int)$this->input->post('total_bayar'),
            'tanggal_penjualan' => (string) $this->input->post('tanggal_penjualan')
        ];

    

        $response = $this->_client->request('POST','http://localhost/ci_penjualan_restserver/api/penjualan',[
            
            'form_params' => $data
           
        ]);

        

       $result = json_decode($response->getBody()->getContents(), true);
        return $result;
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where)->result();
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


}
?>