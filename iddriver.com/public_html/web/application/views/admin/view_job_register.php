	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">รายละเอียดผู้สมัครงาน </h2>
		</div>
			<div class="col-md-6">
				<table class="table detail">
					<tr>
						<td style="width:30%;text-align:right">ชื่อ-สกุล</td>
						<td><?php echo $register['firstname'].' '.$register['lastname'] ?></td>
					</tr>				
					<tr>
						<td style="width:20%;text-align:right">ที่อยู่</td>
						<td><?php echo $register['address'] ?></td>
					</tr>
					<tr>
						<td style="width:20%;text-align:right">เบอร์โทรศัพท์</td>
						<td><?php echo $register['mobilephone'] ?></td>
					</tr>
					<tr>
						<td style="width:20%;text-align:right">อีเมล</td>
						<td><?php echo $register['email'] ?></td>
					</tr>
					<tr>
						<td style="width:20%;text-align:right">สมัครงานตำแหน่ง</td>
						<td><?php echo $register['position'] ?></td>
					</tr>
				</table>
			</div>
				<div class="col-md-12">
			</hr>
			<h3>ประสบการณ์</h3>
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>ชื่อบริษัท</td>
							<td>วันเริ่มทำงาน</td>
							<td>วันสุดท้ายที่ทำงาน</td>
							<td>ตำแหน่ง</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($old_work as $key => $value) {?>
						<tr>
							<td><?php echo $value['company'] ?></td>
							<td><?php echo $value['workfrom'] ?></td>
							<td><?php echo $value['workto'] ?></td>
							<td><?php echo $value['position'] ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>

    </div>
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
				 $('#title').val(data[0].title);
				 $('#newseditor').val(data[0].description);
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
.detail td{
	vertical-align: top !important;
	border: none !important;
}
</style>
                
                
            </div>
            <!-- /.row -->
        </div>