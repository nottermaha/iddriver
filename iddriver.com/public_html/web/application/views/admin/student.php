
	<div class="row">
		<div class="col-lg-10">
			<h2 class="page-header">รายชื่อผู้สมัครเรียน <small>จำนวน <?php echo count($register)?>  คน</small></h2>
		</div>
		<div class="col-lg-2"><br><br>
			<a href="<?php echo site_url('admin/excel'); ?>" target="_blank"><button  class="btn btn-primary">Export to Excel</button></a>
		</div>
		</div>
		<div class="row">
		<table class='table table-bordered' id="std_table">
			<thead>
				<tr>
					<th style="width:5%; text-align:center; vertical-align:middle">ลำดับที่</th>
					<th style="width:20%;text-align:center; vertical-align:middle">ชื่อ-นามสกุล</th>
                     
					<th style="width:15%;text-align:center; vertical-align:middle">หลักสูตรที่ลง</th>
					 <th style="width:10%;text-align:center; vertical-align:middle">เรียนสาขา</th>
					<th style="width:20%;text-align:center; vertical-align:middle">ผู้รับสมัคร</th>
                    <th style="width:10%;text-align:center; vertical-align:middle">สาขา</th>
                     
					<th style="width:10%;text-align:center; vertical-align:middle">วันที่สมัคร</th>
					<th style="width:10%;text-align:center; vertical-align:middle">การชำระเงิน</th>
					<th style="width:10%;text-align:center; vertical-align:middle">รายละเอียด</th>
				</tr>
				<thead>
					<tbody>
				<?php
					foreach ($register as $key => $value) {
				?>
				<tr>
				<td align="center"><?php echo $key+1 ?></td>
				<td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
 
				<td><?php echo $value['course_name'] ?></td>
				  <td><?php echo $value['train_branch'] ?></td>
                 
                 <td><?php echo $value['staff_name'] ?></td>
              <td><?php echo $value['branch'] ?></td>
				<td align="center"><?php echo date("d-m-Y", strtotime($value['register_time'])); ?></td>
				<?php if($value['pay_status']==0){
						echo '<td align="center" style="color:red">ยังไม่ชำระเงิน</td>';
						} 
						else{
						echo '<td align="center" style="color:green">ชำระเงินแล้ว</td>';
						}
				?>
				<td align="center"><a href="<?php echo site_url('admin/view_student/'.$value['ID']) ?>">ดูรายละเอียด</a></td>
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