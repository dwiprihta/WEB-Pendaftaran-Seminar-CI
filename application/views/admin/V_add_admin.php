
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 60%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><span class='fa fa-plus' aria-hidden='true'></span> FORM INPUT ADMINISTRATOR SISTEM</div>
  <div class="card-body"  style="background-color: #fff;">

	<div class="container" style=" width: 100%;">

		<div class="widget-wrap" style="text-align: left; color: #666;">
		
				<div class="single-sidebar-widget user-info-widget">
					<form action="<?php echo base_url('index.php/home/input_admin');?>" method="post">					     		
					       				
					  <div class="form-group">
					      <label style="float:left; margin-left: 20px;">ID Admin</label>
					      <div class="col-lg-12 col-md-12 col-sm-12">
					      <input type="text" class="form-control" name="id">  
					      </div>   
					</div>

					<div class="form-group">
					      <label style="float:left; margin-left: 20px;">Username</label>
					      <div class="col-lg-12 col-md-12 col-sm-12">
					      <input type="text" class="form-control" name="user">  
					      </div>   
					</div>


					<div class="form-group">
					      <label style="float:left; margin-left: 20px;">Password</label>
					     <div class="col-lg-12 col-md-12 col-sm-12">
					      <input type="password" class="form-control" name="pass">  
					      </div>   
					</div>

					<div class="form-group">
					      <label style="float:left; margin-left: 20px;">Email</label>
					     <div class="col-lg-12 col-md-12 col-sm-12">
					      <input type="email" class="form-control" name="email">  
					      </div>   
					</div>

					<input type="hidden" value="admin" name="level"> 
			</div>

			<div class="single-sidebar-widget user-info-widget">
				<center>
				<div class="button-groub">
				<input class="btn btn-primary" type="submit" name="daftar" size="35" value="DAFTAR">
				<input class="btn btn-warning" type="reset" name="reset" size="35" value="RESET"></div>
				</center>
			</div>
			
		</div>
	</div>

							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

		






