
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">
		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  			<div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-pencil" aria-hidden="true"></i> FORM EDIT PENDAFTARAN KERJA PRAKTEK</div>
  				<div class="card-body"  style="background-color: #fff;">

				<div class="container" style=" width: 100%;">

					<div class="widget-wrap" style="text-align: left; color: #666;">		
						<div class="single-sidebar-widget user-info-widget">

							<?php foreach($tbl_kp as $kp);{ ?>
							<!--<form action="" method="post">-->
								<?php echo form_open_multipart(); ?>

							<div class="form-group">
							    <input type="hidden" required="" class="form-control" name="npm" value="<?php echo $kp->npm ?>"></div>


							<div class="form-group">
							      <label style="float:left; margin-left: 20px;">Nama Mahasiswa</label>
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input readonly="" type="text" required="" class="form-control" name="nama" value="<?php echo $kp->nama ?>">  
							      </div>   
							</div>

							<div class="form-group">
							      <label style="float:left; margin-left: 20px;">Angakatan</label>
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input readonly="" type="text" required="" class="form-control" name="angkatan" value="<?php echo $kp->angkatan ?>">  
							      </div>   
							</div>

							<div class="form-group">
						     <label style="float:left; margin-left: 20px;">Semester</label>
						      <div class="col-lg-8 col-md-8 col-sm-8">
						      <select required="" class="form-control" name="smt" value="">
						      	<option><?php echo $kp->smt ?></option>
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
						    <input readonly="" required="" class="form-control" type="text" value="<?php echo $kp->progdi ?>" title="Sistem Komputer" name="progdi">
							</div>
						  </fieldset>
						</div>
		
					<div class="form-groub">
						<label >Tanggal Awal dan Akhir Pelaksanaan </label>
						<div class="row" style="margin-left: 2px">					
						  <div class="col-lg-4 col-md-4 col-sm-4">
						  <input required="" class="form-control" name="tgl_awal_kp" type="date" value="<?php echo $kp->tgl_awal_kp ?>"/>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4" style="margin-right: 200px">
						  <input required="" class="form-control" name="tgl_akhir_kp" type="date" style="margin-right: 200px" placeholder="Tanggal Mulai" value="<?php echo $kp->tgl_akhir_kp ?>"/>
						</div>
					</div>
					</div>

					 <div class="form-group">
					    <label style="float:left; margin-left: 20px; margin-top: 15px;">Tempat Pelaksanaan KP</label>
					     <div class="col-lg-8 col-md-8 col-sm-8">
					    <input required="" class="form-control" type="text" name="tempat_kp" value="<?php echo $kp->tempat_kp ?>">
					</div> 
					</div>
				
					<div class="form-groub">
						<label >Tanggal Awal dan Akhir Konsultasi </label>
						<div class="row" style="margin-left: 2px">
						  <div class="col-lg-4 col-md-4 col-sm-4">
						  <input required="" class="form-control" name="tgl_awal_konsul" type="date"/ value="<?php echo $kp->tgl_awal_konsul ?>">
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4" style="margin-right: 200px">
						  <input required="" class="form-control" name="tgl_akhir_konsul" type="date" style="margin-right: 200px" placeholder="Tanggal Mulai" value="<?php echo $kp->tgl_akhir_konsul ?>"/>
						</div>
					</div>
				 </div>

				 <div class="form-group">
				      <label style="float:left; margin-left: 20px; margin-top: 15px;">Judul Kerja Praktek</label>
				      <div class="col-lg-8 col-md-8 col-sm-8">
				      <textarea required="" class="form-control" rows="3" name="judul_kp" value=""><?php echo $kp->judul_kp ?></textarea>
				  </div>
				</div>

				<div class="form-group">
				     <label style="float:left; margin-left: 20px;">Dosen Pembimbing</label>
				      <div class="col-lg-8 col-md-8 col-sm-8">
				      <select  class="form-control" required="" name="nidn" id="tbl_dosen" >
				      	<option><?php echo $kp->dosen ?></option>      	
				        <?php
      						 	foreach($tbl_dosen as $dosen){
      						 		echo"<option>".$dosen->nama_dosen."</option>";
      						 	}
      						 	?>
				      </select>
				  </div>
				</div>

				<div class="form-group">
				     <label style="float:left; margin-left: 20px;">Periode</label>
				      <div class="col-lg-8 col-md-8 col-sm-8">
				      	
				      <select readonly="true"  class="form-control" name="periode" id="tbl_periode">
				      <option><?php echo $kp->periode ?></option>   	
      						 <?php
      						 	foreach($tbl_periode as $periode){
      						 		echo"<option value='".$periode->periode."'>".$periode->periode."</option>";
      						 	}
      						 	?>
				      </select>
				  </div>
				</div>

				<input type="hidden" required="" class="form-control" name="berkas" value="<?php echo $kp->berkas ?>"></div>
				<!--<?php
					if($kp->berkas==''){?>
    				<label>Belum Ada Gambar</label><br>
					<?php }else{ ?>
    				<img src="<?php echo base_url('images/'.$kp->berkas)?>"><br>
					<?php }?>-->

			<div class="single-sidebar-widget user-info-widget">
				<center>
				<div class="button-groub">
				<input onclick="return tanya_edit()" class="btn btn-warning" type="submit" name="edit" size="35" value="EDIT">
				</div>
				</center>
			</div>
			<!--</form>-->
			<?php echo form_close() ?>
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

		






