
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">
		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  			<div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-book" aria-hidden="true"></i> FORM EDIT BERKAS PENDAFTARAN </div>
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
							      <center><label>Nama Mahasiswa</label><center>			     
                                         <label class="btn btn-danger col-lg-6 col-md-6 col-sm-6">                                        
							      <input  type="file" required="" name="gambar" value="<?php echo $kp->berkas ?>">     
                                        </label>                                        
							</div>
					
			</div>
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

		






