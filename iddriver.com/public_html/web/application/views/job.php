<section>
<div class='alert alert-success' style="display:none">สมัครงานเสร็จสมบูรณื</div>
    <div class="container" style="">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div style="padding:1px 30px 30px 30px;background-color:rgba(255,255,255,0.9);" id="courseList">
                    <h3>สมัครงาน</h3>
                    <div>
					<?php 
						$id = array('id' => 'resumeform');
						echo form_open('main/employee_register',$id);
					?>
                        <div class="form-group">

                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="col-md-12">
                                            <label for="usr">ตำแหน่งที่สมัคร</label>
                                            <select class="form-control" id='courseselect' name='position'>
                                                <?php foreach ($job as $key => $value) {
                                                    echo '<option value="'.$value['job'].'">'.$value['job'].'</option>';
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label>เงินเดือนที่ต้องการ:</label>
                                            <input type="text" class="form-control" required name="salary">
                                        </div>
                                        <div class="col-md-12">
                                            <label>ชื่อ (ภาษาไทย):</label>
                                            <input type="text" class="form-control" required name="firstname">
                                        </div>
                                        <div class="col-md-12">
                                            <label>นามสกุล (ภาษาไทย ) :</label>
                                            <input type="text" class="form-control" required name="lastname">
                                        </div>
                                        <div class="col-md-12">
                                            <label>วันเดือนปีเกิด :</label>
                                            <input type="date" class="form-control" required name="birthdate">
                                        </div>
                                        <div class="col-md-12">
                                            <label>วุฒิการศึกษาสูงสุด :</label>
                                            <textarea class="form-control" required name="education"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label>ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก:</label>
                                            <input type="text" class="form-control" required name="address">
                                        </div>
                                        <div class="col-md-12">
                                            <label>โทรศัพท์มือถือ (Mobile No.):</label>
                                            <input type="text" class="form-control" required name="mobilephone">
                                        </div>
                                         <div class="col-md-12">
                                            <label>อีเมล (E-mail):</label>
                                            <input type="text" class="form-control" required name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                       <img  src="<?php echo base_url('img/job.jpg')?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class='col-xs-12'>
                                        <table class='table table-bordered'>
                                            <tbody>
                                                <tr>
                                                    <th colspan="2">ระยะงาน</th>
                                                    <th rowspan='2' >ชื่อสถานประกอบการ</th>
                                                    <th rowspan='2'>ตำแหน่ง</th>
                                                </tr>
                                                <tr>
                                                    <th>จาก</th>
                                                    <th>ถึง</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="date" name="from[]" class="form-control"/>
                                                    </td>
                                                    <td>
                                                        <input type="date" name="toDate[]" class="form-control"/>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="company[]" class='form-control'/>
                                                    </td>
                                                    <td>
                                                        <div class='col-md-10'><input type="text" name="oldPosition[]" class="form-control" /></div> <span><a class='addTd'>เพิ่ม</a></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php $this->captcha->captcha_create(); ?>
                                            </div>
                                            <div class="col-md-3" style="margin-top:20px">
                                                <div class="alert alert-danger" style="display:none">รหัสภาพไม่ถูกต้อง</div>
                                                <label for="usr">โปรดกรอกรหัสด้านบน</label>
                                <input type="text" name="captcha" class="form-control" value="" /> 
                                            </div>
                                        </div>
                                        <div style="text-align:left;">
                                            <button type="submit" class="btn btn-theme margintop10 pull-left">ยืนยันการสมัคร</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
						<?php 
						echo form_close();
						?>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>

<style>
    .modal .modal-body {
        max-height: 600px;
        overflow-y: auto;
    }
    h4 {
        color: black !important;
        text-decoration: underline;
    }
    h3 {
        color: #FF5F0B;
        border-bottom: 1px solid orange;
    }
    label {
        font-size: 18px;
    }
    #content {
        padding: 0px !important;
    }
    .courseDetail {
        color: black;
    }
    .table-bordered>thead>tr>th,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>tbody>tr>td,
    .table-bordered>tfoot>tr>td {
        border: 1px solid black;
        background: white;
        vertical-align: middle;
        text-align: center;
    }
    tr th {
        vertical-align: middle;
    }
    body{
    background: url(<?php echo base_url();?>/img/DSC_5385.jpg) no-repeat center fixed;
    background-repeat: no-repeat;
    background-size: 100% 100%;

    }
</style>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!--modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel" style="color:black">แบบฟอร์มสมัครเรียน</h4>
            </div>
            <div class="modal-body">
                <h3>ข้อมูลผู้สมัคร</h3>

            </div>
        </div>
    </div>
</div>
<!--End modal-->

<script>

	$('#resumeform').validationEngine(); // Apply form validate
    if('<?php echo $this->uri->segment(3);?>'=='success'){
        $('.alert-success').show('drop')
    }
    else if('<?php echo $this->uri->segment(3);?>'=='wrong_captcha'){
        $('.alert-danger').show();
    }
    $('.addTd').live('click', function() {
        $('.addTd').hide();
	$('table tbody').append('<tr>'
							+'<td>'
							+'<input type="date" name="from[]" class="form-control"/>'
							+  ' </td>'
							+   ' <td>'
							+	   ' <input type="date" name="toDate[]" class="form-control"/>'
							+  '  </td>'
							+   ' <td>'
							+		'<input type="text" name="company[]" class="form-control" />'
							+	'</td>'
							+	'<td>'
							+	   ' <div class="col-md-10"><input type="text" name="oldPosition[]" class="form-control" /></div> <span><a class="addTd">เพิ่ม</a></span>'
							+	'</td>'
							+'</tr>');

    });
	
</script>
</body>

</html>