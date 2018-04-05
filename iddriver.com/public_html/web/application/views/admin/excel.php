<?php 

header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="รายชื่อผู้สมัครเรียน.xls"');#ชื่อไฟล์

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายชื่อผู้สมัครเรียน</title>
</head>

<body>
<h3>รายชื่อผู้สมัครเรียน</h3>
<table border="1">
<thead>
				<tr>
					<th style="text-align:center; vertical-align:middle">ลำดับที่</th>
					<th style="text-align:center; vertical-align:middle">ชื่อ</th>
                    <th style="text-align:center; vertical-align:middle">นามสกุล</th>
                    <th style="text-align:center; vertical-align:middle">เลขที่บัตรปชช.</th>
                    <th style="text-align:center; vertical-align:middle">ที่อยู่</th>
                    <th style="text-align:center; vertical-align:middle">อีเมล์</th>
                    <th style="text-align:center; vertical-align:middle">โทรศัพท์บ้าน</th>
					<th style="text-align:center; vertical-align:middle">โทรศัพท์มือถือ</th>
					<th style="text-align:center; vertical-align:middle">บัตรปชช.</th>
					<th style="text-align:center; vertical-align:middle">สำเนาทะเบียนบ้าน</th>
                    <th style="text-align:center; vertical-align:middle">ผู้รับสมัคร</th>
					<th style="text-align:center; vertical-align:middle">หลักสูตรที่ลง</th>
                    <th style="text-align:center; vertical-align:middle">ราคา</th>
                    <th style="text-align:center; vertical-align:middle">สาขา</th>
					<th style="text-align:center; vertical-align:middle">วันที่สมัคร</th>
                    <th style="text-align:center; vertical-align:middle">การชำระเงิน</th>
					
				</tr>
				<thead>
					<tbody>
				<?php
					foreach ($register as $key => $value) {
				?>
				<tr>
				<td align="center"><?php echo $key+1 ?></td>
				<td><?php echo $value['firstname']?></td>
                <td><?php echo $value['lastname'] ?></td>
                <td><?php echo '"'.$value['citizenid'].'"'; ?></td>
                <td><?php echo $value['address'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo '"'.$value['phonenumber'].'"'; ?></td>
				<td><?php echo '"'.$value['mobilenumber'].'"'; ?></td>
				<td><?php if(!empty($value['picture'])){
							echo base_url().'img/uploads/register/'.$value['picture'] ; }?></td>
				<td><?php if(!empty($value['citizencopy'])){
							 echo base_url().'img/uploads/register/'.$value['citizencopy']; }?></td>
                <td><?php echo $value['staff_name'] ?></td>
				<td><?php echo $value['course_name'] ?></td>
                <td align="center"><?php echo $value['cost']; ?></td>
                <td><?php echo $value['branch'] ?></td>
				<td align="center"><?php echo $value['register_time']; ?></td>
                <?php if($value['pay_status']==0){
						echo '<td align="center" style="color:red">ยังไม่ชำระเงิน</td>';
						} 
						else{
						echo '<td align="center" style="color:green">ชำระเงินแล้ว</td>';
						}
				?>
				
				</tr>
				<?php 
					}
				 ?>
				</tbody>
</table>
</body>
</html>
