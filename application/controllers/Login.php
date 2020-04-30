<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url');
    }
 
    function index(){
        $this->load->view('v_login');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_admin = $this->login_model->auth_admin($username,$password);
 
        if($cek_admin->num_rows() > 0){ 
                     
            $this->session->set_userdata('masuk',TRUE);
            $this->session->set_userdata([
                'masuk' => TRUE,
                'username' => $username
            ]);
            
            redirect('admin');
 
        }else{
            redirect('login');
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}