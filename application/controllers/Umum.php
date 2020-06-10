<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum extends CI_Controller{
	//CONSTRUCT
	function __construct(){
		parent::__construct();
		$this->load->model('m_kp');
		$this->load->library(array('session','pdf'));
		$this->load->helper(array('form','url','html','download'));
		$this->load->library('form_validation');

		/*if ($this->session->userdata('status')!="login"){
			redirect(base_url("index.php/login/login_user"));}*/
		
	}
		/*================UMUM================*/

		//INDEX
		 public function index(){
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_banner');
		}

		//INPUT LOGIN
		public function login(){
			$this->load->view('umum/v_login');
		}

		//INPUT DATA MEMBER
		 public function input_member(){
		 	if ($this->input->post('daftar')){
            $npm=$this->input->post('npm');
            $user=$this->input->post('username');
            $pass=$this->input->post('password');
            $email=$this->input->post('email');
            $level=$this->input->post('level_user');
            $notif=$this->input->post('notif');

            //mulai koding validasi
            $where = array(
			'nim' => $npm);

			$cek = $this->m_kp->cek_mhs("tbl_mhs",$where)->num_rows();
			if($cek > 0){
 				
			//$this->session->set_userdata($data_session);
			$rows = $this->db->query("SELECT * FROM tbl_mhs where nim='".$this->session->id."'")->row_array();
			
            //mulai koding validasi
            //jika data ada maka simpan data
            $data = array(            	
            		'npm'=>$npm,
            		'username'=>$user,
            		'password'=>$pass,	
            		'email'=>$email,
            		'level'=>$level,
            		'notif'=>$notif );	
           		$this->m_kp->input_member($data,'tbl_user');
           	 	$this->session->set_flashdata('notif','<div class="alert alert-dismissible alert-primary">
  				<button type="button" class="close" data-dismiss="alert"></button>
 				<strong>Selamat Anda Sudah Memiliki Account!</strong><a href="login" class="alert-link"> <b>Login Sekarang!</b></a>
				</div>');
				redirect('umum/input_member',$data);;
        	}else{
        		//jika nim tidak terdaftar
        		$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> MAAF NPM ANDA BELUM TERDAFTAR SEBAGAI MAHASISWA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button></div>');
        		redirect('umum/input_member',$data);;
        	}}
            $this->load->view('umum/v_daftar');
		}

		//DOWNLOAD 1
		public function download_syarat_kp(){
		force_download('assets/doc/PERSYARATAN KP.PDF',NULL);
		}


		//DOWNLOAD 1
		public function download_seminar(){
		force_download('assets/doc/PERSYARATAN SEMINAR KERJA PRAKTEK.PDF',NULL);
		}


		//DOWNLOAD 1
		public function download_fkp(){
		force_download('assets/doc/FORMULIR PENDAFTARAN KP.PDF',NULL);
		}


		//DOWNLOAD 1
		public function download_fseminar(){
		force_download('assets/doc/FORMULIR PENDAFTARAN SEMINAR.PDF',NULL);
		}

		//DOWNLOAD 1
		public function download_ffrm(){
		force_download('assets/doc/PANDUAN PENGISIAN FORMULIR.pdf',NULL);
		}
	}