<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<br><br>
<div class="contener">
  <div class="panel panel-default " style="background-color:#F5F5F5">
      <div class = "panel-heading">
          <h1 class = "panel-title"><b> แก้ไขหลักสูตรแอดมิน</b></h1>
      </div>
    <div class="body">
      <br>
        <!-- <form> -->
        <?php echo form_open_multipart('admin/edit_course_admin_set'); ?>
        <div class="form-group row">  
        <b style="text-align:right;"><label for="inputPassword" class="col-sm-2 col-form-label"> ชื่อคอร์ส</label></b>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="" name="course_name"
            value="<?php echo $course[0]['course_name'] ?>">
          </div>
        </div>
        <div class="form-group row">
        <b style="text-align:right;"><label for="inputPassword" class="col-sm-2 col-form-label">รูปภาพ</label></b>
          <div class="col-sm-9">
            <input type="hidden" class="form-control" name="oldImage" id="oldImage" value="<?php echo $course[0]['image'] ?>">
			      <input type="file" name="file" id="file" class="file" class="form-control" data-preview-file-type="text">
          </div>
        </div>
        <div class="form-group row">
        <b style="text-align:right;"><label for="inputPassword" class="col-sm-2 col-form-label">รายละเอียด</label></b>
          <div class="col-sm-9">
          <textarea class="ckeditor" id="exampleFormControlTextarea1" rows="10" name="course_desc" ><?php echo $course[0]['course_desc'] ?></textarea>

          </div>
        </div>
          <div class="row text-center">
          <!-- <a href="#" class="btn btn-warning" >ย้อนกลับ</a> -->
          <input type="hidden"  name="ID" id="ID" value="<?php echo $course[0]['ID'] ?>">
            <a href="<?php echo site_url('admin/course') ?>" class="btn btn-warning">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;ย้อนกลับ
           </a>
                <input type="hidden"  name="ID" id="ID" value="<?php echo $course[0]['ID'] ?>">
            <button type="submit" class="btn btn-success" ><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;ตกลง</button>
          </div>
          <br>
      <!-- </form> -->
      <?php echo form_close(); ?>
  </div>
  </div>
  </div>

