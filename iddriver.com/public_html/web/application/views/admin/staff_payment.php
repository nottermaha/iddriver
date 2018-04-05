
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">รายชื่อผู้ที่ชำระเงินแล้ว <small>จำนวน <?php echo count($register)?>  คน</small></h2>
		</div>
		<table class='table table-bordered' id="std_table">
			<thead>
				<tr>
					<th style="width:7%">ลำดับที่</th>
					<th style="width:20%">ชื่อ-นามสกุล</th>
					<th style="width:15%">หลักสูตรที่ลง</th>
					<th style="width:15%">สาขา</th>
					<th style="width:15%">ช่องทางการสมัคร</th>
					<th style="width:10%">วันที่สมัคร</th>
					<th style="width:10%">การชำระเงิน</th>
				</tr>
				<thead>
					<tbody>
				<?php
					foreach ($register as $key => $value) {
						$img = empty($value['picture'])? base_url('img/No_Image_Available.png'):base_url('img/uploads/register/'.$value['picture']);
				?>
				<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
				<td><?php echo $value['course_name'] ?></td>
				<td><?php echo $value['branch'] ?></td>
				<td><?php echo (empty($value['invited_by']))? 'ผ่านทางเว็บไซต์' : $value['invited_by'] ?></td>
				<td><?php echo date("d-m-Y", strtotime($value['register_time'])); ?></td>
				<?php if($value['pay_status']==0){
						echo '<td style="color:re:;d">ยังไม่ชำระเงิน</td>';
						} 
						else{
						echo '<td style="color:green">ชำระเงินแล้ว</td>';
						}
				?>
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
#std_table_filter{
	float: right;
}
</style>
                
                
            </div>
            <!-- /.row -->
        </div>