<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }
 
    function index(){
        $this->load->view('v_login');
    }
 
    function auth(){
        $username=$this->input->post('username',TRUE);
        $password=$this->input->post('password',TRUE);
 
        $cek_admin=$this->Login_model->auth_admin($username,$password);
 
        if($cek_admin->num_rows() > 0){ //jika login sebagai admin
                    $data=$cek_admin->row_array();
                // $this->session->set_userdata('masuk',TRUE);
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('home');
 
        }else if($cek_admin->num_rows() == 0){ //jika login sebagai guru
                    $cek_guru=$this->Login_model->auth_guru($username,$password);
                    if($cek_guru->num_rows() > 0){
                            $data=$cek_guru->row_array();
                            $this->session->set_userdata('akses','2');
                            $this->session->set_userdata('ses_id',$data['nip']);
                            $this->session->set_userdata('ses_nama',$data['nama']);
                            redirect('guru');
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}