            <div class="row">
			<div class="col-lg-12">
                    <h1 class="page-header">การรับสมัครงาน</h1>
                </div>
                <div class="col-md-6">
	<table class='table table-bordered' id="newstable" >
				<thead>
					<tr>
						<th style="width:30%">ตำแหน่ง</th>
						<th style="width:10%">ลบ</th>
					</tr>
				<thead>
				<tbody>
				<?php foreach ($job as $key => $value) {?>
					<tr>
						<td><?php echo $value['job']; ?></td>
						<td><a href="<?php echo site_url('admin/delete_job/'.$value['ID']) ?>">ลบ</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
		
			<div class="col-md-12">
				<button data-toggle="modal" data-target="#myModal" type="submit" class="btn btn-success" style="margin-bottom:20px">เพิ่ม</button>
			</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เปิดรับตำแหน่งงาน</h4>
      </div>
	  <?php echo form_open('admin/insert_job'); ?>
      <div class="modal-body">
			<input type="hidden" name="news_id" id="new_id">
			<label for="usr">ตำแหน่ง</label>
			<input class="form-control" name="job_name" id="title"/>
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
   
<style>
label{
font-size:13px;	
}
</style>
                
                
            </div>
            <!-- /.row -->
        </div>