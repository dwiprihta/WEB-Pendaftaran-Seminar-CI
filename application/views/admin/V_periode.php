<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 100%;">
	<div class="col-lg-12">

		<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><span class='fa fa-check' aria-hidden='true'></span> DATA PERIODE</div>
  <div class="card-body"  style="background-color: #fff;">

		<div class="widget-wrap" style="color:#666;">

		<div class="row">
			<div class="col-lg-8">
			<form action="<?php echo base_url('index.php/home/periode');?>" method="post" class="form-inline my-2 my-lg-0" style="margin-left: 15PX;">
      			<input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search">
      			<button class="btn btn-success my-2 my-sm-0" type="submit"><span class='fa fa-search' aria-hidden='true'></span></button>
   			 </form>
   			</div>
   				<div class="col-lg-" style="margin-left:50px;">
   				 <a href="" data-toggle="modal" data-target="#tambah-prd" style="margin-right: 10px ;"  class="btn btn-primary"><span class='fa fa-plus' aria-hidden='true'></span> Tambah</a>
   				  <a href="<?php echo base_url('index.php/home/periode');?>" style="margin-right: 10px ;"  class="btn btn-warning"><span class='fa fa-refresh' aria-hidden='true'></span> Refresh</a>
   				</div>
    		</div>

        <div class="row" style="margin-top: 20px;margin-bottom: -10px; margin-right: 20px; margin-left: 20px;"> <div class="col-lg-12">
               <?=$this->session->flashdata('notif')?></div></div>

				<div class="single-sidebar-widget user-info-widget">
						<div class="row">
							<table class="table table-striped">
							  <thead style="background: orange; color: #fff;">
							    <tr>
							      <th scope="col">NO</th>
							      <th scope="col">PERIODE</th>
                    <th scope="col">OPERASI</th>
							      
							    </tr>
							  </thead>
							  <tbody>

                  <!--PHP CODE-->
                            <?php 
                             $no=1;
                             $i=$this->uri->segment('5') + 1;
                             if(!empty($tbl_periode))
                              foreach ($tbl_periode as $periode) {?>
							    <tr>		     
							      <td><?php echo $no++?></td>
                    <td><?php echo  $periode->periode?></td>
							      <td>


             <a onclick='return tanya()' href="<?php echo base_url('index.php/home/hapus_periode/'). $periode->id;?>" title='Hapus Data' class='btn btn-danger btn-sm' name='hapsh'><span class='fa fa-trash' aria-hidden='true'></span></a></td>
							    </tr>
                  <?php } else {?>
                        <tr><td colspan='10'><div class='alert alert-danger' role='alert'> DATA TIDAK DITEMUKAN <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div></td></tr>
                  <?php } ?>						    
							  </tbody>
							</table> 
						</div>
					</div>

<div>
  <?php 
        echo $this->pagination->create_links();
       ?>
 <!--<ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>-->
				</div>

			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-prd" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header"><h4 class="modal-title">TAMBAH PERIODE</h4>
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>   
              </div>
              <form class="form-horizontal" action="<?php echo base_url('index.php/home/input_periode')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-3 control-label">PERIODE</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="periode" placeholder="PERIODE BARU">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                        <button type="button" type="reset" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->

  <!--konfirmasi edit data-->
<script language="javascript">
function tanya(){
    if (confirm("APAKAH ANDA YAKIN AKAN MENGHAPUS DATA INI ???"))
{return true;
}else{
    return false;
}
}
</script>
<!--konfirmasi edit data-->


		