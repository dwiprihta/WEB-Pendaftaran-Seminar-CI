<!DOCTYPE html>
<html>
<title></title>
<head>
<link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/unsa.png">
</head>
<body>
<table cellpadding="8"  cellspacing="0" bgcolor="" width="100%" height="100%" >
<tr>
	<td width="10px"><img style="height:100px; width: 105px; " src="<?php echo base_url() ?>assets/img/unsa.png" alt="" title="" /></td>
	<td><center><h3>LAPORAN DATA SEMINAR KERJA PRAKTEK</h3></center>
	<center><h4 style="margin-top: -20px;">PROGRAM STUDI SISTEM KOMPUTER</h4></center>
	<center><h4 style="margin-top: -20px;">FAKULTAS TEKNIK ELEKTRO DAN INFORMATIKA</h4></center>
	<center><h4 style="margin-top: -20px;">UNIVERSITAS SURAKARTA</h4></center></td>
</tr>
</table>
	<hr align="left" color="black" size="3" width="100%" />
	<hr style="margin-bottom: -10;" align="left" color="black" size="1" width="100%" />
	<table border="1" bordercolor="black" cellpadding="8"  cellspacing="0" bgcolor="" width="100%" height="100%" style="margin-top: 20px">

		<tr style="border:2px;border-style: solid; border-color: black; font-size: 12px; font-family: calibri">
			<th>NO</th>
			<th>NPM</th>
			<th>NAMA MAHASISWA</th>
			<th>ANGKATAN</th>
				<th>PERIODE</th>
				<th>DOSEN PEMBIMBING</th>
			<th>JUDUL SEMINAR KERJA PRAKTEK</th>
			<th>TANGGAL SELESAI </th>
		</tr >
			<?php 
		        $no=1;
		        if(!empty($tbl_kp))
		        foreach ($tbl_kp as $kp ) {?>
				<tr style="font-size: 12px; font-family: calibri">
				<td><?php echo $no++?></td>
				<td><?php echo $kp->npm?></td>
				<td><?php echo $kp->nama ?></td>
				<td><?php echo $kp->angkatan ?></td>
				<td><?php echo $kp->periode ?></td>
				<td><?php echo $kp->dosen ?></td>
				<td><?php echo $kp->judul_kp ?></td>
				<td><?php echo $kp->tgl_akhir_konsul ?></td>				</tr>

				<?php} else {?>
				<!--<tr><td colspan='10'>DATA TIDAK DITEMUKAN</td></tr>-->
				<?php } ?>
	</table>

</body>
</html>