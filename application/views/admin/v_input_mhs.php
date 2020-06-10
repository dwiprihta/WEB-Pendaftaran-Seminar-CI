
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  			<div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-user" aria-hidden="true"></i> FORM INPUT DATA MAHASISWA </div>
  				<div class="card-body"  style="background-color: #fff;">

				<div class="container" style=" width: 100%;">
					 <div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               		<?=$this->session->flashdata('notif')?></div></div>
               		
					<div class="widget-wrap" style="text-align: left; color: #666;">		
						<div class="single-sidebar-widget user-info-widget">
							<form action="<?php echo base_url('index.php/home/input_mhs');?>" method="post">

							<div class="form-group">
							      <label style="float:left; margin-left: 20px;">Nomor Pokok Mahasiswa (NPM)</label>
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input type="text" required="" class="form-control" name="nim">  
							      </div>   
							</div>

							<div class="form-group">
							      <label style="float:left; margin-left: 20px;">Nama Mahasiswa</label>
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input type="text" required="" class="form-control" name="nama_mhs">  
							      </div>   
							</div>

							<div class="form-group">
						     <label style="float:left; margin-left: 20px;">Jenis Kelammin</label>
						      <div class="col-lg-8 col-md-8 col-sm-8">
						      <select required="" class="form-control" name="jenkal">
						        <option>--JENIS KELAMIN--</option>
						        <option>LAKI-LAKI</option>
						        <option>PEREMPUAN</option>
						       </select>
						  </div>
						</div>

					    <div class="form-group">	  
						    <label style="float:left; margin-left: 20px;">Program Studi</label>
						     <div class="col-lg-8 col-md-8 col-sm-8">
						    <input readonly="" required="" class="form-control" type="text" value="SISTEM KOMPUTER" title="Sistem Komputer" name="jurusan">
							</div>
						  </fieldset>
						</div>

						  <div class="form-group">	  
						    <label style="float:left; margin-left: 20px;">Angkatan</label>
						     <div class="col-lg-8 col-md-8 col-sm-8">
						    <input  required="" class="form-control" type="text" title="Sistem Komputer" name="angkatan">
							</div>
						  </fieldset>
						</div>
		
					<div class="form-groub">		
							
						<label style="float:left; margin-left: 20px;">Tempat Lahir </label>	
						  <div class="col-lg-8 col-md-8 col-sm-8">
						   <input type="text" required="" class="form-control" name="tempat_lahir"> 
						</div><br>

						
							<label style="float:left; margin-left: 20px;">Tanggal Lahir </label>
							<div class="col-lg-8 col-md-8 col-sm-8" style="margin-right: 200px">
						  <input required="" class="form-control" name="tgl_lahir" type="date" style="margin-right: 200px" placeholder="Tanggal Mulai" />
						</div>

					 <div class="form-group">
					    <label style="float:left; margin-left: 20px; margin-top: 15px;">No Telfon</label>
					     <div class="col-lg-8 col-md-8 col-sm-8">
					    <input required="" class="form-control" type="text" name="kontak">
					</div> 
					</div>
				
					
				 <div class="form-group">
				      <label style="float:left; margin-left: 20px; margin-top: 15px;">Alamat</label>
				      <div class="col-lg-8 col-md-8 col-sm-8">
				      <textarea required="" class="form-control" rows="3" name="alamat"></textarea>
				  </div>
				</div>
			</div>
			</div>

			<div class="single-sidebar-widget user-info-widget">
				<center>
				<div class="button-groub">
				<input class="btn btn-primary" type="submit" name="daftar" size="35" value="SIMPAN">
				<input class="btn btn-warning" type="reset" name="reset" size="35" value="RESET"></div>
				</center>
			</div>
			</form>
		</div>
	</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

		






