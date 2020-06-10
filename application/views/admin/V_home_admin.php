<div class="container" style="margin-top: 100px;">
<div class="jumbotron">
	<div class="row">
		<div class="col-lg-12">
		<div class="alert alert-primary" role="alert"> <h5 class="display-5">Selamat Datang! <?php echo $this->session->userdata("username"); ?></h5></div>
	</div>
	</div>


  <div class="row">
  		<div class="col-lg-3">
  			<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  				
			  <div class="card-header" style="max-width: 100%;"><h4 style="color:#fff; padding: 20px;"><i class="fa fa-book" aria-hidden="true"></i> DATA KP </h4></div>
			  <div class="card-body"  style="background-color: #fff;">
			  	<a href="<?php echo base_url('index.php/home/data_kp');?>" ><span class='fa fa-link' aria-hidden='true' style="color: #666;"> <b style="font-family:arial; font-size:12px; color:#666;">LIHAT DEAIL</b></span></a>
  		</div>
	</div>
</div>

<div class="col-lg-3">
  			<div class="card text-white bg-danger mb-3" style="max-width: 100%;">
			  <div class="card-header" style="max-width: 100%;"><h4 style="color:#fff; padding: 20px;"><i class="fa fa-user" aria-hidden="true"></i> DOSEN </h4></div>
			  <div class="card-body" style="background-color: #fff;">
			  	<a href="<?php echo base_url('index.php/home/dosen');?>" ><span class='fa fa-link' aria-hidden='true' style="color: #666;"> <b style="font-family:arial; font-size:12px; color:#666;">LIHAT DEAIL</b></span></a>
  		</div>
	</div>
</div>

<div class="col-lg-3">
  			<div class="card text-white bg-success mb-3" style="max-width: 100%;">
			  <div class="card-header" style="max-width: 100%;"><h4 style="color:#fff; padding: 20px;"><i class="fa fa-eye" aria-hidden="true"></i> PERIODE </h4></div>
			  <div class="card-body"  style="background-color: #fff;">
			  	<a href="<?php echo base_url('index.php/home/periode');?>" ><span class='fa fa-link' aria-hidden='true' style="color: #666;"> <b style="font-family:arial; font-size:12px; color:#666;">LIHAT DEAIL</b></span></a>
  		</div>
	</div>
</div>

<div class="col-lg-3">
  			<div class="card text-white bg-warning mb-3" style="max-width: 100%;">
			  <div class="card-header" style="max-width: 100%;"><h4 style="color:#fff; padding: 20px;"><i class="fa fa-check" aria-hidden="true"></i> ADMIN </h4></div>
			  <div class="card-body"  style="background-color: #fff;">
			  	<a href=<?php echo base_url('index.php/home/admin');?> ><span class='fa fa-link' aria-hidden='true' style="color: #666;"> <b style="font-family:arial; font-size:12px; color:#666;">LIHAT DEAIL</b></span></a>
  		</div>
	</div>
</div>

</div>	
  <!--<h1 class="display-3">Hello, world! <?php echo $this->session->userdata("nama_admin"); ?></h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>-->
  <hr class="my-4">
  <p>Tekan tombol log out dibawah ini utuk keluar dari aplikasi</p>
  <p class="lead">
    <a class="btn btn-danger btn-lg" href="<?php echo base_url('index.php/login/logout'); ?>" role="button"><i class="fa fa-unlock" aria-hidden="true"></i> LOG-OUT</a>
  </p>


</div></div>



