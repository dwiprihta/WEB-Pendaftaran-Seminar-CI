<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kp');
 
	}


 //LOGIN ADMIN//
	function index(){
		$this->load->view('umum/v_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => /*md5*/($password)
						);
		$cek = $this->m_kp->cek_login("tbl_admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama_admin' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			
			$rows = $this->db->query("SELECT * FROM tbl_admin where id='".$this->session->id."'")->row_array();
			redirect(base_url("index.php/home/home_admin"));
 
		}else{
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> MAAF USERNAME ATAU PASSWORD ANDA SALAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button></div>');
			redirect(base_url("index.php/login"));
		}
	}
 
	function logout(){
		$this->session->unset_userdata('npm');
		$this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
		$this->session->sess_destroy();
		redirect(base_url('index.php/umum'));
	}


	//LOGIN USER//
	function login_user(){
		$this->load->view('umum/V_login');
	}

	function aksi_login_user(){
		$data = array('username' => $this->input->post('npm', TRUE),
                        'password' => $this->input->post('password', TRUE));

        $hasil = $this->m_kp->cek_login($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['uid'] = $sess->uid;
                  $sess_data['npm'] = $sess->npm;
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level')=='admin') {
               redirect(base_url("index.php/home/home_admin"));
            }
            elseif ($this->session->userdata('level')=='user') {
                redirect(base_url("index.php/user/home_user"));
            }        
        }
        else {
           $this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> MAAF USERNAME ATAU PASSWORD ANDA SALAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button></div>');
			redirect(base_url("index.php/login/login_user"));
        }
    }


	function logout_user(){
		$this->session->unset_userdata('npm');
		$this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
		$this->session->sess_destroy();
		redirect(base_url('index.php/umum'));
	}
}

