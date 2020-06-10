<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
<div class="jumbotron"> 

<?=$this->session->flashdata('notif')?><br>

  <div  class="alert alert-primary" role="alert"><h5 class="display-5"><span class='fa fa-user' aria-hidden='true'></span> Selamat Datang! <?php $rows = $this->db->query("SELECT * FROM tbl_user where npm='".$this->session->npm."'")->row_array();
  {
  	echo $rows['username'];
  } ?></h1>


  <p class="lead"></p></div>
   <div class="alert alert-danger" role="alert"><h5 class="display-5"> <a data-toggle="modal" data-target="#not" href="<?php echo base_url('');?>" style="margin-right: 10px ;"  class="btn btn-danger"><span class='fa fa-heart' aria-hidden='true'></span> PENGUMUMAN </a></h5></p> </h1>
  <p class="lead"></p></div>

 


  <hr class="my-4">
  <center><p>klik tombol dibawah ini untuk mulai mengisi form pendaftaran seminar kerja praktek</p></center>
  <center><p class="lead">
    <a class="btn btn-success btn-lg" href="<?php echo base_url('index.php/user/add_kp'); ?>" role="button"><span class='fa fa-pencil' aria-hidden='true'></span> DAFTAR SEMINAR</a></p>
  </p>
</div></div>



 <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="not" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header"><h4 class="modal-title"><center>PENGUMUMAN</center></h4>
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>   
              </div>
              <form class="form-horizontal" action="<?php echo base_url('index.php/home/input_dosen')?>" method="post" enctype="">
                 <div class="modal-body">
               <?php $rows = $this->db->query("SELECT * FROM tbl_user where npm='".$this->session->npm."'")->row_array();{
                if ($this->session->notif!== 0){
                      echo $rows['notif'];}
                      else{
                      echo "<b><h6> BELUM ADA PENGUMUMAN</h4></6>";}
                }?>
                         </h1>

                    <div class="modal-footer">
                        <button type="button" type="reset" class="btn btn-warning" data-dismiss="modal"> Tutup</button>
                    </div>
                 
                </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->

  


