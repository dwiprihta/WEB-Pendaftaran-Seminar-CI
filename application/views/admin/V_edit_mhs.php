
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  			<div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-pencil" aria-hidden="true"></i> FORM INPUT DATA MAHASISWA </div>
  				<div class="card-body"  style="background-color: #fff;">

				<div class="container" style=" width: 100%;">
					 <div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               		<?=$this->session->flashdata('notif')?></div></div>
               		
					<div class="widget-wrap" style="text-align: left; color: #666;">		
						<div class="single-sidebar-widget user-info-widget">
							<?php foreach($tbl_mhs as $mhs);{ ?>
							<form action="" method="post">

							<div class="form-group">
							      <label style="float:left; margin-left: 20px;">Nomor Pokok Mahasiswa (NPM)</label>
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input type="text" readonly="" required="" class="form-control" name="nim" value="<?php echo $mhs->nim ?>">  
							      </div>   
							</div>

							<div class="form-group">
							      <label style="float:left; margin-left: 20px;">Nama Mahasiswa</label>
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input type="text" required="" class="form-control" name="nama_mhs" value="<?php echo $mhs->nama_mhs ?>">  
							      </div>   
							</div>

						

							<div class="form-group">
						     <label style="float:left; margin-left: 20px;">Jenis Kelammin</label>
						      <div class="col-lg-8 col-md-8 col-sm-8">
						      <select required="" class="form-control" name="jenkal">
						        <option><?php echo $mhs->jenkal ?></option>
						        <option>LAKI-LAKI</option>
						        <option>PEREMPUAN</option>
						       </select>
						  </div>
						</div>

					    <div class="form-group">	  
						    <label style="float:left; margin-left: 20px;">Program Studi</label>
						     <div class="col-lg-8 col-md-8 col-sm-8">
						    <input required="" readonly="" class="form-control" type="text" value="SISTEM KOMPUTER" title="Sistem Komputer" name="jurusan">
							</div>
						  </fieldset>
						</div>

						 <div class="form-group">	  
						    <label style="float:left; margin-left: 20px;">Angkatan</label>
						     <div class="col-lg-8 col-md-8 col-sm-8">
						    <input required=""  class="form-control" type="text" value="<?php echo $mhs->angkatan ?>" title="Angkatan" name="angkatan">
							</div>
						  </fieldset>
						</div>
		
					<div class="form-groub">		
							
						<label style="float:left; margin-left: 20px;">Tempat Lahir </label>	
						  <div class="col-lg-8 col-md-8 col-sm-8">
						   <input type="text" required="" class="form-control" name="tempat_lahir" value="<?php echo $mhs->tempat_lahir ?>"> 
						</div><br>

						
							<label style="float:left; margin-left: 20px;">Tanggal Lahir </label>
							<div class="col-lg-8 col-md-8 col-sm-8" style="margin-right: 200px">
						  <input required="" class="form-control" name="tgl_lahir" type="date" style="margin-right: 200px" placeholder="Tanggal Lahir" value="<?php echo $mhs->tgl_lahir ?>" />
						</div>

					 <div class="form-group">
					    <label style="float:left; margin-left: 20px; margin-top: 15px;">No Telfon</label>
					     <div class="col-lg-8 col-md-8 col-sm-8">
					    <input required="" class="form-control" type="text" name="kontak" value="<?php echo $mhs->kontak ?>">
					</div> 
					</div>
				
					
				 <div class="form-group">
				      <label style="float:left; margin-left: 20px; margin-top: 15px;">Alamat</label>
				      <div class="col-lg-8 col-md-8 col-sm-8">
				      <textarea required="" class="form-control" rows="3" name="alamat"><?php echo $mhs->alamat ?></textarea>
				  </div>
				</div>
			</div>
			</div>

			<div class="single-sidebar-widget user-info-widget">
				<center>
				<div class="button-groub">
				<input class="btn btn-warning" type="submit" name="edit" size="35" value="EDIT">
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

		






