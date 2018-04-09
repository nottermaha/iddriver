<section id="content" style="background:url(<?php echo base_url()?>/img/bg_contact.jpg); background-size:cover">
    <div class="container">

  <div class="section">

<!-- <div class="row" > -->

  <div class="col-md-12">
    <div class="panel" style="background-color:#F5F5F5">
      <div class="body" style="padding-left:50px;padding-right:auto">
            <br>

<?php foreach($branch as $key=>$value){ ?>
              <div class="row">
                <div class="panel panel-default" style="width:95%;">
                  <div class="panel-body">
                    <div class="col-md-3">
                      <div style="width:250px;height200px;">
                      <a href="<?php echo base_url()?>/img/idd_logo1b copy.png">
                          <img src="<?php echo base_url()?>/img/idd_logo1b copy.png"
                          class="img-responsive Thumbnail">
                        </a>
                      </div>
                    </div>
                  <div class="col-md-9">
                    <div>
                      <h2><?php echo $value['name'] ?></h2>
                          เบอร์โทรศัพท์ : <?php echo $value['tel'] ?> <br>
                          <!-- <button class="btn btn-defult">รายละเอียดสาขา</button> -->
                          <div class="text-right">
                          <a class="btn btn-default btn-lg " href="<?php echo site_url('main/branch_kk/'.$value['id'])?>" style="font-size:22px;"><i class="fa fa-list"></i> &nbsp;รายละเอียด</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php } ?>
            
      </div>
    </div>
  </div>

<!-- </div> -->

    </div>
    </div>

 </section>

    
<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
    #contact_form{
        background-color:rgba(103, 103, 103, 0.8);
    }
    h4{
        
        color:white;
    }
</style>