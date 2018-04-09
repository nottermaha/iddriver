<section id="content" style="background:url(<?php echo base_url()?>/img/bg_contact.jpg); background-size:cover">
    <!-- <div class="container"> -->

  <div class="section">

    <div class="col-md-9">
      <div class="panel" style="background-color:rgba(255,255,255,0.9);">
        <div class="body" style="padding-left:20px;padding-right:20px;">
              <h1 style="text-align:center;"><?php echo $car_by_id['name'] ?></h1>
              <hr style="width:90%;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <?php echo $car_by_id['address'] ?> <br> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 เบอร์โทร : <?php echo $car_by_id['phone'] ?> <br>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              เเฟ็กซ์ : <?php echo $car_by_id['fax'] ?> <br><br>
              <div class="row">
                <div class="col-md-6">
                  <a href="<?php echo base_url()?><?php echo $car_by_id['image'] ?>">
                      <img src="<?php echo base_url();echo $car_by_id['image'] ?>"
                      class="img-responsive" style="height:300px;">
                  </a>
                </div>
                <div class="col-md-6" >
                     <?php echo $car_by_id['map'] ?>
                </div>
              </div>
              <br>

        </div>
      </div>
    </div>

    <div class="col-md-3" style="padding-right:20px;">
      <div class="panel" style="background-color:rgba(255,255,255,0.9);" >
        <div class="body">
        <h1 style="text-align:center;">บริการของเรา</h1>
        <hr style="width:90%;"> 
          <div class="row">
            <div style="padding-left:50px;">
            <i class="fa fa-car">&nbsp;</i>ตรวจสอบภาพรถ <br>
            <br>
            </div>
        </div>
        <h1 style="text-align:center;">สาขาทั้งหมด</h1>
        <hr style="width:90%;"> 
          <div class="row">
            <div style="padding-left:50px;">
            <?php 
              foreach($car_all as $key=>$value){?>
                <a href="<?php echo site_url('main/check_car/'.$value['id'])?>"><i class="fa fa-home">&nbsp;</i><?php echo $value['name'] ?></a>  <br>
              <?php } ?>
            </div><br>
        </div>
        </div>
      </div>
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