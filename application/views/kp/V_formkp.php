

<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">


		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  			<div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-book" aria-hidden="true"></i> FORM PENDAFTARAN KERJA PRAKTEK</div>
  				<div class="card-body"  style="background-color: #fff;">


				<div class="container" style=" width: 100%;">
					 <div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               		<?=$this->session->flashdata('msg')?></div></div>
               		<div class="row">
		<div class="col-lg-12">
		<div class="alert alert-danger" role="alert"> <h5 class="display-5">

			<a href="<?php echo base_url('index.php/umum/download_ffrm');?>" style="margin-right: 10px ;"  class="btn btn-danger"><span class='fa fa-heart' aria-hidden='true'></span> Download Panduan Pengisian </a></h5></div>
	</div>
	</div>
               		
					<div class="widget-wrap" style="text-align: left; color: #666;">		
						<div class="single-sidebar-widget user-info-widget">
							<?php echo form_open_multipart('user/add_kp'); ?>

								<?php $rows = $this->db->query("SELECT * FROM tbl_mhs where nim='".$this->session->npm."'")->row_array();{?>

							<div class="form-group">
							      <label style="float:left; margin-left: 20px;">Nomor Pokok Mahasiswa (NPM)</label>
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input readonly="" type="text" required="" class="form-control" name="npm" value="<?php echo $rows['nim'];?>">  
							      </div>   
							</div>

							<div class="form-group">
							      <label style="float:left; margin-left: 20px;">Nama Mahasiswa</label>
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input readonly="" type="text" required="" class="form-control" name="nama" value="<?php echo $rows['nama_mhs'];?>">  
							      </div>   
							</div>

							<div class="form-group">
							      <label  style="float:left; margin-left: 20px;">Angakatan</label>
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input readonly="" type="text" required="" class="form-control" name="angkatan" value="<?php echo $rows['angkatan'];?>">  
							      </div>   
							</div>
							<?php }?>

							<div class="form-group">
						     <label style="float:left; margin-left: 20px;">Semester</label>
						      <div class="col-lg-8 col-md-8 col-sm-8">
						      <select required="" class="form-control" name="smt">
						        <option>1</option>
						        <option>2</option>
						        <option>3</option>
						        <option>4</option>
						        <option>5</option>
						        <option>6</option>
						        <option>7</option>
						        <option>8</option>
						        <option>9</option>
						        <option>10</option>
						        <option>11</option>
						        <option>12</option>
						        <option>13</option>
						        <option>14</option>
						      </select>
						  </div>
						</div>

					    <div class="form-group">	  
						    <label style="float:left; margin-left: 20px;">Program Studi</label>
						     <div class="col-lg-8 col-md-8 col-sm-8">
						    <input readonly="TRUE" required="" class="form-control" type="text" value="Sistem Komputer" title="Sistem Komputer" name="progdi">
							</div>
						  </fieldset>
						</div>
		
					<div class="form-groub">
						<label >Tanggal Awal dan Akhir Pelaksanaan </label>
						<div class="row" style="margin-left: 2px">					
						  <div class="col-lg-4 col-md-4 col-sm-4">
						  <input required="" class="form-control" name="tgl_awal_kp" type="date"/>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4" style="margin-right: 200px">
						  <input required="" class="form-control" name="tgl_akhir_kp" type="date" style="margin-right: 200px" placeholder="Tanggal Mulai" />
						</div>
					</div>
					</div>

					 <div class="form-group">
					    <label style="float:left; margin-left: 20px; margin-top: 15px;">Tempat Pelaksanaan KP</label>
					     <div class="col-lg-8 col-md-8 col-sm-8">
					    <input required="" class="form-control" type="text" name="tempat_kp">
					</div> 
					</div>
				
					<div class="form-groub">
						<label >Tanggal Awal dan Akhir Konsultasi </label>
						<div class="row" style="margin-left: 2px">
						  <div class="col-lg-4 col-md-4 col-sm-4">
						  <input required="" class="form-control" name="tgl_awal_konsul" type="date"/>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4" style="margin-right: 200px">
						  <input required="" class="form-control" name="tgl_akhir_konsul" type="date" style="margin-right: 200px" placeholder="Tanggal Mulai" />
						</div>
					</div>
				 </div>

				 <div class="form-group">
				      <label style="float:left; margin-left: 20px; margin-top: 15px;">Judul Kerja Praktek</label>
				      <div class="col-lg-8 col-md-8 col-sm-8">
				      <textarea required="" class="form-control" rows="3" name="judul_kp"></textarea>
				  </div>
				</div>

				<div class="form-group">
				     <label style="float:left; margin-left: 20px;">Dosen Pembimbing</label>
				      <div class="col-lg-8 col-md-8 col-sm-8">
				      	
				      <select class="form-control" name="nidn" id="tbl_dosen">   	
      						 <option value="">--DOSEN PEMBIMBING--</option>
      						 <?php
      						 	foreach($tbl_dosen as $dosen){
      						 		echo"<option>".$dosen->nama_dosen."</option>";
      						 	}
      						 	?>
				      </select>
				  </div>
				 	<!--TAMPILKAN PERIODE YANG DISIMPAN-->
				<div class="form-group">
				      <div class="col-lg-8 col-md-8 col-sm-8">
				      	
      						  <select hidden="true" class="form-control" name="periode" id="tbl_periode">   	
      						 <?php
      						 	foreach($tbl_periode as $periode){
      						 		echo"<option value='".$periode->periode."'>".$periode->periode."</option>";
      						 	}?></select>
				  </div>
				</div>


			<!--TAMPILKAN PERIODE YANG DISIMPAN-->

			<!--TAMPILKAN DATA TIDAK BERGUNA-->
				<div class="form-group">
					<label style="float:left; margin-left: 20px;">Periode</label>
				      <div class="col-lg-8 col-md-8 col-sm-8">
				      	
      						  <select disabled="TRUE" class="form-control" name="" id="tbl_periode">   	
      						 <?php
      						 	foreach($tbl_periode as $periode){
      						 		echo"<option value='".$periode->periode."'>".$periode->periode."</option>";
      						 	}?></select>
				  </div>
				</div>

				 <div style=" width: 100%;" class="form-group">
					    <label  style="float:left; margin-left: 20px; margin-top: 15px;">FILE BERKAS</label>
					 <div style=" width: 100%;" class="col-lg-4 col-md-2 col-sm-2">
					 <label class="btn btn-success">
					    <input required=""  type="file" name="gambar">
					</label>
					</div> 
					</div>
					
			</div>
			<!--TAMPILKAN DATA TIDAK BERGUNA-->

			<div class="single-sidebar-widget user-info-widget">
				<center>
				<div class="button-groub">
				<input class="btn btn-primary"  type="submit" name="daftar" size="35" value="DAFTAR" >
				<input class="btn btn-warning" type="reset" name="reset" size="35" value="RESET"></div>
				</center>
			</div>
			<?php echo form_close() ?>
			
		</div>
	</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

