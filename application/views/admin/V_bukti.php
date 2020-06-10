<!DOCTYPE html>
<html>
<title></title>
<head>
<link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/unsa.png">
  <style type="text/css">
   @font-face {
         font-family: "Code 128";
          src: url('code128-webfont.eot');
          src: url('code128.eot?#iefix') format('embedded-opentype'),
          url('code128.woff') format('woff'),
          url('code128.ttf') format('truetype'),
          url('code128.svg') format('svg');
         }
         
 
   .digital {
         font-family: "Code 128";
         font-size: 70px;
         }
</style>
</head>
<body>
  
  <table cellpadding="8"  cellspacing="0" bgcolor="" width="100%" height="100%" >
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
      <?php foreach($tbl_kp as $kp);{ ?>
      <tr><th width="30%">ID PENDAFTARAN<td><b>:</b> <?php echo $kp->no_daftar;?></td></th></tr>
      <tr><th>NPM<td><b>:</b> <?php echo $kp->npm;?></td></th></tr>
      <tr><th>NAMA MAHASISWA<td><b>:</b> <?php echo $kp->nama;?></td></th></tr>
      <tr><th>ANGKATAN<td><b>:</b> <?php echo $kp->smt?></td></th></tr>
      <tr><th>SEMESTER<td><b>:</b> <?php echo $kp->angkatan?></td></th></tr>
      <tr><th>PROGRAM STUDI<td><b>:</b> <?php echo $kp->progdi?></td></th></tr>
      <tr><th>TANGGAL AWAL PELAKSANAAN KP<td><b>:</b> <?php echo $kp->tgl_awal_kp?></td></th></tr>
      <tr><th>TANGGAL AKHIR PELAKSANAAN KP<td><b>:</b> <?php echo $kp->tgl_akhir_kp?></td></th></tr>
      <tr><th>TEMPAT KP<td><b>:</b> <?php echo $kp->tempat_kp?></td></th></tr>
      <tr><th>TANGGAL AWAL KONSULTASI<td><b>:</b> <?php echo $kp->tgl_awal_konsul?></td></th></tr>
      <tr><th>ACC LAPORAN<td><b>:</b> <?php echo $kp->tgl_akhir_konsul?></td></th></tr>
      <tr><th>JUDUL KP<td><b>:</b> <?php echo $kp->judul_kp?></td></th></tr>
      <tr><th>DOSEN PEMBIMBING<td><b>:</b> <?php echo $kp->dosen?></td></th></tr>  
      <tr><th>PERIODE<td><b>:</b> <?php echo $kp->periode?></td></th></tr> 
       <tr><th colspan="2"><center><h1><p class="digital"><?php echo $kp->npm;?></p></h1></center></th></tr>  
      <tr><th colspan="2" height="10px;"><i><b><center>*Gunakan Bukti Pendaftaran ini dengan sebaik-baiknya*</center></b></i></th></tr>  
      <?php } ?>
      
    </tr> 
  </table>
</body>
</html>

		