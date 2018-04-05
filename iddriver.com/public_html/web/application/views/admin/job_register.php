
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">รายชื่อผู้สมัครงาน  <small>จำนวน <?php echo count($register)?>  คน</small></h2>
		</div>
		<table class='table table-bordered' id="std_table">
			<thead>
				<tr>
					<th style="width:7%">ลำดับที่</th>
					<th style="width:30%">ชื่อ-นามสกุล</th>
					<th style="width:30%">ตำแหน่งที่สมัคร</th>
					<th style="width:10%">วันที่สมัคร</th>
					<th style="width:10%">รายละเอียด</th>
				</tr>
				<thead>
					<tbody>
				<?php
					foreach ($register as $key => $value) {
						$img = empty($value['picture'])? base_url('img/No_Image_Available.png'):base_url('img/uploads/'.$value['picture']);
				?>
				<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
				<td><?php echo $value['position'] ?></td>
				<td><?php echo date("d-m-Y", strtotime($value['date'])) ?></td>
				<td><a href="<?php echo site_url('admin/view_job_register/'.$value['ID']) ?>">ดูรายละเอียด</a></td>
				</tr>
				<?php 
					}
				 ?>
				</tbody>
				</table>
    </div>
<script>
    $('#std_table').DataTable();
</script>
<style>
label{
font-size:13px;	
}
td{
	vertical-align: middle !important;
}
</style>
                
                
            </div>
            <!-- /.row -->
        </div>