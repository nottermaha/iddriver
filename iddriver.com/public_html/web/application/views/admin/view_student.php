	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $register['firstname'].' '.$register['lastname'] ?></h1>
		</div>
			<div class="col-md-6">
				<table class="table">
					<tr>
						<td style="width:30%;text-align:right">ชื่อ-สกุล</td>
						<td><?php echo $register['firstname'].' '.$register['lastname'] ?></td>
					</tr>					
					<tr>
						<td style="width:30%;text-align:right">เลขประจำตัวประชาชน</td>
						<td><?php echo $register['citizenid'] ?></td>
					</tr>
					<tr>
						<td style="width:20%;text-align:right">ที่อยู่</td>
						<td><?php echo $register['address'] ?></td>
					</tr>
					<tr>
						<td style="width:20%;text-align:right">อีเมล</td>
						<td><?php echo $register['email'] ?></td>
					</tr>
					<tr>
						<td style="width:20%;text-align:right">เบอร์โทรศัพท์</td>
						<td><?php echo $register['phonenumber'] ?></td>
					</tr>
					<tr>
						<td style="width:20%;text-align:right">เบอร์โทรศัพท์มือถือ</td>
						<td><?php echo $register['mobilenumber'] ?></td>
					</tr>
					<tr>
						<td style="width:20%;text-align:right">ลงทะเบียนหลักสูตร</td>
						<td><?php echo $register['course_name'] ?></td>
					</tr>
				</table>
			</div>
			<div class="col-md-3">
            <a href="<?php echo empty($register['picture'])? base_url('img/No_Image_Available.png'):base_url('img/uploads/register/'.$register['picture']); ?>" target="_blank">
				<img style="width:100%;border:1px solid #f6f6f6" src="<?php echo empty($register['picture'])? base_url('img/No_Image_Available.png'):base_url('img/uploads/register/'.$register['picture']); ?>" alt=""/></a>
                <h4 align="center">บัตรประจำตัวประชาชน</h4>
			</div>
            <div class="col-md-3">
            <a href="<?php echo empty($register['citizencopy'])? base_url('img/No_Image_Available.png'):base_url('img/uploads/register/'.$register['citizencopy']); ?>" target="_blank">
				<img style="width:100%;border:1px solid #f6f6f6" src="<?php echo empty($register['citizencopy'])? base_url('img/No_Image_Available.png'):base_url('img/uploads/register/'.$register['citizencopy']); ?>" alt=""/></a>
                <h4 align="center">สำเนาทะเบียนบ้าน</h4>
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
td{
	vertical-align: top !important;
	border: none !important;
}
</style>
                
                
            </div>
            <!-- /.row -->
        </div>