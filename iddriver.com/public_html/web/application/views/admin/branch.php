<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<br>
<div class="row">
  <div class="col-sm-2">
    <button type="button" data-toggle="modal" data-target="#newModal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;เพิ่มสาขา</button>
  </div>
  <div class="col-sm-7"></div>
  <div class="col-sm-3" align = "right">
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
  </div>
</div>

<?php $index = 0; ?>

<div class="table-responsive">
  <table width = "100%" class = "table table-striped table-bordered table-hover" style = "margin-top:20px; background:white">
    <thead>
      <tr>
        <th class='text-center'>#</th>
        <th class='text-center'>สาขา</th>
        <th class='text-center'>เบอร์โทร</th>
        <th class='text-center'>จัดการ</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php foreach ($branchs as $key => $value) { ?>
      <tr>
        <td class="text-center">
          <?php
          $index += 1; 
          echo $index
          ?>
        </td>
        <td>
          <?php echo $value['name'] ?>
        </td>
        <td>
          <?php echo $value['tel'] ?>
        </td>
        <td>

          <?php echo form_open_multipart('admin/setBranch'); ?>
            <!-- Modal -->
            <div id="<?php echo $value['id'] ?>" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">แก้ไขรายละเอียด</h4>
                  </div>
                  <div class="modal-body">

                    <input type="hidden" class="form-control" name="branchId" id="branchId" value="<?php echo $value['id'] ?>">
                    <div class="row">
                      <label class="control-label col-sm-1" for="name">ชื่อ:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $value['name'] ?>">
                      </div>
                      <label class="control-label col-sm-1" for="tel">เบอร์โทร:</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="tel" id="tel" value="<?php echo $value['tel'] ?>">
                      </div>
                    </div>

                    <div class="row" style="padding-top: 10px">
                      <label class="control-label col-sm-1" for="address">ที่อยู่:</label>
                      <div class="col-sm-11">
                        <input type="text" class="form-control" name="address" id="address" value="<?php echo $value['address'] ?>">
                      </div>
                    </div>

                    <div class="row" style="padding-top: 10px">
                      <label class="control-label col-sm-6" for="thaiDetail">รายละเอียด&nbsp;(ภาษาไทย):</label>
                      <div class="col-sm-12">
                        <textarea class="ckeditor" id="exampleFormControlTextarea1" rows="5" name="thaiDetail" id="thaiDetail" ><?php echo $value['thaiDetail'] ?></textarea>
                      </div>
                    </div>

                    <div class="row" style="padding-top: 10px">
                      <label class="control-label col-sm-6" for="englishDetail">รายละเอียด&nbsp;(ภาษาอังกฤษ):</label>
                      <div class="col-sm-12">
                        <textarea class="ckeditor" id="exampleFormControlTextarea1" rows="5" name="englishDetail" id="englishDetail" ><?php echo $value['englishDetail'] ?></textarea>
                      </div>
                    </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;ยกเลิก</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;บันทึก</button>
                  </div>
                </div>

              </div>
            </div>
          <?php echo form_close(); ?>
          
          <div class="col-sm-4">
            <a href="<?php echo site_url('admin/getImages/' . $value['id']) ?>" class="btn btn-primary btn-block">
              <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;รูปภาพ
            </a>
          </div>
          <div class="col-sm-4">
            <button type="button" data-toggle="modal" data-target="#<?php echo $value['id'] ?>" class="btn btn-warning btn-block">
              <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;แก้ไข
            </button>
          </div>
          <div class="col-sm-4">
            <a href="<?php echo site_url('admin/setStatusBranch/' . $value['id']) ?>" class="btn btn-danger btn-block">
              <i class="fa fa-times" aria-hidden="true"></i>&nbsp;ลบ
            </a>
          </div>
        </td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>

<?php echo form_open_multipart('admin/setBranch'); ?>
  <!-- Modal -->
  <div id="newModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">เพิ่มรายละเอียดสาขาใหม่</h4>
        </div>
        <div class="modal-body">

          <div class="row">
            <label class="control-label col-sm-1" for="name">ชื่อ:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="name" id="name" placeholder="Name ...">
            </div>
            <label class="control-label col-sm-1" for="tel">เบอร์โทร:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="tel" id="tel" placeholder="Tel ...">
            </div>
          </div>

          <div class="row" style="padding-top: 10px">
            <label class="control-label col-sm-1" for="address">ที่อยู่:</label>
            <div class="col-sm-11">
              <input type="text" class="form-control" name="address" id="address" placeholder="Address ...">
            </div>
          </div>

          <div class="row" style="padding-top: 10px">
            <label class="control-label col-sm-6" for="address">รายละเอียด&nbsp;(ภาษาไทย):</label>
            <div class="col-sm-12">
              <textarea class="ckeditor" id="exampleFormControlTextarea1" rows="5" name="thaiDetail" placeholder="Thai Detail ..."></textarea>
            </div>
          </div>

          <div class="row" style="padding-top: 10px">
            <label class="control-label col-sm-6" for="address">รายละเอียด&nbsp;(ภาษาอังกฤษ)):</label>
            <div class="col-sm-12">
              <textarea class="ckeditor" id="exampleFormControlTextarea1" rows="5" name="englishDetail" placeholder="English Detail ..."></textarea>
            </div>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;ยกเลิก</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;บันทึก</button>
        </div>
      </div>

    </div>
  </div>
<?php echo form_close(); ?>

<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });;  
</script>
