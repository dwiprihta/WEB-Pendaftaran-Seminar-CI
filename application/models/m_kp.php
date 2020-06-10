<?php 
 class M_kp extends CI_Model{

 //======================LOGIN==========================//
  function cek_login($data){    
    /*return $this->db->get_where($table,$where);*/
     $query = $this->db->get_where('tbl_user', $data);
            return $query;

  }

  function cek_mhs($table,$where){    
    return $this->db->get_where($table,$where);
  }

 //======================KP==========================//

	//TAMPIL DATA KP
	   function tampil_kp($number,$offset,$keyword){
            $this->db->select('*');
           //$this->db->from('tbl_kp');
            $this->db->like('nama',$keyword);
            $this->db->or_like('npm',$keyword);
            $this->db->or_like('angkatan',$keyword);
            return $query=$this->db->get('tbl_kp',$number,$offset)->result();
	    }
      //tentukan jumlah data
      function jumlah_data(){
            return $this->db->get('tbl_kp')->num_rows();
      }


      //DETIL KP
      function detil_kp($where,$table){
            return $this->db->get_where($table,$where);
      }

    //INPUT DENGAN GAMBAR
      public function insert($data){
      $this->db->insert('tbl_kp',$data);
    }

    //TAMPIL EDIY DENGAN GAMBAR
    public function tampil_edit($data){
      $this->db->get('tbl_kp')->result();
    }

    	//INPUT KP
    	function input_kp($data,$table){
    		$this->db->insert($table,$data);
    	}

    	//EDIT KP
    	function edit_kp($where,$table){
    		return $this->db->get_where($table,$where);
          }
          
      //EDIT BERKAS
    	function edit_berkas($where,$table){
            return $this->db->get_where($table,$where);
      }

    	//AKSI EDIT KP ADMIN
    	function aksi_edit_kp($id){
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
            //$file = $this->upload->data();              
            $gambar=$this->input->post('berkas');
           
            $data = array(
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

    $this->db->where('npm',$id);
    $this->db->update('tbl_kp',$data);
  }

          



          //AKSI EDIT KP USER
      /*function aksi_edit_kp_user($id){
         $config['upload_path']         = 'assets/upload/';  // folder upload 
            $config['allowed_types']        = 'zip|rar|gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                  $this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Data Gagal Diubah, Pastikan Data yang Anda Inputkan Sesuai Instruksi! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('user/detil_user',$data);
            }
            else
            {
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
                $file = $this->upload->data();
                $gambar = $file['file_name'];


                $data = array(
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

        $this->db->where('npm',$id);
        $this->db->update('tbl_kp',$data);
      }}*/

      //EDIT KP USER
      function aksi_edit_kp_user($id){
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
                   //$file = $this->upload->data();              
                   $gambar=$this->input->post('berkas');
                  
                   $data = array(
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
   
           $this->db->where('npm',$id);
           $this->db->update('tbl_kp',$data);
         }

// UPDATE BERKAS
 function aksi_edit_berkas($id){
            $config['upload_path']         = 'assets/upload/';  // folder upload 
               $config['allowed_types']        = 'zip|rar'; // jenis file
               $config['max_size']             = 2000;
               $config['max_width']            = 1024;
               $config['max_height']           = 768;
    
               $this->load->library('upload', $config);
    
               if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
               {
                     $this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Data Gagal Diubah, Pastikan Data yang Anda Inputkan Sesuai Instruksi! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
           redirect('user/detil_user',$data);
               }
               else
               {
           $npm=$this->input->post('npm');
                   $file = $this->upload->data();
                   $gambar = $file['file_name'];

                   $data = array(
                       'berkas' => $gambar);
   
           $this->db->where('npm',$id);
           $this->db->update('tbl_kp',$data);
         }}

         // UPDATE BERKAS
 function aksi_edit_berkas_adm($id){
      $config['upload_path']         = 'assets/upload/';  // folder upload 
         $config['allowed_types']        = 'zip|rar'; // jenis file
         $config['max_size']             = 2000;
         $config['max_width']            = 1024;
         $config['max_height']           = 768;

         $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
         {
               $this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Data Gagal Diubah, Pastikan Data yang Anda Inputkan Sesuai Instruksi! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
     redirect('home/data_kp',$data);
         }
         else
         {
     $npm=$this->input->post('npm');
             $file = $this->upload->data();
             $gambar = $file['file_name'];

             $data = array(
                 'berkas' => $gambar);

     $this->db->where('npm',$id);
     $this->db->update('tbl_kp',$data);
   }}

    //HAPUS KP
      function hapus_kp($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
      }

      //======================ADMN==========================//
      //TAMPIL DATA ADMIN
      function tampil_admin($number,$offset,$keyword){
            $this->db->select('*');
           //$this->db->from('tbl_kp');
            $this->db->like('npm',$keyword);
            $this->db->or_like('username',$keyword);
            return $query=$this->db->get('v_admin',$number,$offset)->result();
            //return $this->db->get()->result();
      }
      //tentukan jumlah data
      function jumlah_data_admin(){
            return $this->db->get('v_admin')->num_rows();
      }

     //INPUT ADMIN
      function input_admin($data,$table){
            $this->db->insert($table,$data);
      }

      //EDIT ADMIN
      function edit_admin($where,$table){
            return $this->db->get_where($table,$where);
      }

      //AKSI EDIT ADMIN
      function aksi_edit_admin($id){
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

            $this->db->where('npm',$id);
            $this->db->update('tbl_user',$data);
      }

      //HAPUS ADMIN
       function hapus_admin($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
      }


 //======================USER==========================//

      //TAMPIL DATA MEMBER
      function tampil_member($number,$offset,$keyword){
            $this->db->select('*');
           //$this->db->from('tbl_kp');
            $this->db->like('npm',$keyword);
            $this->db->or_like('username',$keyword);
            return $query=$this->db->get('v_user',$number,$offset)->result();
            //return $this->db->get()->result();
      }

      //jumlaha tampil data
      function jumlah_data_member(){
            return $this->db->get('v_user')->num_rows();
      }

      //INPUT MEMBER
      function input_member($data,$table){
            $this->db->insert($table,$data);
      }

       //EDIT MEMBER
      function edit_member($where,$table){
            return $this->db->get_where($table,$where);
      }

      //AKSI EDIT MEMBER
      function aksi_edit_member($id){

            $user=$this->input->post('username');
            $pass=$this->input->post('password');
            $email=$this->input->post('email');
            
            $data = array(     

                        'username'=>$user,
                        'password'=>$pass,
                        'email'=> $email);

            $this->db->where('npm',$id);
            $this->db->update('tbl_user',$data);
      }


      //HAPUS MEMBER
      function hapus_member($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
      }


      //======================MAHASISWA==========================//

      //TAMPIL DATA MAHASISWA
      function tampil_mhs($number,$offset,$keyword){
            $this->db->select('*');
           //$this->db->from('tbl_kp');
            $this->db->like('nim',$keyword);
            $this->db->or_like('nama_mhs',$keyword);
            $this->db->or_like('angkatan',$keyword);
            return $query=$this->db->get('tbl_mhs',$number,$offset)->result();
            //return $this->db->get()->result();
      }

      //jumlaha tampil data
      function jumlah_data_mhs(){
            return $this->db->get('tbl_mhs')->num_rows();
      }

      //INPUT MAHASISWA
      function input_mhs($data,$table){
            $this->db->insert($table,$data);
      }

       //EDIT MAHASISWA
      function edit_mhs($where,$table){
            return $this->db->get_where($table,$where);
      }

      //AKSI EDIT MAHASISWA
      function aksi_edit_mhs($id){
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


            $this->db->where('nim',$id);
            $this->db->update('tbl_mhs',$data);
      }

      //HAPUS MAHASISWA
      function hapus_mhs($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
      }

      //DETIL KP
      function detil_mhs($where,$table){
            return $this->db->get_where($table,$where);
      }

       //======================PERIODE==========================//

        //TAMPIL DATA DOSEN
      function tampil_PERIODE($number,$offset,$keyword){
            $this->db->select('*');
           //$this->db->from('tbl_kp');
            $this->db->like('periode',$keyword);
              $this->db->order_by('periode', 'desc');   
            return $query=$this->db->get('tbl_periode',$number,$offset)->result();
            //return $this->db->get()->result();
      }

      //tentukan jumlah data
      function jumlah_data_periode(){
            return $this->db->get('tbl_periode')->num_rows();
      }

      //simpan data dosen
      function input_periode($data){
            return $this->db->insert('tbl_periode', $data);
      }

      //hapus dosen
      function hapus_periode($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
      }

       //======================DOSEN==========================//

      //TAMPIL DATA DOSEN
      function tampil_dosen($number,$offset,$keyword){
            $this->db->select('*');
           //$this->db->from('tbl_kp');
            $this->db->like('nidn',$keyword);
            $this->db->or_like('nama_dosen',$keyword);
            return $query=$this->db->get('tbl_dosen',$number,$offset)->result();
            //return $this->db->get()->result();
      }

      //tentukan jumlah data
      function jumlah_data_dosen(){
            return $this->db->get('tbl_dosen')->num_rows();
      }

      //simpan data dosen
      function input_dosen($data){
            return $this->db->insert('tbl_dosen', $data);
      }

      //hapus dosen
      function hapus_dosen($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
      }

      //======================DROPDOWN==========================//
      function getdosen(){
            $query="select * from tbl_dosen";
            $q=$this->db->query($query);
            if ($q->num_rows()>0){
              foreach($q->result() as $row){
                $data[]=$row;
              }
              return $data;
            }

      }

       //======================DROPDOWN==========================//
      function getperiode(){
            $query="select * from tbl_periode order by periode DESC";
            $q=$this->db->query($query);
            if ($q->num_rows()>0){
              foreach($q->result() as $row){
                $data[]=$row;
              }
              return $data;
            }

      }


      //======================SORTIR LAPORAN==========================//
      function get_kp_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tbl_kp');
        $this->db->like('angkatan',$keyword);
        $this->db->or_like('dosen',$keyword);
        return $this->db->get()->result();
  }

  //===========================DETIL LOGIN================================//
  function detil_login($where,$table){
            return $this->db->get_where($table,$where);
      }

//=======================HITUNG DATA======================//
  public function hitungjumlahkp(){   
   $query = $this->db->get('tbl_kp');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function input_berkas($data){
            $this->db->insert('tbl_berkas',$data);
      }

public function update($data,$where){
  $this->db->update('tbl_kp',$data,$where);
}

public function get_by_id($id){
  return $this->db->get_where('tbl_kp',array('npm'=>$Id))->row();;
}

    //EDIT ADMIN
      public function notif($where,$table){
            return $this->db->get_where($table,$where);
      }

      //AKSI EDIT ADMIN
      public function input_notif($id){
          $id=$this->input->post('npm');
            $user=$this->input->post('user');
            $pass=$this->input->post('pass');
            $email=$this->input->post('email');
            $level=$this->input->post('level');
              $berita=$this->input->post('berita');    
            
            $data = array(     
                'npm'=>$id,         
                'username'=>$user,
                'password'=>$pass,
                'email'=>$email,
                'notif'=>$berita);

            $this->db->where('npm',$id);
            $this->db->update('tbl_user',$data);
      }

    //DETIL bks
      public function detil_bks($where,$table){
            return $this->db->get_where($table,$where);
      }

      public function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_kp');
        //$this->db->where('status','1');
        //$this->db->order_by('created','desc');
        if(array_key_exists('npm',$params) && !empty($params['npm'])){
            $this->db->where('npm',$params['npm']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }

function get_data_grafik1(){
        $query = $this->db->query("SELECT angkatan FROM tbl_kp GROUP BY angkatan");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }


}



