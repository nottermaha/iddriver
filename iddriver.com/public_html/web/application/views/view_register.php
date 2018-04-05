<section id="content" style="background:url(<?php echo base_url()?>/img/bg_contact.jpg); background-size:cover">
    <div class="container">

        <div class="row" id="preview" style="background:rgba(255,255,255,0.8) !important">
          <div class="col-md-6">
            
    <?php echo form_open_multipart('main/add_register'); ?>
          <div class="col-md-12">
          <h3>ยืนยันการสมัคร </h3>
          <table class="table">
            <tr>
              <td style="width:25%;text-align:right">หลักสูตร</td>
              <td style="color:red"><strong><?php echo $course[0]['course_name'] ?></strong></td>
            </tr> 
            <tr>
              <td style="width:25%;text-align:right">เรียนที่สาขา</td>
              <td style="color:red"><strong><?php echo $trainbranch; ?></strong></td>
            </tr>
            <tr>
              <td style="text-align:right">ราคา</td>
              <td ><strong style="color:red">

              <?php 
               // echo "====>".$price;
                if($price){

                      $course[0]['course_cost']= $price;
                } 
                echo $course[0]['course_cost'];
                
                ?>


              </strong> บาท</td>
            </tr>            
            <tr>
              <td style="text-align:right">ชื่อ-นามสกุล</td>
              <td><?php echo $detail['firstname'].' '.$detail['lastname'] ?></td>
            </tr>
             <tr>
              <td style="text-align:right">ที่อยู่</td>
              <td><?php echo $detail['address'] ?></td>
            </tr>
             <tr>
              <td style="text-align:right">อีเมล</td>
              <td><?php echo $detail['email'] ?></td>
            </tr>
            <tr>
              <td style="text-align:right">เบอร์โทรศัพท์</td>
              <td><?php echo $detail['phoneNumber'] ?></td>
            </tr>
             <tr>
              <td style="text-align:right">เบอร์โทรศัพท์มือถือ</td>
              <td><?php echo $detail['mobileNumber'] ?></td>
            </tr>

          </table>
          <div style="display:none">
       <h3>หลักสูตร </h3>
              <select name='course' class="form-control" id='courseselect'>
                 <option value="1">ใบอนุญาตรถยนต์</option>
                 <option value="2">ใบอนุญาตรถจักรยายนต์</option>
                 <option value="3">ใบอนุญาตรถขนส่งบรรทุก</option>
                 <option value="4">ใบอนูญาติรถลากจูง </option>
              </select>
          <h3>เลขบัตรประชาชน <?php echo $detail['citizenID'] ?>
          <input name='citizenID' class="form-control" type="text" value="<?php echo $detail['citizenID'] ?>"/>
        </h3>
          <input name='invite_by' class="form-control" type="text" value="<?php echo $detail['invite_by'] ?>"/>
          <input name='branch' class="form-control" type="text" value="<?php echo $detail['branch'] ?>"/>
          <input type="text" value='<?php echo $course[0]['course_cost'] ?>' name="cost"/>
          <h3>ชื่อ <input name='firstname' class="form-control" type="text" value="<?php echo $detail['firstname'] ?>"/></h3>
          <h3>นามสกุล <input name='lastname' class="form-control" type="text" value="<?php echo $detail['lastname'] ?>"/></h3>
          <h3>ที่อยู่  <textarea name='address' class="form-control" type="text" /><?php echo $detail['address'] ?></textarea></h3>
          <h3>อีเมล  <input name='email' class="form-control" type="text" value="<?php echo $detail['email'] ?>"/></h3>
          <h3>เบอร์โทรศัพท์<input class="form-control" name='phoneNumber' type="text" value="<?php echo $detail['phoneNumber'] ?>"</h3>
          <h3>เบอร์โทรศัพท์มือถือ<input class="form-control" name='mobileNumber' type="text" value="<?php echo $detail['mobileNumber'] ?>"</h3>
          <input type="hidden" name="citizencopy" value="<?php echo $image[1] ?>"/>
          <input type="hidden" name="price" value="<?php echo $price; ?>"/>
          <input type="hidden" name="picture"  value="<?php echo $image[0] ?>"/>
          <input type="hidden" name="trainbranch"  value="<?php echo  $trainbranch; ?>"/> 
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
            <button type="submit"  class="btn btn-theme margintop10 pull-left" type="submit">ยืนยัน</button></div>
          </div>
          </div>
          <?php form_close()?>
          </div>
          <div class="col-md-6" style="margin-bottom:20px;">
            <h3>รูปถ่าย</h3>
            <hr>
            <?php if(empty($image[0])){ echo '<div style="color:#F00">- ไม่มีรูปภาพ</div>' ;}else{ ?>
              <img src="<?php echo base_url('img/uploads/register/'.$image[0]); ?>" alt="" width="250">
              
            <?php }?>
            <h3>สำเนาบัตรประชาชน</h3>
            <hr>
            <?php if(empty($image[1])){ echo '<div style="color:#F00">- ไม่มีรูปภาพ</div>' ;}else{ ?>
              <img src="<?php echo base_url('img/uploads/register/'.$image[1]); ?>" alt="" width="250">
            <?php }?>
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