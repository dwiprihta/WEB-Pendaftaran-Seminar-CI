
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-check" aria-hidden="true"></i> DETIL DATA MAHASISWA</div>
  <div class="card-body"  style="background-color: #fff;">
		<div class="widget-wrap" style="color:#666;">
      <?php foreach($tbl_mhs as $kp);{ ?>

		<div class="single-sidebar-widget user-info-widget">
				<div class="row">
        
					<table class="table table-hover">
  <thead>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">NPM</th>
      <td style="text-align: left;"><?php echo $kp->nim;?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">NAMA MAHASISWA</th>
      <td style="text-align: left;"><?php echo $kp->nama_mhs;?></td>
    </tr>

     <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">JENIS KELAMIN</th>
      <td style="text-align: left;"><?php echo $kp->jenkal?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">PROGDI</th>
      <td style="text-align: left;"><?php echo $kp->jurusan?></td>
    </tr>

     <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">ANGKATAN</th>
      <td style="text-align: left;"><?php echo $kp->angkatan?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">TEMPAT LAHIR</th>
      <td style="text-align: left;"><?php echo $kp->tempat_lahir?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">TANGGAL LAHIR</th>
      <td style="text-align: left;"><?php echo $kp->tgl_lahir?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">NO TELFON</th>
      <td style="text-align: left;"><?php echo $kp->kontak?></td>
    </tr>

<tr>
      <th  style="width: 30%; text-align: left; border-bottom:none">ALAMAT</th>
      <td style="text-align: left;"><?php echo $kp->alamat?></td>
    </tr>

  
  </tbody>
</table> 
<?php }?>
						
					
					
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>



    




		






















			