
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 60%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-pencil" aria-hidden="true"></i> FORM EDIT ADMIN</div>
  <div class="card-body"  style="background-color: #fff;">

	<div class="container" style=" width: 100%;">

		<div class="widget-wrap" style="text-align: left; color: #666;">
		
				<div class="single-sidebar-widget user-info-widget">
					<?php foreach($tbl_user as $admin);{ ?>
					<form action="" method="post">

					<input type="hidden" class="form-control" name="id" value="<?php echo $admin->npm ?>">

					<div class="form-group">
					      <label style="float:left; margin-left: 20px;">Username</label>
					       <div class="col-lg-12 col-md-12 col-sm-12">
					      <input type="text" class="form-control" name="user" value="<?php echo $admin->username ?>">  
					      </div>   
					</div>

					<div class="form-group">
					      <label style="float:left; margin-left: 20px;">Password</label>
					     <div class="col-lg-12 col-md-12 col-sm-12">
					      <input type="password" class="form-control" name="pass" value="<?php echo $admin->password ?>">  
					      </div>   
					</div>

					<div class="form-group">
					      <label style="float:left; margin-left: 20px;">Email</label>
					      <div class="col-lg-12 col-md-12 col-sm-12">
					      <input type="text" class="form-control" name="email" value="<?php echo $admin->email ?>">  
					      </div>   
					</div>

					
					      <input type="hidden" class="form-control" name="level" value="<?php echo $admin->level ?>">  
					    
			</div>

			<div class="single-sidebar-widget user-info-widget">
				<center>
				<div class="button-groub">
				<input onclick="return tanya_edit()" class="btn btn-primary" type="submit" name="edit" size="35" value="EDIT">
				</center>
			</div>
		</form>
		<?php } ?>
			
		</div>
	</div>

							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script language="javascript">
function tanya_edit(){
    if (confirm("APAKAH ANDA YAKIN MERUBAH DATA INI ???"))
{return true;
}else{
    return false;
}
}
</script>
<!--konfirmasi edit data-->

		


		






