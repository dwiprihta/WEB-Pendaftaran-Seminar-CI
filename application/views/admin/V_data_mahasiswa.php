<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><span class='fa fa-users' aria-hidden='true'></span> DATA MAHASISWA</div>
  <div class="card-body"  style="background-color: #fff;">

		<div class="widget-wrap" style="color:#666;">

		<div class="row">
			<div class="col-lg-8">
			<form action="<?php echo base_url('index.php/home/mhs');?>" method="post" class="form-inline my-2 my-lg-0" style="margin-left: 15PX;">
      			<input class="form-control mr-sm-2" type="text" placeholder="Search" name="keyword">
      			<button class="btn btn-success my-2 my-sm-0" type="submit" name="cari"><span class='fa fa-search' aria-hidden='true'></span></button>
   			 </form>
   			</div>
   				<div class="col-lg-" style="margin-left:50px;">
   				 <a href="<?php echo base_url('index.php/home/input_mhs');?>" style="margin-right: 10px ;" class="btn btn-primary"><span class='fa fa-plus' aria-hidden='true'></span> Tambah</a>
   				<a href="<?php echo base_url('index.php/home/mhs');?>" style="margin-right: 10px ;"  class="btn btn-warning"><span class='fa fa-refresh' aria-hidden='true'></span> Refresh</a></div></div>
   				<div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               <?=$this->session->flashdata('notif')?></div></div>

				<div class="single-sidebar-widget user-info-widget">
						<div class="row">
							<table class="table table-hover">
							  <thead style="background: orange; color: #fff;">
							    <tr>
							      <th scope="col">NO</th>
							      <th scope="col">NPM</th>
							      <th scope="col">NAMA</th>
							      <th scope="col">ANGKATAN</th>
							      <th scope="col">PROGDI</th>
							      <th scope="col">KONTAK</th>
							      <th scope="col">OPERASI</th>
							    </tr>
							  </thead>
							  <tbody>
							  	  	<!--PHP CODE-->
		                        <?php 
		                         $no=1;
		                         $i=$this->uri->segment('5') + 1;
		                         if(!empty($tbl_mhs))
		                          foreach ($tbl_mhs as $member ) {?>
							    <tr>
							      
							      <td><?php echo $no++?></td>
							      <td><?php echo $member->nim ?></td>
							        <td><?php echo $member->nama_mhs ?></td>
							        <td><?php echo $member->angkatan ?></td>
							         <td><?php echo $member->jurusan?></td>
							         <td><?php echo $member->kontak?></td>
							        <td>

							        	  <a href="<?php echo base_url('index.php/home/detil_mhs/').$member->nim;?>" title='Lihat Detil Data' class='btn btn-warning btn-sm'><span class='fa fa-eye' aria-hidden='true'></span></a>

              <a href="<?php echo base_url('index.php/home/edit_mhs/').$member->nim;?>" title='Edit Data' class='btn btn-primary btn-sm'><span class='fa fa-pencil' aria-hidden='true'></span></a>

             <a onclick='return tanya()' href="<?php echo base_url('index.php/home/hapus_mhs/').$member->nim;?>" title='Hapus Data' class='btn btn-danger btn-sm' name='hapsh'><span class='fa fa-trash' aria-hidden='true'></span></a></td>
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
</div></div>
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



		