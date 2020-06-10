

<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">


		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  			<div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-book" aria-hidden="true"></i> UPLOAD FILE PERSYARATAN</div>
  				<div class="card-body"  style="background-color: #fff;">


				<div class="container" style=" width: 100%;">
					 <div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               		<?=$this->session->flashdata('notif')?></div></div>
               		
					<div class="widget-wrap" style="text-align: left; color: #666;">		
						<div class="single-sidebar-widget user-info-widget">
							<?php echo form_open_multipart('user/berkas'); ?>
							<!--<form action="<?php echo base_url('index.php/user/berkas');?>" method="post">-->


						<?php $rows = $this->db->query("SELECT * FROM tbl_user where npm='".$this->session->npm."'")->row_array();{?>

							<div class="form-group">
							      <!--<label style="float:left; margin-left: 20px;">Nomor Pokok Mahasiswa (NPM)</label>-->
							      <div class="col-lg-8 col-md-8 col-sm-8">
							      <input readonly="" type="hidden" required="" class="form-control" name="npm" value="<?php echo $rows['npm'];?>">  
							      </div>   
							</div>

							<?php }?>

					

					 <div style=" width: 100%;" class="form-group">
					    <label  style="float:left; margin-left: 20px; margin-top: 15px;">FILE BERKAS</label>
					 <div style=" width: 100%;" class="col-lg-4 col-md-2 col-sm-2">
					 <label class="btn btn-success">
					    <input required=""  type="file" name="gambar">
					</label>
					</div> 
					</div>
					
<div class="form-group">
			<div class="single-sidebar-widget user-info-widget">
				<center>
				<div class="button-groub">
				<input class="btn btn-primary" type="submit" name="input" size="35" value="INPUT" >
				</center>
			</div>
			<?php echo form_close() ?>
			<!--</form>-->
		</div>
	</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

