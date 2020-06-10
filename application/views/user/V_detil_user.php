
<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><i class="fa fa-check" aria-hidden="true"></i> DETIL DATA PENDAFTAR</div>
  <div class="card-body"  style="background-color: #fff;">

		<div class="widget-wrap" style="color:#666;">

<?php $rows = $this->db->query("SELECT * FROM tbl_kp where npm='".$this->session->npm."'")->row_array();{?>
		<div class="row">
        <div class="col-lg-12" style="margin-left:20px;">
           <div class="dropdown">
                <a href="#" class="btn btn-primary dropdown-toggle" id="dropdownMenu1"
                data-toggle="dropdown" style="margin-right: 10px ;"><i class="fa fa-pencil" aria-hidden="true"></i> Ubah Data</a>
                <ul class="dropdown-menu" style="background-color:#fff; border:1px solid #fff">  
                  <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo base_url('index.php/user/edit_kp/').$rows['npm'];?>"  style="margin-right: 10px ;" ><i class="fa fa-pencil" aria-hidden="true"></i> Ubah Data Pendaftarn</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url('index.php/user/edit_berkas/').$rows['npm'];?>"  style="margin-right: 10px ;" ><i class="fa fa-book" aria-hidden="true"></i> Ubah Berkas Pendaftaran</a></li>
                </ul>

                </ul>
     			   				 <a href="<?php echo base_url('index.php/user/data_bukti');?>" target="blank" style="margin-right: 10px ;" class="btn btn-warning"><i class="fa fa-print" aria-hidden="true"></i> Cetak Data Saya</a>
   				</div>
           
    		</div></div>

        <div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               <?=$this->session->flashdata('notif')?></div></div>
				
		<div class="single-sidebar-widget user-info-widget">
						<div class="row">

					<table class="table table-hover">
  <thead>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">ID DAFTAR</th>
      <td style="text-align: left;"><?php echo $rows['no_daftar'];?></td>
    </tr>
   
    <tr>
      <th style="text-align: left; width: 30%;">NPM</th>
      <td style="text-align: left;"><?php echo $rows['npm'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">NAMA MAHASISWA</th>
      <td style="text-align: left;"><?php echo $rows['nama'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">ANGKATAN</th>
      <td style="text-align: left;"><?php echo $rows['angkatan'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">SEMESTER</th>
      <td style="text-align: left;"><?php echo $rows['smt'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">PROGRAM STUDI</th>
      <td style="text-align: left;"><?php echo $rows['progdi'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">TANGGAL AWAL PELAKSANAAN</th>
      <td style="text-align: left;"><?php echo $rows['tgl_awal_kp'];?></td>
    </tr>

<tr>
      <th style="text-align: left;">TANGGAL AKHIR PELAKSANAAN</th>
      <td style="text-align: left;"><?php echo $rows['tgl_akhir_kp'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">TEMPAT KP</th>
      <td style="text-align: left;"><?php echo $rows['tempat_kp'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">TANGGAL AWAL  KONSULTASI</th>
      <td style="text-align: left;"><?php echo $rows['tgl_awal_konsul'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">TANGGAL AKHIR  KONSULTASI</th>
      <td style="text-align: left;"><?php echo $rows['tgl_akhir_konsul'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">JUDUL KP</th>
      <td style="text-align: left;"><?php echo $rows['judul_kp'];?></td>
    </tr>

    <tr>
      <th style="text-align: left;">DOSEN PEMBIMBING</th>
      <td style="text-align: left;"><?php echo $rows['dosen'];?></td>
    </tr>

     <tr>
      <th style="text-align: left;">PERIODE</th>
      <td style="text-align: left;"><?php echo $rows['periode'];?></td>
    </tr>

    <tr>
      <th style="width: 30%; text-align: left; border-bottom:none">BERKAS</th>
      <td style="text-align: left;"><?php echo $rows['berkas']?></td>
    </tr>

    <?php } ?>
  </tbody>
</table> 
						
					
					
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>

		






















			