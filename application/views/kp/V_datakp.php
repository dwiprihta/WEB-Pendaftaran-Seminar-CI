
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
      <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-book" aria-hidden="true"></i> DATA PENDAFTAR KERJA PRAKTEK</div>
        <div class="card-body"  style="background-color: #fff;">

		      <div class="widget-wrap" style="color:#666;">

		          <div class="row">
			           <div class="col-lg-8">
			             <form action="<?php echo base_url('index.php/home/data_kp');?>" method="post" class="form-inline my-2 my-lg-0" style="margin-left: 15PX;">
      		        	<input class="form-control mr-sm-2" type="text" placeholder="Search" name="keyword">
      			       <button class="btn btn-success my-2 my-sm-0" type="submit" name="cari"><span class='fa fa-search' aria-hidden='true'></span> </button>
   			          </form>
   			        </div>

   				       <div class="col-lg-" style="margin-left:50px;">       
   				         <a class="btn btn-primary" href="<?php echo base_url('index.php/home/add_kp');?>" style="margin-right: 10px ;" ><span class='fa fa-plus' aria-hidden='true'></span> Tambah</a>
   				         <a class="btn btn-warning" href="<?php echo base_url('index.php/home/data_kp');?>" style="margin-right: 10px ;"  ><span class='fa fa-refresh' aria-hidden='true'></span> Refresh</a>
   				       </div>
    		       </div>

                
               <div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               <?=$this->session->flashdata('notif')?></div></div>

		          <div class="single-sidebar-widget user-info-widget">
						    <div class="row">
                  <table class="table table-striped table table-hover">
                     <thead style="background: orange; color: #fff;">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">NPM</th>
                          <th scope="col">NAMA</th>
                          <th scope="col">ANGKATAN</th>
                          <th scope="col">OPERASI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--PHP CODE-->
                        <?php 
                         $no=1;
                         $i=$this->uri->segment('5') + 1;
                         if(!empty($tbl_kp))
                          foreach ($tbl_kp as $kp ) {?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $kp->npm ?></td>
                          <td><?php echo $kp->nama ?></td>
                          <td> <?php echo $kp->angkatan ?></span></td>

                          <td>

                            <a  href="<?php echo base_url('index.php/home/download_berkas/').$kp->npm;?>" title='Download Berkas Pendaftaran' class='btn btn-success btn-sm'><span class='fa fa-download' aria-hidden='true'></span></a>

                              <a href="<?php echo base_url('index.php/home/detil_kp/').$kp->npm;?>" title='Lihat Detil Data' class='btn btn-warning btn-sm'><span class='fa fa-eye' aria-hidden='true'></span></a>

                              <!--<a href="<?php echo base_url('index.php/home/edit_kp/').$kp->npm;?>" title='Edit Data' class='btn btn-primary btn-sm'><span class='fa fa-pencil' aria-hidden='true'></span></a>-->

                             <a onclick='return tanya()' href="<?php echo base_url('index.php/home/hapus_kp/').$kp->npm;?>" title='Hapus Data' class='btn btn-danger btn-sm' name='hapsh'><span class='fa fa-trash' aria-hidden='true'></span></a>
                          </td>
                        </tr>
                        <?php } else {?>
                        <tr><td colspan='10'><div class='alert alert-danger' role='alert'> DATA TIDAK DITEMUKAN <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div></td></tr>
                        <?php } ?>
                      </tbody>
                    </table> 

						</div>
					</div>

            <div>
              <?php 
                echo $this->pagination->create_links();
              ?>
              <!--
             <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#">&laquo;</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">&raquo;</a>
                </li>
              </ul>-->
            </div>

				</div>
			</div>
		</div>
	</div>
</div>



<!--konfirmasi edit data-->
<script language="javascript">
function tanya(){
    if (confirm("APAKAH ANDA YAKIN AKAN MENGHAPUS DATA INI ???"))
{return true;
}else{
    return false;
}
}
</script>
<!--konfirmasi edit data-->

		






















			