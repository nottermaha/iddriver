<?php 
	$session = $this->session->all_userdata();
?>
<div class='alert alert-success' style="display:none">สมัครเรียนเสร็จสมบูรณ์</div>
<section id="content" style="background:transparent">
    <div class="container" style="">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ข้อมูลผู้สมัคร</h3>
                    </div>
                    <div class="panel-body">
                        <?php $id=array( 'id'=> 'registerform'); 
                        
						echo form_open_multipart('main/view_register',$id); ?>
                        <div class="form-group">
                            <h4>นโยบายความเป็นส่วนตัว (Privacy Policy)</h4>
                            <p>บริษัท ไอดี ไดร์เวอร์ จําากัด จะไมให้ขายหรือยอมให้บุคคลภายนอกมีส่วนร่วมรู้เห็นข้อมูลส่วนบุคคลของลูกค้าที่ได้เก็บรวบรวม 

ไว้โดยเด็ดขาด ข้อมูลส่วนบุคคลที่ถูกเก็บรวบรวมออนไลน์จะได้รับการเปิดเผยเฉพาะภายในเครือบริษัทของเรา

เพื่อการดําาเนินการภายในเท่านั้น เมื่อท่านได้สร้างบัญชีผู้ใช้กับเรา</p>
                            <label for="usr">หลักสูตร</label>
                            <select name='course' class="form-control" id='courseselect'>
                                   <option value="1">ใบขับขี่รถยนต์</option>
                                   <option value="2">ใบขับขี่รถจักรยานยนต์</option>
                                   <option value="3">ใบขับขี่รถขนส่งบรรทุก</option>
                                   <option value="4">ใบขับขี่รถลากจูง</option>
                                   <option value="5">อบรมพนักงานขับรถ</option>
                                   <option value="6">Defensive  Driving</option>
                            </select>
                        </div>
                        <label>สมัครเรียนสาขา:</label>
                            <select name='train_branch' class="form-control" required>
                            <?php if(isset($session['ID'])){ ?>
                            	<option value="<?php echo $session['branch']?>"><?php echo $session['branch']?></option>
                            <?php }?>
                                <option value=""> --- กรุณาเลือกสาขา --- </option>
                                <option value="สาขาขอนแก่น">สาขาขอนแก่น</option>
                                <option value="สาขาบายพาส (ขอนแก่น)">สาขาบายพาส (ขอนแก่น)</option>
                                <option value="สาขาลำลูกกา (ปทุมธานี)">สาขาลำลูกกา (ปทุมธานี)</option>
                                <option value="สาขามหาสารคาม">สาขามหาสารคาม</option>
                            </select>
                        <div class="form-group">
                            <label>เลขบัตรประจำตัวประชาชน:</label>
                            <input type="text" maxlength="13" name='citizenID' class="form-control" required>
                            <label>ชื่อ (Firstname):</label>
                            <input type="text" name='firstname' class="form-control" required>
                            <label>นามสกุล (Lastname):</label>
                            <input type="text" name='lastname' class="form-control" required>
                            <!-- <label>ที่อยู่ (Address):</label>
                            <textarea name='address' class="form-control" required></textarea> -->
                            <label>Email:</label>
                            <input type="text" name='email' class="form-control" required>
                            <label>เบอร์โทรศัพท์ (Phone No.):</label>
                            <input type="text" name='phoneNumber' class="form-control">
                            <label>โทรศัพท์มือถือ (Mobile No.):</label>
                            <input type="text" name='mobileNumber' class="form-control" required>
                            <h3>เอกสารที่ต้องใช้</h3>
                            <label for="usr">สำเนาบัตรประชาชน xxx </label>
                            <input type="file" name="files[]" id="input-id1" class="file" data-preview-file-type="text" >
                            <label for="usr">รูปถ่าย</label>
                            <input type="file" name="files[]" id="input-id2" class="file" data-preview-file-type="text" >
                            <?php if(isset($session['ID'])){ ?>
                             <label>ราคา</label>
                            <select   name='price' class="form-control">
                                <option value=""></option>
                                <option value="1000">รถจักรยานยนต์ 1,000 บาท</option>
                                <option value="1500">รถจักรยานยนต์ 1,500 บาท</option>
                                <option value="2500">รถจักรยานยนต์  2,500 บาท</option>
                                <option value="2800">รถยนต์2,800 บาท</option>
                                <option value="3000">รถยนต์ 3,000 บาท</option>
                                <option value="4500">รถยนต์ 4,500 บาท</option>
                                <option value="5300">รถยนต์ 5,300 บาท</option>
                                <option value="6000">รถยนต์ 6,000 บาท</option>
                                <option value="1800">รถขนส่ง 1,800 บาท</option>
                                <option value="6000">รถขนส่ง 6,000 บาท</option>
                                 <option value="8000">รถขนส่ง 8,000 บาท</option>
                                <option value="18000">รถขนส่ง 18,000 บาท</option>
                                <option value="3600">รถลากจูง 3,600 บาท</option>
                                <option value="23400">รถลากจูง 23,400  บาท</option>
                                <option value="29500">รถลากจูง 29,500  บาท</option>
                                <option value="34500">รถลากจูง  34,500 บาท</option>
                                <option value="38000">รถลากจูง  38,000 บาท</option>
                                 
                            </select>
                            <input type="hidden" name='branch' value ="<?php echo $this->session->userdata('branch') ?>" class="form-control" readonly>
                            <input type="hidden" name='invite_by' class="form-control"  value ="<?php echo $this->session->userdata('name') ?>">
                            <?php } ?>
                            
                            <?php if($this->uri->segment(3)=='invalid'){ echo '<p align="center" class="bg-danger" style="color:#F00"> <i class="fa fa-exclamation-circle"></i> ไฟล์รูปไม่ถูกต้อง</p>';}?>
                                </div>
                                <!--
                                <hr>
                                <div class="col-md-10" style="padding:0" id="captcha">
                                <?php $this->captcha->captcha_create();?>
                                </div>
                                <div class="col-md-2">
                                <a href="#reload" onclick="refreshCapcha()"><i class="fa fa-refresh"></i></a>
                                </div>
                                
            
                            <label for="usr">โปรดกรอกรหัสด้านบน</label>
                                <input type="text" name="captcha" class="form-control" value="" /> <br />
                                <div class='alert alert-danger' style="display:none"> <i class="fa fa-exclamation-circle"></i> รหัสภาพไม่ถูกต้อง</div>
                                -->
                             <div class="row">
                                <div class="col-md-12">
                                <div align="center">
                            <button class="btn btn-lg btn-theme margintop10" type="submit"><strong>สมัครเรียน</strong></button></div>
                            </div>
                            </div>
                        <?php echo form_close(); ?>
                        <?php if(!isset($session['ID'])){ ?>
                            <hr />
							<div align="center">
                             <a href="<?php echo site_url('admin/login')?>"><h4 style="text-decoration:none;"><i class="fa fa-users"></i> สำหรับเจ้าหน้าที่</h4></a>
                             </div>
							<?php }?>
                    </div>
                </div>
            </div>

            <?php $index = 0 ?>
            <?php foreach ($course as $key => $value) { ?>
                <?php $index += 1 ?>
                <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList<?php echo $index ?>" style="display:none">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $value['course_name'] ?></h3>
                        </div>
                        <div class="panel-body">

                            <div class="col-xs-12">
                                <img src="<?php echo base_url('img/'.$value['image']);?>" alt="">
                            </div>
                            <div class="col-xs-12">
                                <?php echo $value['course_desc'] ?>
                                <h3>15 ชม. / ราคา <?php echo number_format($value['course_cost']); ?> บาท</h3>
                            </div>
                        </div>
                    </div>

                </div>
            <?php } ?>

            <!-- <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList1" style="display:none">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ใบขับขี่รถยนต์</h3>
                    </div>
                    <div class="panel-body">

                        <div class="col-xs-12">
                            <img src="<?php echo base_url();?>/img/DSC_5333.jpg" alt="">
                        </div>
                        <div class="col-xs-12">
                        	<h3 style="text-decoration:underline">ใบขับขี่รถยนต์</h3>
                            <p><strong>หลักฐานประกอบการสมัคร</strong></p>
                            <ol>
                            <li>สำเนาบัตรประชาชน2 ฉบับ (ใช้คัดประวัติด้วย)</li>
                            <li>ใบรับรองแพทย์ (ตัวจริง) 1 ฉบับ ออกให้ไม่เกิน 30 วัน</li>
                            <li>รูปถ่ายขนาด 1 นิ้ว 4 รูป (ไม่สวมหมวก)</li>
                            <li>อายุ 18 ปี</li>
                            </ol>
                            <p><strong>อบรมทฤษฏี </strong><strong>5</strong><strong> ชม.</strong></p>
                            <p>- วิชา กฎหมายที่เกี่ยวข้อง</p>
                            <p>- วิชา การขับรถอย่างปลอดภัย</p>
                            <p>- วิชา จิตสำนึกและมารยาทในการขับรถ</p>
                            <p>- วิชา ข้อปฎิบัติเมื่อเกิดเหตุฉุกเฉินและการให้ความช่วยเหลือและปฐมพยาบาล</p>
                            <p><strong>ฝึกภาคปฏิบัติ </strong><strong>10</strong><strong> ชม.</strong></p>
                            <p>สอนขับด้วยครูฝึก(ที่ได้รับใบอนุญาตจากกรมการขนส่งทางบก) ครั้งละ 2 ชั่วโมง</p>
                            <p>รวม รถยนต์-ค่าน้ำมัน-ครูฝึก-สนามฝึก เป็นของสถาบันไอดี ไดรฟเวอร์</p>
                            <p style="color:#F00"><strong>ติวเตอร์ทั้งภาคทฤษฎี - ปฏิบัติ </strong></p>
                            <p style="color:#F00">ผู้เรียนใช้รถฝึกขับจำลอง ภายในห้องได้ก่อนขับรถจริง  และฝึกทำแบบทดสอบติวเตอร์ระบบอิเล็กทรอนิค ก่อนทดสอบใบอนุญาตขับรถ</p>
                            <hr>
                            <h3>15 ชม. / ราคา <?php echo number_format($course[0]['course_cost']); ?> บาท</h3>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList2" style="display:none">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ใบขับขี่รถจักรยานยนต์</h3>
                    </div>
                    <div class="panel-body">

                        <div class="col-xs-12">
                            <img src="<?php echo base_url();?>/img/DSC_5488.jpg" alt="">
                        </div>
                        <div class="col-xs-12">
                        <h3 style="text-decoration:underline">ใบขับขี่รถจักรยานยนต์</h3>
                            <p><strong>หลักฐานประกอบการสมัคร</strong></p>
                            <ol>
                            <li>สำเนาบัตรประชาชน2 ฉบับ (ใช้คัดประวัติด้วย)</li>
                            <li>ใบรับรองแพทย์ (ตัวจริง) 1 ฉบับ ออกให้ไม่เกิน 30 วัน</li>
                            <li>รูปถ่ายขนาด 1 นิ้ว 4 รูป (ไม่สวมหมวก)</li>
                            <li>อายุ 15 ปี</li>
                            </ol>
                            <p><strong>&nbsp;อบรมทฤษฏี 5 ชม.</strong></p>
                            <p>- วิชา กฎหมายที่เกี่ยวข้อง</p>
                            <p>- วิชา การขับรถอย่างปลอดภัย</p>
                            <p>- วิชา จิตสำนึกและมารยาทในการขับรถ</p>
                            <p>- วิชา ข้อปฎิบัติเมื่อเกิดเหตุฉุกเฉินและการให้ความช่วยเหลือและปฐมพยาบาล</p>
                            <p><strong>ฝึกภาคปฏิบัติ 10 ชม.</strong></p>
                            <p>สอนขับด้วยครูฝึก(ที่ได้รับใบอนุญาตจากกรมการขนส่งทางบก) ครั้งละ 2 ชั่วโมง รวม รถยนต์-ค่าน้ำมัน-ครูฝึก-สนามฝึก เป็นของสถาบันไอดี ไดรฟเวอร์</p>
                            <p style="color:#F00"><strong>ติวเตอร์ทั้งภาคทฤษฎี - ปฏิบัติ </strong></p>
                            <p style="color:#F00">ผู้เรียนใช้รถฝึกขับจำลอง ภายในห้องได้ก่อนขับรถจริง และฝึกทำแบบทดสอบติวเตอร์ระบบอิเล็กทรอนิค ก่อนทดสอบใบอนุญาตขับรถ</p>                            
                            <hr>
                            <h3>15 ชม. / ราคา <?php echo number_format($course[1]['course_cost']); ?> บาท</h3>
                        </div>
                      

                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList3" style="display:none">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ใบขับขี่รถขนส่งบรรทุก</h3>
                    </div>
                    <div class="panel-body">

                        <div class="col-xs-12">
                            <img src="<?php echo base_url();?>/img/DSC_5388.jpg" alt="">
                        </div>
                        <div class="colxs-12"><br />
                        <h3 style="text-decoration:underline">ใบขับขี่รถขนส่งบรรทุก</h3>
                            <p><strong>อบรมทฤษฏีพร้อมปฏิบัติ</strong></p>
                            <p><strong>หลักฐานประกอบการสมัคร</strong></p>
                            <ol>
                            <li>สำเนาบัตรประชาชน4 ฉบับ (ใช้คัดประวัติด้วย)</li>
                            <li>สำเนาทะเบียนบ้าน 4 ฉบับ (ใช้คัดประวัติด้วย)</li>
                            <li>ใบรับรองแพทย์ (ตัวจริง) 1 ฉบับ ออกให้ไม่เกิน 30 วัน</li>
                            <li>รูปถ่ายขนาด 1 นิ้ว 6 รูป (ไม่สวมหมวก)</li>
                            <li>สำเนาใบขับขี่ส่วนบุคคล 1 ฉบับ</li>
                            </ol>
                            <p><strong>คุณสมบัติของผู้สมัครเรียน</strong></p>
                            <ol>
                            <li>อายุ 20 ปี บริบูรณ์ขึ้นไป</li>
                            <li>มีใบอนุญาตขับขี่รถยนต์ส่วนบุคคลแล้ว</li>
                            </ol>
                            <p style="color:#F00"><strong>ติวเตอร์ทั้งภาคทฤษฎี - ปฏิบัติ </strong></p>
                            <p style="color:#F00">ผู้เรียนใช้รถฝึกขับจำลอง ภายในห้องได้ก่อนขับรถจริง และฝึกทำแบบทดสอบติวเตอร์ระบบอิเล็กทรอนิค ก่อนทดสอบใบอนุญาตขับรถ</p>
                            
                            <hr>
                            <h3>2 ชม. / ราคา <?php echo number_format($course[2]['course_cost']); ?> บาท</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList4" style="display:none">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ใบขับขี่รถลากจูง</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-12">
                            <img src="<?php echo base_url();?>/img/DSC_5333.jpg" alt="">
                        </div>
                        <div class="col-xs-12">
                        <h3 style="text-decoration:underline">ใบขับขี่รถลากจูง</h3>
                            <p><strong>อบรมทฤษฏีพร้อมปฏิบัติ</strong></p>
                            <p><strong>หลักฐานประกอบการสมัคร</strong></p>
                            <ol>
                            <li>สำเนาบัตรประชาชน4 ฉบับ (ใช้คัดประวัติด้วย)</li>
                            <li>สำเนาทะเบียนบ้าน 4 ฉบับ (ใช้คัดประวัติด้วย)</li>
                            <li>ใบรับรองแพทย์ (ตัวจริง) 1 ฉบับ ออกให้ไม่เกิน 30 วัน</li>
                            <li>รูปถ่ายขนาด 1 นิ้ว 6 รูป (ไม่สวมหมวก)</li>
                            <li>สำเนาใบขับขี่ส่วนบุคคล 1 ฉบับ</li>
                            </ol>
                            <p><strong>คุณสมบัติของผู้สมัครเรียน</strong></p>
                            <ol>
                            <li>อายุ 25 ปี บริบูรณ์ขึ้นไป</li>
                            <li>มีใบอนุญาตขับขี่รถยนต์ส่วนบุคคลแล้ว</li>
                            </ol>
                            <p style="color:#F00"><strong>ติวเตอร์ทั้งภาคทฤษฎี - ปฏิบัติ </strong></p>
                            <p style="color:#F00">ผู้เรียนใช้รถฝึกขับจำลอง ภายในห้องได้ก่อนขับรถจริง และฝึกทำแบบทดสอบติวเตอร์ระบบอิเล็กทรอนิค ก่อนทดสอบใบอนุญาตขับรถ</p>                         
                            <hr>
                        <h3>2 ชม. / ราคา  <?php echo number_format($course[3]['course_cost']); ?> บาท</h3>

                        </div>

                    </div>
                </div>
            </div> -->

                         

        </div>
    </div>
    </div>

</section>

<style>
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
    
    .courseDetail {
        color: black;
    }
</style>
<script>
            $("#input-id1").fileinput({
                allowedFileTypes: ['image']
            });
            $("#input-id2").fileinput({
                allowedFileTypes: ['image']
            });
</script>
<script>
    var course='<?php echo $this->uri->segment(3)?>';
    //alert(course);
    var register_status = '<?php echo $this->session->userdata('register_status')?>';
    if(register_status=='1'){
        <?php $this->session->unset_userdata('register_id');
              $this->session->unset_userdata('register_status');
        ?>
    }
    $('#courseDetailList1').show("drop");
        if (course == 1) {
            $('.courseDetail').hide();
            $('#courseDetailList1').show("drop");
            $('select[name = course] option[value=1]').prop('selected',true);
        }
        if (course == 2) {
            $('.courseDetail').hide();
            $('#courseDetailList2').show("drop");
            $('select[name = course] option[value=2]').prop('selected',true);
        }
        if (course == 3) {
            $('.courseDetail').hide();
            $('#courseDetailList3').show("drop");
            $('select[name = course] option[value=2]').prop('selected',true);
        }
        if (course== 4) {
            $('.courseDetail').hide();
            $('#courseDetailList4').show("drop");
            $('select[name = course] option[value=4]').prop('selected',true);
        }
        if (course == 5) {
            $('.courseDetail').hide();
            $('#courseDetailList5').show("drop");
            $('select[name = course] option[value=5]').prop('selected',true);
        }
        if (course == 6) {
            $('.courseDetail').hide();
            $('#courseDetailList6').show("drop");
            $('select[name = course] option[value=6]').prop('selected',true);
        }

    if ('<?php echo $this->uri->segment(3);?>' == 'success') {
        $('.alert-success').show('drop')
    }   
    else if ('<?php echo $this->uri->segment(3);?>' == 'wrong_captcha') {
        $('.alert-danger').show('drop')
    }
    $('#courseselect').on('change', function() {
            $('.courseDetail').hide();
            if (this.value == 1) {
                $('#courseDetailList1').show("drop");
            }
            if (this.value == 2) {
                $('#courseDetailList2').show("drop");
            }
            if (this.value == 3) {
                $('#courseDetailList3').show("drop");
            }
            if (this.value == 4) {
                $('#courseDetailList4').show("drop");
            }
            if (this.value == 5) {
                 window.location = "<?php echo site_url() ?>/main/contact/train";
            }
            if (this.value == 6) {
                 window.location = "<?php echo site_url() ?>/main/contact/defensive";
            }
    });
      $("input[name=citizenID],input[name=phoneNumber],input[name=mobileNumber]").keypress(function (e) {
         //if the letter is not digit then display error and don't type anything
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                   return false;
        }
   });
    var refreshCapcha = function(e){
         $.ajax({
            url: '<?php echo site_url()?>/main/reloadCaptcha',
            type: 'GET',
            dataType: "json",
            success: function(data) {
                $('#captcha').html(data.image)
            },
            error: function() {
                   
            }
        })
    }
// $('form').submit(function(event){
//       if(!this.checkValidity())
//         {
//             event.preventDefault();
//         }
//         else{
//             event.preventDefault();
//   var id=$('input[name=citizenID]').val();
//   var name=$('input[name=firstname]').val();
//   var lastname=$('input[name=lasttname]').val();
//   var address=$('textarea[name=address]').val();
//   var email=$('input[name=email]').val();
//   var course = $('select option:selected').text();
//   $('#usrid').text(id);
//   $('#cid').text(course);
//   $('#fname').text(name+' '+lastname );
//   $('#email').text(email);
//   $('#address').text(address);
//   $('#telephone').text();
//   $('#preview_image').html($('.file-preview-frame img'));
//   $('#myModal').modal();
// }
// });
// var confirm_register=function(){
//     $('form').submit();
// }
</script>
</body>
<style>
    body {
        background: url(<?php echo base_url();?>/img/DSC_5385.jpg) no-repeat center fixed;
    background-repeat: no-repeat;
    background-size: 100% 100%;

    }
    
    h3 {
        border-bottom: none;
    }
    .panel{
        background-color: rgba(255,255,255,0.96);
    }
    .panel-heading{
          color: #FFF !important;
  background-color: #363636 !important;
  border-color: #FFF;
    }
</style>

</html>