	<br />

    	<div class="row">
				<div class="col-xs-7">
					<?php echo form_open_multipart('admin/insertGallery'); ?>
						
						<input type="hidden" name = "gallerytype" value="1">
						<label for="usr">ชื่ออัลบั้ม</label>
						<input class="form-control" name="title"  required/>
						<label for="usr">รูปภาพ</label> <small>(จำกัด 20 ไฟล์ต่อการอัพโหลด1ครั่ง)</small>
						<input id="input-id1" name="files[]" type="file" class="file" multiple="true"  data-preview-file-type="text">
					<br/>
						<input type="submit" class="btn btn-success" value="Upload">
					<?php echo form_close(); ?>
				</div>
			</div>
            <hr />
            <div class="row">
            	<div class="col-xs-12">
                	<div role="tabpanel">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <?php for($i=0;$i<count($getAlbum);$i++){ ?>
                        <li role="presentation" <?php if($i==0){ echo 'class="active"';}?>><a href="#<?php echo $getAlbum[$i]->ID ; ?>" aria-controls="<?php echo $getAlbum[$i]->ID ; ?>" role="tab" data-toggle="tab"><?php echo $getAlbum[$i]->name ; ?></a></li>
                        <?php }?>
                      </ul>
                    
                      <!-- Tab panes -->
                      <div class="tab-content">
                      <?php for($j=0;$j<count($getAlbum);$j++){ ?>
                        <div role="tabpanel" class="tab-pane <?php if($j==0){ echo 'active';}?>" id="<?php echo $getAlbum[$j]->ID ; ?>">
                        	<div class="row">
                            <?php for($k=0;$k<count($getGallery);$k++){
									 if($getAlbum[$j]->ID==$getGallery[$k]->albumID){?>
            					<div class="col-xs-2">
                                <a href="<?php echo site_url('admin/deleteGallery').'/'.$getGallery[$k]->ID; ?>" onclick="return confirm('ยืนยันการลบ ใช่หรือไม่?')">
                                	<img src="<?php echo base_url()?>/img/gallery/<?php echo $getGallery[$k]->thumbnail ; ?>" width="100%"/><br /><br />
								</a>
                                </div>
								<?php } 
                                }?>    
                        </div>
                        <div class="row">
            	<div class="col-xs-12" align="center">
                        <small style="color:#F00;">*** กดที่รูปเพื่อทำการลบ หรือ </small>&nbsp;
                        <a href="<?php echo site_url('admin/deleteAlbum').'/'.$getAlbum[$j]->ID;?>" onclick="return confirm('ยืนยันการลบ ใช่หรือไม่?')">
              <button class="btn btn-danger btn-flat btn-sm" ><i class="fa fa-times"></i> ลบทั้งอัลบั๊ม</button>
            </a>
                        </div>
                        </div>
                        </div>
                      <?php }?>
                      </div>
                    
                    </div>
                </div>
            </div><br />
<br />


	<style>
	.tab-pane{
	padding-top:20px;
		}</style>
        <script>
			$("#input-id1").fileinput({
				overwriteInitial: false,
				maxFileSize: 3000,
				maxFileCount: 20,
				allowedFileTypes: ['image']
			});
			$("#input-id2").fileinput({
				overwriteInitial: false,
				maxFileSize: 3000,
				maxFileCount: 20,
				allowedFileTypes: ['image']
			});
			$("#input-id3").fileinput({
				overwriteInitial: false,
				maxFileCount: 20,
				allowedFileTypes: ['image']
			});
		</script>