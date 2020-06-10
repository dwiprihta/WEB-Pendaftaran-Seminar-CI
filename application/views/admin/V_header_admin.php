<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
		<!-- Site Title -->
		<title>Sistem Informasi Pendaftaran Seminar Kerja Praktek Siskom</title>
			<!--
			CSS
			============================================= -->
			<link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/unsa.png">
			<link href="<?php echo base_url() ?>/assets/css/ika.css" rel="stylesheet" type="text/css">
			<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" >
			<link href="<?php echo base_url()?>assets/css/linearicons.css" rel="stylesheet">
			<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
			<link href="<?php echo base_url()?>assets/css/magnific-popup.css" rel="stylesheet" >
			<link href="<?php echo base_url()?>assets/css/jquery-ui.css"  rel="stylesheet" >				
			<link href="<?php echo base_url()?>assets/css/nice-select.css"  rel="stylesheet" >				
			<link href="<?php echo base_url()?>assets/css/animate.min.css" rel="stylesheet" >
			<link href="<?php echo base_url()?>assets/css/owl.carousel.css"  rel="stylesheet">				
			<link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet" >

			<!--
			JAVASCRIPT
			============================================= -->
			<script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/Chart.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  		<script src="<?php echo base_url() ?>assets/js/easing.min.js"></script>			
			<script src="<?php echo base_url() ?>assets/js/hoverIntent.js"></script>
			<script src="<?php echo base_url() ?>assets/js/superfish.min.js"></script>	
			<script src="<?php echo base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>	
    	<script src="<?php echo base_url() ?>assets/js/jquery.tabs.min.js"></script>			
			<script src="<?php echo base_url() ?>assets/s/jquery.nice-select.min.js"></script>	
      <script src="<?php echo base_url() ?>js/isotope.pkgd.min.js"></script>			
			<script src="<?php echo base_url() ?>assets/js/waypoints.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/simple-skillbar.js"></script>				
			<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>				
			<script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>			<script src="<?php echo base_url() ?>assets/js/main.js"></script>	
			<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
		</head>
		<body style="background-color: #f9f9ff;">	

		 <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="<?php echo base_url('index.php/home/home_admin');?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="<?php echo base_url('index.php/home/home_admin');?>"><b style="color: blue" class="fa fa-home" aria-hidden="true"></b> Beranda</a></li>
			          <li><a href="<?php echo base_url('index.php/home/add_kp');?>"> <b style="color: blue" class="fa fa-pencil" aria-hidden="true"></b> Daftar Seminar KP KP</a></li>
			          <li class="menu-has-children"><a href=""><b style="color: blue" class="fa fa-book" aria-hidden="true"></b> Master</a>
			            <ul>
			            	<li><a href="<?php echo base_url('index.php/home/data_kp');?>">Data Seminar KP</a></li>
			            	<li><a href="<?php echo base_url('index.php/home/mhs');?>">Data Mahasiswa</a></li>
			              <li><a href="<?php echo base_url('index.php/home/dosen');?>">Data Dosen</a></li>
			              <li><a href="<?php echo base_url('index.php/home/periode');?>">Data Periode</a></li>
			              <li><a href="<?php echo base_url('index.php/home/member');?>">Data User</a></li>
			              <li><a href="<?php echo base_url('index.php/home/admin');?>">Data Admin</a></li>
			            </ul>
			          </li>

			          <li><a href="<?php echo base_url('index.php/home/sortir');?>"> <b style="color: blue" class="fa fa-print" aria-hidden="true"></b> Rekap Data</a></li>

			          <!--<li class="menu-has-children"><a href="">Daftar</a>
			            <ul>
			              <li><a href="<?php echo base_url('');?>">Kerja Praktek</a></li>
			              <li><a href="<?php echo base_url('');?>">Skripsi</a></li>
			            </ul>
			          </li>	-->	

			          <li class="menu-has-children"><a class="btn btn-lg btn-primary" style="color:#fff"; href="" ><b style="color: white" class="fa fa-user" aria-hidden="true"></b> <?php echo $this->session->userdata("username"); ?></a>
			            <ul>
			              <li><a data-toggle="modal" data-target="#data_admin" href="<?php echo base_url('');?>"><center><i class="fa fa-user" aria-hidden="true"></i> Profil <?php echo $this->session->userdata("username"); ?></center></a></li>
			              <div class="container">
			              <div class="row" class="col-lg-12">
			              	<div class="col-lg-16">
			              <!--<li><a href="<?php echo base_url('index.php/home/setting_periode');?>">Setting</a></li>-->
			          </div>
			          <div class="col-lg-16">
			              <li><a class="btn btn-lg btn-danger" style="color:#fff"; href="<?php echo base_url('index.php/login/logout'); ?>" > <i class="fa fa-lock" aria-hidden="true"></i> Log-Out</a></li>
			          </div>
			          </div>
			      </div>
			            </ul>
			          </li>	          					          		          

			          <!--<li><a href="<?php echo base_url('index.php/home/login');?>" class="btn btn-lg btn-primary" style="color:#fff;">LOGIN</a></li>-->
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

<!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header"><h4 class="modal-title">Tambah Data Jurusan</h4>
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>   
              </div>
              <table class="table table-hover">
              	<?php $rows = $this->db->query("SELECT * FROM tbl_user where npm='".$this->session->npm."'")->row_array();{?>
  				<thead>
  					<tr><td style="text-align: left;"><?php echo $rows['nama_admin'];?></td></tr>
  					<tr><td style="text-align: left;"><?php echo $rows['username'];?></td></tr>
  					<tr><td style="text-align: left;"><?php echo $rows['username'];?></td></tr>
  				</thead>
  				<?php }?>
  			</table>
              </div>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->

  <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="data_admin" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header"><h4 class="modal-title">DATA ADMINISTRATOR</h4>
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>   
              </div>
              <form class="form-horizontal" action="<?php echo base_url('index.php/home/input_dosen')?>" method="post" enctype="">
              	 <div class="modal-body">
              	<?php $rows = $this->db->query("SELECT * FROM tbl_user where npm='".$this->session->npm."'")->row_array();{?>
              	
									<ul class="list-group">
										<li class="list-group-item"><?php echo $rows['npm'];?></li>
										<li class="list-group-item"><?php echo $rows['username'];?></li>
										<li class="list-group-item"><?php echo $rows['email'];?></li>
										<li class="list-group-item"><?php echo $rows['level'];?></li>
									</ul>
                    <div class="modal-footer">
                        <button type="button" type="reset" class="btn btn-warning" data-dismiss="modal"> Tutup</button>
                    </div>
                    <?php }?>
                </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->

			
				
		