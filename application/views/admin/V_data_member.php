<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><span class='fa fa-users' aria-hidden='true'></span> DATA USER</div>
  <div class="card-body"  style="background-color: #fff;">

		<div class="widget-wrap" style="color:#666;">

		<div class="row">
			<div class="col-lg-8">
			<form action="<?php echo base_url('index.php/home/member');?>" method="post" class="form-inline my-2 my-lg-0" style="margin-left: 15PX;">
      			<input class="form-control mr-sm-2" type="text" placeholder="Search" name="keyword">
      			<button class="btn btn-success my-2 my-sm-0" type="submit" name="cari"><span class='fa fa-search' aria-hidden='true'></span></button>
   			 </form>
   			</div>
   				<div class="col-lg-" style="margin-left:50px;">
   				 <a href="<?php echo base_url('index.php/home/input_member');?>" style="margin-right: 10px ;"  class="btn btn-primary"><span class='fa fa-plus' aria-hidden='true'></span> Tambah</a>
   				<a href="<?php echo base_url('index.php/home/member');?>" style="margin-right: 10px ;"  class="btn btn-warning"><span class='fa fa-refresh' aria-hidden='true'></span> Refresh</a></div></div>
   				<div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               <?=$this->session->flashdata('notif')?></div></div>
		
				<div class="single-sidebar-widget user-info-widget">
						<div class="row">
							<table class="table table-hover">
							  <thead style="background: orange; color: #fff;">
							    <tr>
							      <th scope="col">NO</th>
							      <th scope="col">NPM</th>
							      <th scope="col">USERNAME</th>
							      <th scope="col">PASSWORD</th>
							      <th scope="col">EMAIL</th>
							      <th scope="col">OPERASI</th>
							    </tr>
							  </thead>
							  <tbody>
							  	  	<!--PHP CODE-->
		                        <?php 
		                         $no=1;
		                         $i=$this->uri->segment('5') + 1;
		                         if(!empty($v_user))
		                          foreach ($v_user as $member ) {?>
							    <tr>
							      
							      <td><?php echo $no++?></td>
							      <td><?php echo $member->npm ?></td>
							        <td><?php echo $member->username ?></td>
							        <td><?php echo $member->password ?></td>
							         <td><?php echo $member->email ?></td>
							        <td>

							        	<a href="<?php echo base_url('index.php/home/input_notif/').$member->npm;?>" title='Input Pengumuman Ke User' class='btn btn-success btn-sm'><span class='fa fa-envelope' aria-hidden='true'></span></a>

              <a href="<?php echo base_url('index.php/home/edit_member/').$member->npm;?>" title='Edit Data' class='btn btn-primary btn-sm'><span class='fa fa-pencil' aria-hidden='true'></span></a>

             <a onclick='return tanya()' href="<?php echo base_url('index.php/home/hapus_member/').$member->npm;?>" title='Hapus Data' class='btn btn-danger btn-sm' name='hapsh'><span class='fa fa-trash' aria-hidden='true'></span></a></td>
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
<!-- <ul class="pagination">
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

		