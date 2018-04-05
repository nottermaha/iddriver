<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<br>
<div class="row">
  <div class="col-sm-1">
    <a href="<?php echo site_url('admin/getBranchs') ?>" class="btn btn-warning">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back
    </a>
  </div>
  <div class="col-sm-1">
    <button type="button" data-toggle="modal" data-target="#newModal" class="btn btn-primary">
      <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;New
    </button>
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
        <th class='text-center'>Image</th>
        <th class='text-center'>Manage</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php foreach ($images as $key => $value) { ?>
      <tr>
        <td class="text-center">
          <?php
          $index += 1; 
          echo $index
          ?>
        </td>
        <td class="text-center">
          <img src="<?php echo base_url('img/'.$value['image']) ?>" style="width:300px">
        </td>
        <td>

          <?php echo form_open_multipart('admin/setImage'); ?>
            <!-- Modal -->
            <div id="<?php echo $value['id'] ?>" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New&nbsp;Image</h4>
                  </div>
                  <div class="modal-body">

                    <input type="hidden" class="form-control" name="branchId" id="branchId" value="<?php echo $value['branchId'] ?>">
                    <input type="hidden" class="form-control" name="imageId" id="imageId" value="<?php echo $value['id'] ?>">
                    <div class="row">
                      <label class="control-label col-sm-1" for="file">Image:</label>
                      <div class="col-sm-11">
                        <input type="file" name="file" id="file" class="file" class="form-control" data-preview-file-type="text">
                      </div>
                    </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Close</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Save</button>
                  </div>
                </div>

              </div>
            </div>
          <?php echo form_close(); ?>
          
          <div class="col-sm-6">
            <button type="button" data-toggle="modal" data-target="#<?php echo $value['id'] ?>" class="btn btn-warning btn-block"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</button>
          </div>
          <div class="col-sm-6">
          <a href="<?php echo site_url('admin/setStatusImage/' . $value['id'] . '/' . $branchId) ?>" class="btn btn-danger btn-block"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Delete</a>
          </div>
          
        </td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>

<?php echo form_open_multipart('admin/setImage'); ?>
  <!-- Modal -->
  <div id="newModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New&nbsp;Image</h4>
        </div>
        <div class="modal-body">

          <input type="hidden" class="form-control" name="branchId" id="branchId" value="<?php echo $branchId ?>">
          <div class="row">
            <label class="control-label col-sm-1" for="file">Image:</label>
            <div class="col-sm-11">
			        <input type="file" name="file" id="file" class="file" class="form-control" data-preview-file-type="text">
            </div>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Close</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Save</button>
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
