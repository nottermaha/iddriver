<link rel="stylesheet" href="<?php echo base_url()?>css/kendo/kendo.common.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>css/kendo/kendo.default.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>css/kendo/kendo.dataviz.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>css/kendo/kendo.dataviz.default.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>css/kendo/kendo.default.mobile.min.css" />
	<link href="<?php echo base_url()?>css/datatable.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>js/kendo/kendo.all.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">ความรู้เรื่องจราจร</h1>
		</div>
		<table class='table table-bordered' id="newstable">
			<thead>
				<tr>
					<th style="width:100px">รูปภาพ</th>
					<th>ชื่อหัวข้อ</th>
					<th>ลบ</th>
					<th>แก้ไข</th>
				</tr>
				<thead>
					<tbody>
				<?php
					for($i=0;$i<count($article);$i++){
						echo '<tr>';
						echo 	'<td>';
						echo 		'<img src="'.base_url().'/img/uploads/'.$article[$i]->image.'" width="100"/>';
						echo 	'</td>';
						echo 	'<td>';
						echo 		$article[$i]->title;
						echo 	'</td>';
						echo 	'<td>';
						echo 		'<a href="'.site_url('admin/delete_article/'.$article[$i]->ID).'"  onclick="return confirm(\'ยืนยันการลบ ใช่หรือไม่?\')">ลบ</a>';
						echo 	'</td>';
						echo 	'<td>';
						echo 		'<a href="#" onclick="editnews('.$article[$i]->ID.')" >แก้ไข</a>';
						echo 	'</td>';
						echo '</tr>';
						
					}
				?>
				</tbody>
				</table>
				<div class="col-lg-12">
					<h1 class="page-header">เพิ่มข่าวสาร</h1>
				</div>
				<div id="Add" class="col-md-8 col-xs-12" style="">
					<?php echo form_open_multipart('admin/insert_article'); ?>
						<label for="usr">หัวข้อ</label>
						<input class="form-control" name="title" />
						<label for="usr">รูปภาพ</label>
						<input type="file" name="files[]" class="file" class="form-control" data-preview-file-type="text">
						<label for="usr">เนื้อหา</label>

						<textarea name="content" id="editor" class="form-control" rows="10"></textarea>
						<br/>
						<button type="submit" class="btn btn-success" style="margin-bottom:20px">เพิ่ม</button>
					<?php echo form_close(); ?>
				</div>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">ความรู้เรื่องจราจร</h4>
					</div>
			  <?php echo form_open_multipart('admin/editarticle'); ?>
				<div class="modal-body">
					<input type="hidden" name="article_id" id="new_id">
					<label for="usr">หัวข้อ</label>
					<input class="form-control" name="title" id="title" />
					<label for="usr">รูปภาพ</label>
					<input type="file" name="files" class="file" class="form-control" data-preview-file-type="text">
					<label for="usr">เนื้อหา</label>
					<div id="modal-description">
						<textarea name="description" id="newseditor" rows="5" class="form-control"></textarea>
					</div>
					<br/>
				</div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-primary" type="submit">Save changes</button>
			  </div>
				<?php echo form_close(); ?>
				</div>
		  </div>
		</div>
    </div>
        <script>
                $(document).ready(function() {
                    // create Editor from textarea HTML element with default set of tools
                    $("#editor").kendoEditor({ resizable: true });
					$("#newseditor").kendoEditor({ resizable: true });
                });
            </script>
<script>
    $(document).ready(function() {
        $(".editor").kendoEditor();
    });
    $('#newstable').DataTable();

	$('#newstable').DataTable();
		var editnews = function(newsID){
		 $.ajax({
			url: '<?php echo site_url()?>/admin/get_article',
			type: 'POST',
			data:{'id':newsID},
			dataType: "json",
			success: function(data) {
				$('#myModal').modal();
				 $('#new_id').val(data[0].ID);
				 $('#modal-description').empty();
				 $('#modal-description').append('<textarea class="editor" name="description">'+data[0].description+'</textarea>');
				$(".editor").kendoEditor()
			},
			error: function() {
				   
			}
		})
		}
    var convert_html=function(mystring){
    	return mystring.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
    }
</script>
<style>
label{
font-size:13px;	
}
</style>
                
                
            </div>
            <!-- /.row -->
        </div>