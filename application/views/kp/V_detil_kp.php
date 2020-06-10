
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">

    <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
    
  <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-check" aria-hidden="true"></i> DETIL DATA PENDAFTAR</div>
  <div class="card-body"  style="background-color: #fff;">
		<div class="widget-wrap" style="color:#666;">
      <?php foreach($tbl_kp as $kp);{ ?>

		<div class="row">
           <div class="col-lg-8" style="margin-left:20px;">
           
           <div class="dropdown">
                <a href="#" class="btn btn-primary dropdown-toggle" id="dropdownMenu1"
                data-toggle="dropdown" style="margin-right: 10px ;"><i class="fa fa-pencil" aria-hidden="true"></i> Ubah Data</a>
                <ul class="dropdown-menu" style="background-color:#fff; border:1px solid #fff">  
            
                  <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo base_url('index.php/home/edit_kp/').$kp->npm;?>"  style="margin-right: 10px ;" ><i class="fa fa-pencil" aria-hidden="true"></i> Ubah Data  Pendaftarn</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url('index.php/home/edit_berkas/').$kp->npm;?>""  style="margin-right: 10px ;" ><i class="fa fa-book" aria-hidden="true"></i> Ubah Berkas Pendaftaran</a></li>
                </ul>

                </ul>
     			   				 <a href="<?php echo base_url('index.php/home/data_bukti/').$kp->npm;?>" target="blank" style="margin-right: 10px ;" class="btn btn-warning"><i class="fa fa-print" aria-hidden="true"></i> Cetak Data Saya</a>
   				</div>
    </div>

			
		<div class="single-sidebar-widget user-info-widget">
				<div class="row">
        
					<table class="table table-hover">
  <thead>
<tr>
      <th style="width: 30%; text-align: left; border-bottom:none">ID DAFTAR</th>
      <td style="text-align: left;"><?php echo $kp->no_daftar;?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">NPM</th>
      <td style="text-align: left;"><?php echo $kp->npm;?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">NAMA MAHASISWA</th>
      <td style="text-align: left;"><?php echo $kp->nama;?></td>
    </tr>

     <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">SEMESTER</th>
      <td style="text-align: left;"><?php echo $kp->smt?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">ANGKATAN</th>
      <td style="text-align: left;"><?php echo $kp->angkatan?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">PROGRAM STUDI</th>
      <td style="text-align: left;"><?php echo $kp->progdi?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">TANGGAL AWAL PELAKSANAAN</th>
      <td style="text-align: left;"><?php echo $kp->tgl_awal_kp?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">TANGGAL AKHIR PELAKSANAAN</th>
      <td style="text-align: left;"><?php echo $kp->tgl_akhir_kp?></td>
    </tr>

<tr>
      <th  style="width: 30%; text-align: left; border-bottom:none">TEMPAT PELAKSANAAN KP</th>
      <td style="text-align: left;"><?php echo $kp->tempat_kp?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">TANGGAL AWAL KONSULTASI</th>
      <td style="text-align: left;"><?php echo $kp->tgl_awal_konsul?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">TANGGAL AKHIR  KONSULTASI</th>
      <td style="text-align: left;"><?php echo $kp->tgl_akhir_konsul?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">JUDUL KERJA PRAKTEK</th>
      <td style="text-align: left;"><?php echo $kp->judul_kp?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">DOSEN PEMBIMBING</th>
      <td style="text-align: left;"><?php echo $kp->dosen?></td>
    </tr>

     <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">PERIODE</th>
      <td style="text-align: left;"><?php echo $kp->periode?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">BERKAS</th>
      <td style="text-align: left;"><?php echo $kp->berkas?></td>
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
</div>

<!--konfirmasi edit data-->
<script language="javascript">
function tanya_hapus(){
    if (confirm("APAKAH ANDA YAKIN MENGHAPUS DATA INI ???"))
{return true;
}else{
    return false;
}
}
</script>


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

    




		






















			