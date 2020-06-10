<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	//CONSTRUCT
	function __construct(){
		parent::__construct();
		$this->load->model('m_kp');
		$this->load->library(array('session','pdf'));
		$this->load->helper(array('form','url','html','download'));
		$this->load->library('form_validation');

		if($this->session->userdata('level')!=="admin") {
           redirect(base_url("index.php/login/login_user"));
        }
		/*if ($this->session->userdata('status')!="Sudah Loggin"){
			redirect(base_url("index.php/login/login_user"));}*/
		
	}
		
		/*================INDEX================*/
		//INDEX_ADMIN
		public function home_admin(){
			$data['npm'] = $this->session->userdata('npm');
            $this->load->view('admin/v_header_admin',$data);
            $this->load->library('pagination');
            $this->load->view('admin/v_home_admin',$data);
            $this->load->view('v_footer');
		}

		//=================KP=================//

		//TAMPIL DATA KP
 		public function data_kp(){
 			$keyword=$this->input->post('keyword');
 			//start
 			$this->load->database();
			$jumlah_data = $this->m_kp->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/home/data_kp/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);

			// Membuat Style pagination untuk BootStrap v4
		     	$config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';
		        //Tambahan untuk styling

			$this->pagination->initialize($config);
			$data['tbl_kp'] = $this->m_kp->tampil_kp($config['per_page'],$from,$keyword);

			//end
			//$data['tbl_kp']=$this->m_kp->tampil_kp($keyword);
           	$this->load->view('admin/v_header_admin',$data);
            $this->load->view('kp/v_datakp',$data);
            $this->load->view('v_footer',$data);
		}
		
		//TAMBAH KP
		 public function add_kp(){
		 	if ($this->input->post('daftar')){
		 	$config['upload_path']         = 'assets/upload/';// folder upload 
            $config['allowed_types']        = 'zip|rar'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   $this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Data Gagal Ditambahkan, Pastikan Data yang Anda Inputkan Sesuai Instruksi! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('home/add_kp',$data);
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
				redirect('home/data_kp',$data);
			}

        	}
			       $dataperiode=$this->m_kp->getperiode();
			       $data['tbl_periode']=$dataperiode;

			       $datadosen=$this->m_kp->getdosen();
			       $data['tbl_dosen']=$datadosen;
			      
			      
            $this->load->view('admin/v_header_admin');
            $this->load->view('admin/v_formkp',$data);
            $this->load->view('v_footer');

		}

		//EDIT KP
		public function edit_kp($id){
			//aksi edit form kp
			if ($this->input->post('edit')){
	           $this->m_kp->aksi_edit_kp($id);
	           $this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/data_kp');
	    	}

		        //tampilkan data form yang akan diedit 
				$where =array('npm'=>$id);
				$data['tbl_kp']=$this->m_kp->edit_kp($where,'tbl_kp')->result();

				$dataperiode=$this->m_kp->getperiode();
			       $data['tbl_periode']=$dataperiode;

				$datadosen=$this->m_kp->getdosen();
			    $data['tbl_dosen']=$datadosen;


				$this->load->view('admin/v_header_admin',$data);
				$this->load->view('kp/v_edit_form_kp',$data);
				$this->load->view('v_footer',$data);				
		}

		//EDIT KP
		public function edit_berkas($id){
			//aksi edit form kp
			if ($this->input->post('edit')){
	           $this->m_kp->aksi_edit_berkas_adm($id);
	           $this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/data_kp');
	    	}

				$where =array('npm'=>$id);
				$data['tbl_kp']=$this->m_kp->edit_berkas($where,'tbl_kp')->result();
				$this->load->view('admin/v_header_admin',$data);
				$this->load->view('kp/v_edit_berkas',$data);
				$this->load->view('v_footer',$data);				
		}

		//HAPUS DATA KP
		public function hapus_kp($id){
			$where=array('npm'=>$id);
			$this->m_kp->hapus_kp($where,'tbl_kp');
			$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/data_kp');
	          }


	    //TAMPIL DETIL KP
		public function detil_kp($id){
			$where = array('npm'=>$id);
			$data['tbl_kp']=$this->m_kp->detil_kp($where,'tbl_kp')->result();
			$this->load->view('admin/v_header_admin',$data);
            $this->load->view('kp/v_detil_kp',$data);
            $this->load->view('v_footer',$data);
		}

		//CETAK DETIL KP
		public function data_bukti($id){
			$where = array('npm'=>$id);
			$data['tbl_kp']=$this->m_kp->detil_kp($where,'tbl_kp')->result();			
            $this->load->view('admin/v_bukti',$data);
		}


	//======================PERIODE============================//
		//PERIODE
		public function periode(){
			$keyword=$this->input->post('keyword');
 			//coba pagination
 			//start
 			$this->load->database();
			$jumlah_data = $this->m_kp->jumlah_data_periode();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/home/periode/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);

			// Membuat Style pagination untuk BootStrap v4
		     	$config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';
		        //Tambahan untuk styling

			$this->pagination->initialize($config);
			$data['tbl_periode'] = $this->m_kp->tampil_periode($config['per_page'],$from,$keyword);

			//end
			//$data['tbl_kp']=$this->m_kp->tampil_kp($keyword);
           	$this->load->view('admin/v_header_admin',$data);
            $this->load->view('admin/v_periode',$data);
            $this->load->view('v_footer',$data);
          
		}

		//	INPUT DATA PERIODE
		public function input_periode(){
			$data=array(
				'periode'=> $this->input->post('id'),
				'periode'=> $this->input->post('periode'));
				//'nama_dosen'=>$this->input->post('nama_dosen'));
				$this->m_kp->input_periode($data);
				$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		        redirect('home/periode');}

		//HAPUS DATA DOSEN
			public function hapus_periode($id){
			$where=array('id'=>$id);
			$this->m_kp->hapus_periode($where,'tbl_periode');
			$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/periode');
	          }




	//======================DOSEN============================//

		//DOSEN
		public function dosen(){
			$keyword=$this->input->post('keyword');
 			//coba pagination
 			//start
 			$this->load->database();
			$jumlah_data = $this->m_kp->jumlah_data_dosen();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/home/dosen/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);

			// Membuat Style pagination untuk BootStrap v4
		     	$config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';
		        //Tambahan untuk styling

			$this->pagination->initialize($config);
			$data['tbl_dosen'] = $this->m_kp->tampil_dosen($config['per_page'],$from,$keyword);

			//end
			//$data['tbl_kp']=$this->m_kp->tampil_kp($keyword);
           	$this->load->view('admin/v_header_admin',$data);
            $this->load->view('admin/v_data_dosen',$data);
            $this->load->view('v_footer',$data);
          
		}


		//	INPUT DATA DOSEN
		public function input_dosen(){
			$data=array(
				'nidn'=> $this->input->post('nidn'),
				'nama_dosen'=>$this->input->post('nama_dosen'));
				$this->m_kp->input_dosen($data);
				$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		        redirect('home/dosen');}


		//HAPUS DATA DOSEN
			public function hapus_dosen($id){
			$where=array('nidn'=>$id);
			$this->m_kp->hapus_member($where,'tbl_dosen');
			$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/dosen');
	          }

	//======================USER============================//

		//TAMPIL DATA MEMBER
		public function member(){
 			$keyword=$this->input->post('keyword');
 			//coba pagination
 			//start
 			$this->load->database();
			$jumlah_data = $this->m_kp->jumlah_data_member();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/home/member/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);

			// Membuat Style pagination untuk BootStrap v4
		     	$config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';
		        //Tambahan untuk styling

			$this->pagination->initialize($config);
			$data['v_user'] = $this->m_kp->tampil_member($config['per_page'],$from,$keyword);

			//end
			//$data['tbl_kp']=$this->m_kp->tampil_kp($keyword);
           	$this->load->view('admin/v_header_admin',$data);
            $this->load->view('admin/v_data_member',$data);
            $this->load->view('v_footer',$data);
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
 
			$this->session->set_userdata($data_session);
			$rows = $this->db->query("SELECT * FROM tbl_mhs where nim='".$this->session->id."'")->row_array();
            
            $data = array(            	
            		'npm'=>$npm,
            		'username'=>$user,
            		'password'=>$pass,	
            		'email'=>$email,
            		'level'=>$level,
            		'notif'=>$notif);	

           		$this->m_kp->input_member($data,'tbl_user');
           	 	$this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil Disimpan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('home/member',$data);;
			}else{
				//jika nim tidak terdaftar
        		$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> MAAF NPM BELUM TERDAFTAR SEBAGAI MAHASISWA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        		redirect('home/input_member',$data);;
			}

        	}
        	$this->load->view('admin/v_header_admin');
            $this->load->view('admin/v_daftar');
            $this->load->view('v_footer');
		}


		//EDIT MEMBER
		public function edit_member($id){

			//aksi edit form kp
			if ($this->input->post('edit')){
	           $this->m_kp->aksi_edit_member($id);
	           $this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/member');
	          }

	        //tampilkan data form yang akan diedit 
			$where =array('npm'=>$id);
			$data['tbl_user']=$this->m_kp->edit_member($where,'tbl_user')->result();
			$this->load->view('admin/v_header_admin',$data);
			$this->load->view('user/v_edit_user',$data);
			$this->load->view('v_footer',$data);				
		}


		//HAPUS DATA MEMBER
		public function hapus_member($id){
			$where=array('npm'=>$id);
			$this->m_kp->hapus_member($where,'tbl_user');
			$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/member');
	          }


//====================== MAHASISWA ============================//

		//TAMPIL DATA MAHASIWA
		public function mhs(){
 			$keyword=$this->input->post('keyword');
 			//coba pagination
 			//start
 			$this->load->database();
			$jumlah_data = $this->m_kp->jumlah_data_mhs();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/home/mhs/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);

			// Membuat Style pagination untuk BootStrap v4
		     	$config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';
		        //Tambahan untuk styling

			$this->pagination->initialize($config);
			$data['tbl_mhs'] = $this->m_kp->tampil_mhs($config['per_page'],$from,$keyword);

			//end
			//$data['tbl_kp']=$this->m_kp->tampil_kp($keyword);
           	$this->load->view('admin/v_header_admin',$data);
            $this->load->view('admin/v_data_mahasiswa',$data);
            $this->load->view('v_footer',$data);
		}

		//INPUT DATA MAHASISWA
		 public function input_mhs(){
		 	if ($this->input->post('daftar')){
            $nim=$this->input->post('nim');
            $nama=$this->input->post('nama_mhs');
            $jenkal=$this->input->post('jenkal');
            $jurusan=$this->input->post('jurusan');
            $angkatan=$this->input->post('angkatan');
            $tempat_lahir=$this->input->post('tempat_lahir');
            $tgl_lahir=$this->input->post('tgl_lahir');
            $kontak=$this->input->post('kontak');
            $alamat=$this->input->post('alamat');
            
            $data = array(            	
            		'nim'=>$nim,
            		'nama_mhs'=>$nama,
            		'jenkal'=> $jenkal,	
            		'jurusan'=>$jurusan,
            		'angkatan'=>$angkatan,	
           			'tempat_lahir'=>$tempat_lahir,
            		'tgl_lahir'=>$tgl_lahir,
            		'kontak'=>$kontak,	
            		'alamat'=> $alamat);	

           		$this->m_kp->input_mhs($data,'tbl_mhs');
           	 	$this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil Disimpan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('home/mhs',$data);;

        	}

        	$this->load->view('admin/v_header_admin');
            $this->load->view('admin/v_input_mhs');
            $this->load->view('v_footer');
           
		}

		//EDIT MAHASISWA
		public function edit_mhs($id){
			//aksi edit form kp
			if ($this->input->post('edit')){
	           $this->m_kp->aksi_edit_mhs($id);
	           $this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/mhs');
	          }

	        //tampilkan data form yang akan diedit 
			$where =array('nim'=>$id);
			$data['tbl_mhs']=$this->m_kp->edit_mhs($where,'tbl_mhs')->result();
			$this->load->view('admin/v_header_admin',$data);
			$this->load->view('admin/v_edit_mhs',$data);
			$this->load->view('v_footer',$data);				
		}


		//HAPUS DATA MAHASISWA
		public function hapus_mhs($id){
			$where=array('nim'=>$id);
			$this->m_kp->hapus_mhs($where,'tbl_mhs');
			$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/mhs');
	          }

	          //TAMPIL DETIL MAHASISWA
		public function detil_mhs($id){
			$where = array('nim'=>$id);
			$data['tbl_mhs']=$this->m_kp->detil_mhs($where,'tbl_mhs')->result();
			$this->load->view('admin/v_header_admin',$data);
            $this->load->view('admin/v_detil_mhs',$data);
            $this->load->view('v_footer',$data);
		}

	//=======================DATA ADMIN============================//

		//TAMPIL DATA ADMIN
		public function admin(){
 			$keyword=$this->input->post('keyword');
 			//coba pagination
 			//start
 			$this->load->database();
			$jumlah_data_admin = $this->m_kp->jumlah_data_admin();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/home/admin/';
			$config['total_rows'] = $jumlah_data_admin;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);

			// Membuat Style pagination untuk BootStrap v4
		     	$config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';
		        //Tambahan untuk styling

			$this->pagination->initialize($config);
			$data['v_admin'] = $this->m_kp->tampil_admin($config['per_page'],$from,$keyword);

			//end
			//$data['tbl_kp']=$this->m_kp->tampil_kp($keyword);
           	$this->load->view('admin/v_header_admin',$data);
            $this->load->view('admin/v_data_admin',$data);
            $this->load->view('v_footer',$data);
		}

		
		//INPUT DATA ADMIN
		 public function input_admin(){
		 	if ($this->input->post('daftar')){
		 	$id=$this->input->post('id');
            $user=$this->input->post('user');
            $pass=$this->input->post('pass');
            $email=$this->input->post('email');
            $level=$this->input->post('level');    
            
            $data = array(     
            		'npm'=>$id,       	
            		'username'=>$user,
            		'password'=>$pass,
            		'email'=>$email,
            		'level'=>$level);	

           		$this->m_kp->input_admin($data,'tbl_user');
           	 $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil disimpan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('home/admin',$data);;

        	}

            $this->load->view('admin/v_header_admin');
            $this->load->view('admin/v_add_admin');
            $this->load->view('v_footer');

		}

		//EDIT ADMIN
		public function edit_admin($id){

			//aksi edit form kp
			if ($this->input->post('edit')){
	           $this->m_kp->aksi_edit_admin($id);
	           $this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Data Berhasil dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/admin');
	          }

	        //tampilkan data form yang akan diedit 
			$where =array('npm'=>$id);
			$data['tbl_user']=$this->m_kp->edit_admin($where,'tbl_user')->result();
			$this->load->view('admin/v_header_admin',$data);
			$this->load->view('admin/v_edit_admin',$data);
			$this->load->view('v_footer',$data);				
		}


		//HAPUS DATA ADMIN
		public function hapus_admin($id){
			$where=array('npm'=>$id);
			$this->m_kp->hapus_admin($where,'tbl_user');
			$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/admin');
	          }


//=======================SETTING PERIODE======================//
			   function setting(){
			    	$this->load->view('admin/v_header_admin');
					$this->load->view('admin/v_setting_ta');
					$this->load->view('v_footer');
			    }

//=======================LAPORAN======================//

			   function sortir(){
			    	$this->load->view('admin/v_header_admin');
					$this->load->view('admin/v_sortir');
					$this->load->view('v_footer');
			    }

			   function sortir_rpt(){   		
					$keyword = $this->input->post('keyword');
					$data['tbl_kp']=$this->m_kp->get_kp_keyword($keyword);
					$this->load->view('admin/laporan',$data);

			   }

//=======================HITUNG DATA======================//
public function hitung_data()
{   
    $data['tbl_kp'] = $this->m_kp->hitungjumlahkp();
    $this->load->view('admin/v_home_admin',$data);
}


//=======================DOWNLOAD======================//

	function rekap_pdf(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,7,'DAFTAR SEMINAR KEJA PRAKTEK',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'PROGRAM STUDI SISTEM KOMPUTER',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(30,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,6,'NPM',1,0);
        $pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
        $pdf->Cell(27,6,'ANGKATAN',1,0);
        $pdf->Cell(85,6,'TEMPAT KP',1,0);
        $pdf->Cell(40,6,'TANGGAL SELESAI',1,1);
        $pdf->SetFont('Arial','',10);
        $tbl_kp = $this->db->get('tbl_kp')->result();
        foreach ($tbl_kp as $row){
            $pdf->Cell(20,6,$row->npm,1,0);
            $pdf->Cell(85,6,$row->nama,1,0);
            $pdf->Cell(27,6,$row->angkatan,1,0);
            $pdf->Cell(27,6,$row->tempat_kp,1,0);
            $pdf->Cell(25,6,$row->tgl_akhir_konsul,1,1); 
        }
        $pdf->Output();
    }

    //EDIT MEMBER
		public function input_notif($id){

			//aksi edit form kp
			if ($this->input->post('input')){
	           $this->m_kp->input_notif($id);
	           $this->session->set_flashdata('notif','<div class="alert alert-primary" role="alert"> Pemberitahuan berhasisl dikirim !!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	           redirect('home/member');
	          }

	        //tampilkan data form yang akan diedit 
			$where =array('npm'=>$id);
			$data['tbl_user']=$this->m_kp->notif($where,'tbl_user')->result();
			$this->load->view('admin/v_header_admin',$data);
			$this->load->view('admin/v_input_notif',$data);
			$this->load->view('v_footer',$data);				
		}

	public function download_berkas($id){
			if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->m_kp->getRows(array('npm' => $id));
            
            //file path
            $file = 'assets/upload/'.$fileInfo['berkas'];
            
            //download file from directory
            force_download($file, NULL);
        }
    }

    public function grafik(){
        $x['tbl_kp']=$this->m_kp->get_data_grafik1();
        $this->load->view('admin/v_header_admin',$x);
        $this->load->view('admin/v_home_admin',$x);
        $this->load->view('v_footer');
    }
}

