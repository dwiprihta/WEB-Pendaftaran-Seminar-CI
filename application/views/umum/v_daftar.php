
<html>
	<head>
		<title>DAFTAR AKUN SISTEM INFORMASI PENDAFTARAN SEMINAR</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/unsa.png">
		<link href="<?php echo base_url()?>/assets/css/login/menu.css" rel="stylesheet" type="text/css">
		<link  href="<?php echo base_url()?>/assets/css/login/main.css" rel="stylesheet" type="text/css">
		<link  href="<?php echo base_url()?>/assets/css/login/bgimg.css" rel="stylesheet" type="text/css">
		<link  href="<?php echo base_url()?>/assets/css/login/bgimg-nosocial.css" rel="stylesheet" type="text/css">
		<link  href="<?php echo base_url()?>/assets/css/login/font.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
		<link  href="<?php echo base_url()?>/assets/css/login/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/login/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/login/main.js"></script>
	</head>

<body background="<?php echo base_url() ?>assets/img/daftar.png">

	<div class="login-form-container" id="login-form" style="margin-top: -270px;">
		<div class="login-form-content">
			<div class="login-form-header">
				<div class="logo">
					<img src="<?php echo base_url()?>/assets/img/regi.png">
				</div><BR>
				<h4><B>DAFTAR AKUN MAHASISWA</B></h4><BR>
				<?=$this->session->flashdata('notif')?>	
			</div>
			
			<form method="post" action="<?php echo base_url('index.php/umum/input_member');?>" class="login-form">

				<div class="input-container">
					<i class="fa fa-user"></i>
					<input type="text" required="" class="input" name="npm" placeholder="Nomor Pokok Mahasiswa " style="font-size: 15px;"/>
				</div>

				<div class="input-container">
					<i class="fa fa-dot-circle-o"></i>
					<input type="text" required="" class="input" name="username" placeholder="Nama Pengguna/Username" style="font-size: 15px;"/>
				</div>

				<div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password" required="" id="login-password" class="input" name="password" placeholder="Password" style="font-size: 15px;"/>
					<i class="fa fa-eye" id="show-password"></i>
				</div>

				<div class="input-container">
					<i class="fa fa-envelope"></i>
					<input type="email" required="" class="input" name="email" placeholder="Email" style="font-size: 15px;"/>
				</div>

				<input type="hidden" name="level_user" value="user">

				<input type="hidden" name="notif" value="<p><strong>BELUM ADA PENGUMUMAN</strong></p>">
				
				<div class="rememberme-container">
					<!--<input type="checkbox" name="rememberme" id="rememberme"/>
					<label for="rememberme" class="rememberme"><span>Biarkan tetap masuk</span></label>-->
					<!--<a class="forgot-password" href="#">Lupa Password?</a>-->
				</div>
				<input type="submit" name="daftar" value="DAFTAR AKUN" class="button"/>
				</form>
				
			
			<div class="resend-activation" style="font-size: 13px;">	
				<a style="text-decoration: none" href="<?php echo base_url('index.php/login/login_user');?>">Kembali Ke Login</a>
			</div>
		</div>
		<div class="attibution">
			&copy; 2019 Dwi Prihtapambudi
		</div>
	</div>
</body>
</html>