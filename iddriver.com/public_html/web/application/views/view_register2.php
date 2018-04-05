<section id="content" style="background:url(<?php echo base_url()?>/img/bg_contact.jpg); background-size:cover">
    <div class="container">

        <div class="row" id="preview" style="background:rgba(255,255,255,0.8) !important">
          <div class="col-md-6">
            
    <?php echo form_open_multipart('main/add_register2'); ?>
          <div class="col-md-12">
          <h3>ยืนยันการสมัคร </h3>
           
            <h3>ชื่อ <input name='firstname' class="form-control" type="text" value="<?php echo $detail['firstname'] ?>"/></h3>
          <h3>นามสกุล <input name='lastname' class="form-control" type="text" value="<?php echo $detail['lastname'] ?>"/></h3>
           <h3>เบอร์โทรศัพท์มือถือ<input class="form-control" name='mobileNumber' type="text" value="<?php echo $detail['mobileNumber'] ?>"</h3>
          <hr>
           <div class="row">
            <div class="col-md-12">
              <input type="hidden" name='branch' value ="<?php echo $detail['branch'] ?>" >
               <input type="hidden" name='invite_by'   value ="<?php  echo $detail['invite_by'] ?>">
                         
            <button type="submit"  class="btn btn-theme margintop10 pull-left" type="submit">ยืนยัน</button></div>
          </div>
        </div>
    </div>
</section>
<style>
    body {
        background: url(<?php echo base_url();?>/img/bg5.jpg) no-repeat center fixed !important;

    }
    .table{
      font-size: 20px;
    }
</style>
<script>
  $('select[name=course] option[value=<?php echo $detail["course"] ?>]').prop('selected',true)
</script>