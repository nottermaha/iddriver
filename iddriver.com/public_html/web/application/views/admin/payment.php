	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">การชำระงิน <small>จำนวน <?php echo count($register)?>  คน</small></h2>
		</div>
		<table class='table table-bordered table-hover' id="std_table">
			<thead>
				<tr>
					<th style="width:7%">ลำดับที่</th>
					<th style="width:20%">ชื่อ-นามสกุล</th>
					<th style="width:15%">เลขประจำตัวประชาชน</th>
					<th style="width:15%">หลักสูตรที่ลง</th>
					<th style="width:15%">เรียนสาขา</th>
					<th style="width:10%">วันที่สมัคร</th>
					<th style="width:15%">ช่องทางที่สมัคร</th>
					<th style="width:15%">สาขา</th>
					<th style="width:5%">ราคา</th>
					<th style="width:10%">การชำระเงิน</th>
				</tr>
				<thead>
					<tbody>
				<?php
					foreach ($register as $key => $value) {?>
				<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
				<td><?php echo $value['citizenid'] ?></td>
				<td><?php echo $value['course_name'] ?></td>
				<td><?php echo $value['train_branch'] ?></td>
				<td><?php echo date("d-m-Y", strtotime($value['register_time'])); ?></td>
				<td><?php echo (empty($value['invited_by']))? 'ผ่านทางเว็บไซต์':$value['invited_by'] ?></td>
				<td><?php echo $value['branch'] ?></td>
				<td><?php echo $value['cost'] ?></td>
				 

				<td>
					<?php if($value['pay_status']==0){ ?>
						<a style='color:red' href='<?php echo site_url('admin/update_payment/'.$value['ID']) ?>/1 ' ><i class="fa fa-times fa-2x"></i></a>
					<?php }
					else{ ?>
						<a style='color:green' href='<?php echo site_url('admin/update_payment/'.$value['ID']) ?>/0 '><i class="fa fa-check fa-2x"></i></a>
					<?php } ?>
				</td>
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