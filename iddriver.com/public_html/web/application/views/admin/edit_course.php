<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<br><br>
<div class="contener">
  <div class="panel panel-default " style="background-color:#F5F5F5">
      <div class = "panel-heading">
          <h1 class = "panel-title"><b> แก้ไขหลักสูตร(หน้าเว็บ)</b></h1>
      </div>
    <div class="body">
      <br>
        <!-- <form> -->
        <?php echo form_open('admin/edit_course_pageweb'); ?>
        <div class="form-group row">  
        <b style="text-align:right;"><label for="inputPassword" class="col-sm-2 col-form-label"> ชื่อคอร์ส</label></b>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="" name="course_name"
            value="<?php echo $course[0]['course_name'] ?>">
          </div>
        </div>
        <!-- <div class="form-group row">
        <b style="text-align:right;"><label for="inputPassword" class="col-sm-2 col-form-label">รูปภาพ</label></b>
          <div class="col-sm-9">
            <input type="file" class="form-control" id="inputPassword" placeholder="Password">
          </div>
        </div> -->
        <div class="form-group row">
        <b style="text-align:right;"><label for="inputPassword" class="col-sm-2 col-form-label">รายละเอียด</label></b>
          <div class="col-sm-9">
          <textarea class="ckeditor" id="exampleFormControlTextarea1" rows="10" name="course_desc" ><?php echo $course[0]['course_desc'] ?></textarea>

          </div>
        </div>
          <div class="row text-center">
          <!-- <a href="#" class="btn btn-warning" >ย้อนกลับ</a> -->
          <input type="hidden"  name="ID" id="ID" value="<?php echo $course[0]['ID'] ?>">
            <button type="submit" class="btn btn-success" >ตกลง</button>
          </div>
          <br>
      <!-- </form> -->
      <?php echo form_close(); ?>
  </div>
  </div>
  </div>

