<?php 
	$session = $this->session->all_userdata();
    // echo "<pre>";
    // print_r($session );
    // echo $session["username"];
    // echo $session["branch"];
?>
<div class='alert alert-success' style="display:none">สมัครเรียนเสร็จสมบูรณ์ dd</div>
<section id="content" style="background:transparent">
    <div class="container" style="">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="panel panel-default">
                     
                    <div class="panel-body">
                        <?php $id=array( 'id'=> 'registerform'); 
						echo form_open_multipart('main/view_register2',$id); ?>
                         
 
                        <div class="form-group">
                            
                            <label>ชื่อ (Firstname):</label>
                            <input type="text" name='firstname' class="form-control" required>
                            <label>นามสกุล (Lastname):</label>
                            <input type="text" name='lastname' class="form-control" required>
                          
                            <label>โทรศัพท์มือถือ (Mobile No.):</label>
                            <input type="text" name='mobileNumber' class="form-control" required>
                              <input type="hidden" name='branch' value ="<?php echo $this->session->userdata('branch') ?>" >
                            <input type="hidden" name='invite_by'   value ="<?php echo $this->session->userdata('name') ?>">
                         
                            
                             
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
                            <button class="btn btn-lg btn-theme margintop10" type="submit"><strong> ส่งใบสมัคร </strong></button></div>
                            </div>
                            </div>
                        <?php echo form_close(); ?>
                         
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
            $("#input-id1").fileinput({
                allowedFileTypes: ['image']
            });
            $("#input-id2").fileinput({
                allowedFileTypes: ['image']
            });
</script>
<script>
    var course='<?php echo $this->uri->segment(3)?>';
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
            $('select[name = course] option[value=3]').prop('selected',true);
        }
        if (course == 5) {
            $('.courseDetail').hide();
            $('#courseDetailList5').show("drop");
            $('select[name = course] option[value=4]').prop('selected',true);
        }
        if (course == 6) {
            $('.courseDetail').hide();
            $('#courseDetailList6').show("drop");
            $('select[name = course] option[value=5]').prop('selected',true);
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