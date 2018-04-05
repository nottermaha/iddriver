<br>
<div class="row">
  <div class="col-md-2">
    <button type="button" data-toggle="modal" data-target="#newModal" class="btn btn-primary btn-block btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;New</button>
  </div>
  <div class="col-md-7"></div>
  <div class="col-md-3" align = "right">
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
  </div>
</div>

<?php $index = 0; ?>

<div class="table-responsive">
  <table width = "100%" class = "table table-striped table-bordered table-hover" style = "margin-top:20px; background:white">
    <thead>
      <tr>
        <th class='text-center'>#</th>
        <th class='text-center'>URL</th>
        <th class='text-center'>จัดการ</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php foreach ($url as $key => $value) { ?>
      <tr>
        <td>
          <?php
          $index += 1; 
          echo $index
          ?>
        </td>
        <td>
          <iframe width="460" height="215" src="<?php echo $value['url'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </td>
        <td>
          <?php echo form_open('admin/setYoutube'); ?>
            <!-- Modal -->
            <div id="<?php echo $value['id'] ?>" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">URL</h4>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" class="form-control" name="urlId" id="urlId" value="<?php echo $value['id'] ?>">
                    <input type="text" class="form-control" name="url" id="url" value="<?php echo $value['url'] ?>">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Close</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Save</button>
                  </div>
                </div>

              </div>
            </div>
          <?php echo form_close(); ?>
          <div class="col-md-6">
            <button type="button" data-toggle="modal" data-target="#<?php echo $value['id'] ?>" class="btn btn-warning btn-block"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</button>
          </div>
          <div class="col-md-6">
          <a href="<?php echo site_url('admin/setStatusYoutube/' . $value['id']) ?>" class="btn btn-danger btn-block"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Delete</a>
          </div>
        </td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</div>

<?php echo form_open('admin/setYoutube'); ?>
  <!-- Modal -->
  <div id="newModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">URL</h4>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" name="url" id="url">
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
