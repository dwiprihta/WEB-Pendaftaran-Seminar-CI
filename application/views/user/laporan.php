<!DOCTYPE html>
<!DOCTYPE html>
<html>
<title>CETAK LAPORAN BUKTI PENDAFTARAN</title>
<head>
<link  href="<?php echo base_url()?>/assets/css/bacot.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/unsa.png">
<!--<style type="text/css">
@font-face {
        font-family: "metalmacabre";
        src:url('../../../assets/fonts/x.ttf');
    }
     .digital {
         font-family: "calibri";
         font-size: 70px;
         }

    </style>-->
</head>
<body>
	
	</table><table cellpadding="8"  cellspacing="0" bgcolor="" width="100%" height="100%" >
<tr>
  <td width="10px"><img style="height:100px; width: 105px; " src="<?php echo base_url() ?>assets/img/unsa.png" alt="" title="" /></td>
  <td>
  <center><h3>BUKTI PENDAFTARAN SEMINAR KERJA PRAKTEK</h3></center>
  <center><h4 style="margin-top: -20px;">PROGRAM STUDI SISTEM KOMPUTER</h4></center>
  <center><h4 style="margin-top: -20px;">FAKULTAS TEKNIK ELEKTRO DAN INFORMATIKA</h4></center>
  <center><h4 style="margin-top: -20px;">UNIVERSITAS SURAKARTA</h4></center></td>
</tr>
</table>
	<hr align="left" color="black" size="3" width="100%" />
	<hr style="margin-bottom: -10;" align="left" color="black" size="1" width="100%" />
	<table border="1" bordercolor="white" cellpadding="8"  cellspacing="0" bgcolor="" width="100%" height="100%" style="margin-top: 20px; text-align: left; font-family: arial; font-size: 12px;">


		<tr style="border-color: white;">
			<?php $rows = $this->db->query("SELECT * FROM tbl_kp where npm='".$this->session->npm."'")->row_array();{?>
			<tr><th width="30%">ID PENDAFTARAN<td><b>:</b> <?php echo $rows['no_daftar'];?></td></th></tr>
			<tr><th width="30%">NIDN<td><b>:</b> <?php echo $rows['npm'];?></td></th></tr>
			<tr><th>NAMA MAHASISWA<td><b>:</b> <?php echo $rows['nama'];?></td></th></tr>
			<tr><th>ANGKATAN<td><b>:</b> <?php echo $rows['angkatan'];?></td></th></tr>
			<tr><th>SEMESTER<td><b>:</b> <?php echo $rows['smt'];?></td></th></tr>
			<tr><th>PROGRAM STUDI<td><b>:</b> <?php echo $rows['progdi'];?></td></th></tr>
			<tr><th>TANGGAL AWAL PELAKSANAAN KP<td><b>:</b> <?php echo $rows['tgl_awal_konsul'];?></td></th></tr>
			<tr><th>TANGGAL AKHIR PELAKSANAAN KP<td><b>:</b> <?php echo $rows['tgl_akhir_konsul'];?></td></th></tr>
			<tr><th>TEMPAT KP<td><b>:</b> <?php echo $rows['tempat_kp'];?></td></th></tr>
			<tr><th>TANGGAL AWAL KONSULTASI<td><b>:</b> <?php echo $rows['tgl_awal_konsul'];?></td></th></tr>
			<tr><th>ACC LAPORAN<td><b>:</b> <?php echo $rows['tgl_akhir_konsul'];?></td></th></tr>
			<tr><th>JUDUL KP<td><b>:</b> <?php echo $rows['judul_kp'];?></td></th></tr>
			<tr><th>DOSEN PEMBIMBING<td><b>:</b> <?php echo $rows['dosen'];?></td></th></tr>	
			<tr><th>PERIODE<td><b>:</b> <?php echo $rows['periode'];?></td></th></tr>	
			<tr><th>BERKAS<td><b>:</b> <?php echo $rows['berkas'];?></td></th></tr>
			<tr><th colspan="2"><center><h1><p class="digital"><?php echo $rows['npm'];?></p></h1></center></th></tr>  
			<tr><th colspan="2" height="5px;"><i><b><center>*Gunakan Bukti Pendaftaran ini dengan sebaik-baiknya*</center></b></i></th></tr>	
			<?php } ?>
			
		</tr>	
	</table>

</body>
</html>