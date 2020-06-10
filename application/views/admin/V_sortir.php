
<div class="container" style="margin-top: 200px; margin-bottom: 150px; width: 100%;">
	<div class="col-lg-12">

		<div class="widget-wrap" style="color:#666;">

        <div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               <?=$this->session->flashdata('notif')?></div></div>

				<div class="single-sidebar-widget user-info-widget">
					<div class="row">
						<div class="col-lg-12">

						<div class="alert alert-dismissible alert-primary">
  						<ul>
  							<li> <i class="fa fa-print" aria-hidden="true"></i> Sortir Laporan berdasarkan Angkatan Dan Dosen Pembimbing</li>
  						</ul>
						</div>
					</div>
				</div>

						<div class="row">

			<div class="col-lg-12">
			<form target="blank"  action="<?php echo base_url('index.php/home/sortir_rpt');?>" method="post" class="form-inline my-2 my-lg-0" style="margin-left: 15PX;" >
      			<input class="form-control mr-sm-2" type="text" placeholder="SORTIR DATA" style="width: 75%; height: 50px;" name="keyword">
      			<button class="btn btn-danger my-2 my-sm-0" type="submit" style="height:50px;" name="cari"><i class="fa fa-print" aria-hidden="true"></i> Tampilkan Laporan</button>
   			 </form>
   			</div>					
					</div>
				</div>
			</div>
		</div>
  
  </div>
  <!-- END Modal Tambah -->

  