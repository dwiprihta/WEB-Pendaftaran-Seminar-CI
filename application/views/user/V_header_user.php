<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
		<!-- Site Title -->
		<title>Personal</title>
			<!--
			CSS
			============================================= -->
			<link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/unsa.png">
			<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<link href="<?php echo base_url() ?>/assets/css/ika.css" rel="stylesheet" type="text/css">
			<link href="<?php echo base_url()?>assets/css/linearicons.css" rel="stylesheet">
			<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
			<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" >
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
			<script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>	
			<script src="<?php echo base_url() ?>assets/js/main.js"></script>	
			<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>	
		</head>
		<body>	

			<!--================Header Menu Area =================-->
        <!--<header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="index.html">user</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!================End Header Menu Area =================-->

		 <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="home_user"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="<?php echo base_url('index.php/user/home_user');?>"><b style="color: blue" class="fa fa-home" aria-hidden="true"></b> Beranda</a></li>

				        <li><a href="<?php echo base_url('index.php/user/add_kp');?>"><b class="fa fa-pencil" aria-hidden="true"></b> Daftar Seminar</a></li>
			          <li><a href="<?php echo base_url('index.php/user/detil_user');?>"><b style="color: blue" class="fa fa-list" aria-hidden="true"></b> Data KP saya</a></li>       

					<?php $rows = $this->db->query("SELECT * FROM tbl_user where npm='".$this->session->npm."'")->row_array();{?>
			          <li class="menu-has-children"><a class="btn btn-lg btn-primary" style="color:#fff"; href="" ><b style="color: white" class="fa fa-user" aria-hidden="true"></b> <?php echo $rows['username'];?></a>
			          <?php } ?>
			            <ul>
			              <li><a data-toggle="modal" data-target="#tambah-data" href="<?php echo base_url('');?>"> <b style="color: blue" class="fa fa-user" aria-hidden="true"></b> Profil User</a></li>
			              <div class="container">
			              <div class="row" class="col-lg-12">
			              	<div class="col-lg-16">
			              <!--<li><a href="<?php echo base_url('');?>">Setting</a></li>-->
			          </div>
			          <div class="col-lg-16">
			              <li><a class="btn btn-lg btn-danger" style="color:#fff"; href="<?php echo base_url('index.php/login/logout_user'); ?>" ><i class="fa fa-lock" aria-hidden="true"></i> Log-Out</a></li>
			          </div>
			          </div>
			      </div>
			            </ul>
			          </li>	          					          		          

			          <!--<li><a href="<?php echo base_url('index.php/user/login');?>" class="btn btn-lg btn-primary" style="color:#fff;">LOGIN</a></li>-->
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->


 
 <!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header"><h4 class="modal-title">DATA USER</h4>
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
                        <a href="<?php echo base_url('index.php/user/edit_member/').$rows['npm'];?>" class="btn btn-info"> Edit&nbsp;</a>
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

 	
			
				
		