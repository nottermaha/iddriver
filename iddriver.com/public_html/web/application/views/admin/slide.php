<br />
			<div class="row">
					<div class="col-md-12">
					<div class="panel panel-default">
  <div class="panel-heading">Upload slide picture</div>
  <div class="panel-body">
    <?php echo form_open_multipart('admin/uploadslide'); ?>
						<label for="usr">รูปภาพ</label>
						 <input id="input-id3" type="file" name="files[]" class="file" multiple="true" data-show-upload="false" data-show-caption="true">
					
				<div style="margin-top:10px">
					<button type="submit" class="btn btn-success">Upload</button>
				</div>
				<?php echo form_close(); ?>
					</div>
  </div>
</div></div>
		<div class="row">
		<?php
			echo form_open_multipart('admin/updateSlide');
		?>
		<div class="col-md-8 col-md-offset-2">
			<table class='table table-bordered'>
				<thead>
					<tr style="white-space:nowrap;">
						<th style="width:10%">แสดงใน Slide</th>
						<th style="">ตัวอย่างภาพ</th>
						<th style="width:10%">ลบ</th>
					</tr>
				</thead>
				<tbody>
					<?php
					for($i=0;$i<count($slide);$i++){
						echo '<tr id="'.$slide[$i]->ID.'">';
						echo '<td align="center" style="vertical-align:middle">';
						if($slide[$i]->status==0){
							echo '<input name="status[]" type="checkbox" value="'.$slide[$i]->ID.'" />' ;
						}
						else{
							echo '<input name="status[]" type="checkbox" value="'.$slide[$i]->ID.'" checked="true" />' ;
						}
						echo '</td>';
						echo '<td>';
						echo '<img src="'.base_url().'/img/slides/'.$slide[$i]->img_name.'" style="width:100%"/>' ;
						echo '</td>';
						echo '<td style="vertical-align:middle">';
						echo '<a href="'.site_url('admin/deleteslide/'.$slide[$i]->ID).'">ลบ</a>' ;
						echo '</td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
			<div align="center">
		<input class="btn btn-success btn-lg" type="submit" value="ยืนยัน" style="margin-bottom:10px;"/>
        </div>
		</div><br />
<br />

		
		<?php
			echo form_close();
		
		?>
		
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