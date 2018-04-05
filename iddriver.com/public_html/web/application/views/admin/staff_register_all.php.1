
    <script src="<?php echo base_url()?>js/dataTables/jquery.dataTables.js"></script> 
    <script src="<?php echo base_url()?>js/dataTables/dataTables.bootstrap.js"></script> 
<div class='alert alert-success' style="display:none">สมัครเรียนเสร็จสมบูรณื</div>
<section id="content" style="background:transparent">
    <div class="container" style="">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ข้อมูลผู้สมัคร</h3>
                    </div>
                    <div class="panel-body">
                        <?php $id=array( 'id'=> 'registerform'); echo form_open_multipart('main/view_register',$id); ?>
                        <div class="form-group">
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
                            <select name='branch' class="form-control" required>
                                <option value="">กรุณาเลือกสาขา</option>
                                <option value="สาขาขอนแก่น" <?php if($this->session->userdata('branch')=='สาขาขอนแก่น'){echo 'selected';} ?> >สาขาขอนแก่น</option>
                                <option value="สาขาบายพาส (ขอนแก่น)" <?php if($this->session->userdata('branch')=='สาขาบายพาส (ขอนแก่น)'){echo 'selected';} ?> >สาขาบายพาส (ขอนแก่น)</option>
                                <option value="สาขาลำลูกกา (ปทุมธานี)" <?php if($this->session->userdata('branch')=='สาขาลำลูกกา (ปทุมธานี)'){echo 'selected';} ?>>สาขาลำลูกกา (ปทุมธานี)</option>
                                <option value="สาขามหาสารคาม">สาขามหาสารคาม</option>
                            </select>
                        <div class="form-group">
                            <label>เลขบัตรประจำตัวประชาชน:</label>
                            <input type="text" maxlength="13" name='citizenID' class="form-control" required>
                            <label>ชื่อ (Firstname):</label>
                            <input type="text" name='firstname' class="form-control" required>
                            <label>นามสกุล (Lastname):</label>
                            <input type="text" name='lastname' class="form-control" required>
                            <label>ที่อยู่ (Address):</label>
                            <textarea name='address' class="form-control" required></textarea>
                            <label>Email:</label>
                            <input type="text" name='email' class="form-control" required>
                            <label>เบอร์โทรศัพท์ (Phone No.):</label>
                            <input type="text" name='phoneNumber' class="form-control">
                            <label>โทรศัพท์มือถือ (Mobile No.):</label>
                            <input type="text" name='mobileNumber' class="form-control" required>
                            <h3>เอกสารที่ต้องใช้</h3>
                            <label for="usr">สำเนาบัตรประชาชน</label>
                            <input type="file" name="files[]" id="input-id1" class="file" data-preview-file-type="text" >
                            <label for="usr">รูปถ่าย</label>
                            <input type="file" name="files[]" id="input-id2" class="file" data-preview-file-type="text" >
                            <?php if($this->session->userdata('is_logged_in')){ ?>
                            <h3>สำหรับเจ้าหน้าที่</h3>
                            <label>ชื่อเจ้าหน้าที่</label>
                            <input type="text" name='invite_by' class="form-control"  value ="<?php echo $this->session->userdata('name') ?>" requried>
                            <?php } ?>
                            <hr>
                                </div>
                                <div class="col-md-10" style="padding:0" id="captcha">
                                <?php $this->captcha->captcha_create();?>
                                </div>
                                <div class="col-md-2">
                                <a href="#reload" onclick="refreshCapcha()"><i class="fa fa-refresh"></i></a>
                                </div>
                                <?php if($this->uri->segment(3)=='invalid'){ echo '<p align="center" class="bg-danger" style="color:#F00"> <i class="fa fa-exclamation-circle"></i> ไฟล์รูปไม่ถูกต้อง</p>';}?>
            
                            <label for="usr">โปรดกรอกรหัสด้านบน</label>
                                <input type="text" name="captcha" class="form-control" value="" /> <br />
                                <div class='alert alert-danger' style="display:none"> <i class="fa fa-exclamation-circle"></i> รหัสภาพไม่ถูกต้อง</div>
                             <div class="row">
                                <div class="col-md-12">
                            <button class="btn btn-theme margintop10 pull-left" type="submit">สมัครเรียน</button></div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList1" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">รายชื่อผู้สมัครเรียน</h3>
                    </div>
                    <div class="panel-body">
                            <table class='table table-bordered' id="std_table">
            <thead>
                <tr>
                    <th style="width:7%">ลำดับที่</th>
                    <th style="width:20%">ชื่อ-นามสกุล</th>
                    <th style="width:15%">หลักสูตรที่ลง</th>
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
                <td><?php echo date("d-m-Y", strtotime($value['register_time'])); ?></td>
                <?php if($value['pay_status']==0){
                        echo '<td style="color:red">ยังไม่ชำระเงิน</td>';
                        } 
                        else{
                        echo '<td style="color:green">ชำระเงินแล้ว</td>';
                        }
                ?></tr>
                <?php 
                    }
                 ?>
                </tbody>
                </table>
                    <div class="col-xs-12">
     

                        </div>
                    </div>
                </div>

            </div>



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
$('#std_table').DataTable();

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
</script>
<script>
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