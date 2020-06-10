<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	//CONSTRUCT
	function __construct(){
		parent::__construct();
		$this->load->model('m_kp');
		$this->load->library(array('session','pdf'));
		$this->load->helper(array('form','url','html','download'));
		$this->load->library('form_validation');

		if($this->session->userdata('level')!=="user") {
           redirect(base_url("index.php/login/login_user"));
        }
		/*if ($this->session->userdata('status')!="login"){
			redirect(base_url("index.php/login/login_user"));}*/

			
		
	}


		/*================USER================*/
		//DAFTAR
		  public function add_kp(){
		 	if ($this->input->post('daftar')){
		 		$config['upload_path']         = 'assets/upload/';  // folder upload 
            $config['allowed_types']        = 'zip|rar'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
             $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"> Data Gagal Ditambahkan, Pastikan Semua Data yang Anda Inputkan Sudah Sesuai Instruksi ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('user/add_kp',$data);
             }else{
            $npm=$this->input->post('npm');
            $nama=$this->input->post('nama');
            $angkatan=$this->input->post('angkatan');
            $smt=$this->input->post('smt');
            $progdi=$this->input->post('progdi');
            $tgl_awal_kp=$this->input->post('tgl_awal_kp');
            $tgl_akhir_kp=$this->input->post('tgl_akhir_kp');
            $tempat_kp=$this->input->post('tempat_kp');
            $tgl_awal_konsul=$this->input->post('tgl_awal_konsul');
            $tgl_akhir_konsul=$this->input->post('tgl_akhir_konsul');
            $judul_kp=$this->input->post('judul_kp');
            $dosen=$this->input->post('nidn');
            $periode=$this->input->post('periode');
             $file = $this->upload->data();
            $gambar = $file['file_name'];

            $data = array(
            		'npm'=>$npm,
            		'nama'=>$nama,
            		'angkatan'=>$angkatan,
            		'smt'=>$smt,
            		'progdi'=>$progdi,
            		'tgl_awal_kp'=>$tgl_awal_kp,
            		'tgl_akhir_kp'=>$tgl_akhir_kp,
            		'tempat_kp'=>$tempat_kp,
            		'tgl_awal_konsul'=>$tgl_awal_konsul,
            		'tgl_akhir_konsul'=>$tgl_akhir_konsul,
            		'judul_kp'=>$judul_kp,
            		'dosen'=>$dosen,
            		'periode'=>$periode,
            		'berkas' => $gambar);

          		 $this->m_kp->input_kp($data,'tbl_kp');
            	$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil disimpan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('user/detil_user',$data);

        	}}

        			$dataperiode=$this->m_kp->getperiode();
			       $data['tbl_periode']=$dataperiode;


			       $datadosen=$this->m_kp->getdosen();
			       $data['tbl_dosen']=$datadosen;
			      
            $this->load->view('user/V_header_user');
            $this->load->view('kp/v_formkp',$data);
            $this->load->view('v_footer');

		}


		//EDIT KP
		public function edit_kp($id){
			//aksi edit form kp
			if ($this->input->post('edit')){
	           $this->m_kp->aksi_edit_kp_user($id);
	           $this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           	   redirect('user/detil_user');
	    	}

	    		$dataperiode=$this->m_kp->getperiode();
			       $data['tbl_periode']=$dataperiode;

			    $datadosen=$this->m_kp->getdosen();
			    $data['tbl_dosen']=$datadosen;
		        //tampilkan data form yang akan diedit 
				$where =array('npm'=>$id);
				$data['tbl_kp']=$this->m_kp->edit_kp($where,'tbl_kp')->result();
				$this->load->view('user/V_header_user',$data);
				$this->load->view('kp/v_edit_form_kp',$data);
				$this->load->view('v_footer',$data);				
		}

		//EDIT BERKAS
		public function edit_berkas($id){
			//aksi edit form kp
			if ($this->input->post('edit')){
	           $this->m_kp->aksi_edit_berkas($id);
	           $this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           	   redirect('user/detil_user');
	    	}

	  		//tampilkan data form yang akan diedit 
			$where =array('npm'=>$id);
			$data['tbl_kp']=$this->m_kp->edit_berkas($where,'tbl_kp')->result();
			$this->load->view('user/V_header_user',$data);
			$this->load->view('kp/v_edit_berkas',$data);
			$this->load->view('v_footer',$data);				
		}

		//EDIT MEMBER
		public function edit_member($id){
			//aksi edit form kp
			if ($this->input->post('edit')){
	           $this->m_kp->aksi_edit_member($id);
	           $this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('user/home_user');
	          }

	        //tampilkan data form yang akan diedit 
			$where =array('npm'=>$id);
			$data['tbl_user']=$this->m_kp->edit_member($where,'tbl_user')->result();
			$this->load->view('user/V_header_user',$data);
			$this->load->view('user/v_edit_user',$data);
			$this->load->view('v_footer',$data);				
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


		/*================USER================*/
		
		//INDEX_USER
		public function home_user(){
			$data['username'] = $this->session->userdata('username');
            $this->load->view('user/V_header_user',$data);
            $this->load->view('user/v_home_user',$data);
            $this->load->view('v_footer',$data);
		}


		//USER_ADD_KP
		public function detil_user(){
            $this->load->view('user/V_header_user');
            $this->load->view('user/v_detil_user');
            $this->load->view('v_footer');
		}

		//=======================COMBO======================//
	          function tbl_dosen()
			    {
			       $this->load->model('m_kp');
			       $datadosen=$this->m_kp->getdosen();
			       $data['tbl_dosen']=$datadosen;
			       $this->load->view('kp/v_formkp',$data);
			    }

		//=======================LAPORAN======================//
			    function data_bukti(){   				
           			 $this->load->view('user/laporan');

			   }
      
}
