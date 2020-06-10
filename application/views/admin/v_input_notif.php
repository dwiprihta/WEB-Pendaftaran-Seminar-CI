<div class="container" style="margin-top: 100px; margin-bottom: 100px; width: 80%;">
    <div class="col-lg-12">

<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
  <div class="card-header" style="max-width: 100%;"><h3 style="color:#fff; padding: 20px;"><span class='fa fa-plus' aria-hidden='true'></span> FORM INPUT NOTIFIKASI USER</div>
  <div class="card-body"  style="background-color: #fff;">

    <div class="container" style=" width: 100%;">

        <div class="widget-wrap" style="text-align: left; color: #666;">
        
             <div class="single-sidebar-widget user-info-widget">
                <?php foreach($tbl_user as $user);{ ?>

            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">          
                        <input type="hidden" class="form-control" name="npm" value="<?php echo $user->npm ?>">           
                    </div>

                     <div class="form-group">          
                        <input type="hidden" class="form-control" name="user" value="<?php echo $user->username ?>">           
                    </div>

                     <div class="form-group">          
                        <input type="hidden" class="form-control" name="pass" value="<?php echo $user->password ?>">           
                    </div>

                     <div class="form-group">          
                        <input type="hidden" class="form-control" name="email" value="<?php echo $user->email ?>">           
                    </div>

                     <div class="form-group">          
                        <input type="hidden" class="form-control" name="level" value="<?php echo $user->level ?>">           
                    </div>


  			<div class="form-group">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            <textarea name="berita" id="editor1" rows="10" cols="80" placeholder="tulis pengumuman disini">
                <?php echo $user->notif?>
            </textarea>
            
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        	</div>
     		</div>
     		</div>

     		<div class="single-sidebar-widget user-info-widget">
                <center>
                <div class="button-groub">
                <input class="btn btn-warning" type="submit" name="input" size="35" value="KIRIM NOTIFIKASI">
                </center>
            </div>
            
        </form><?php } ?>
			</div>
    </div>

                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        



