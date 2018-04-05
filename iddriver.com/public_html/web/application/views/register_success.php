<div class='alert alert-success'style="">
    <div class="row">
        <div class="col-md-3"><img src="<?php echo base_url('img/welcome.jpg')?>" style="width:100%" alt=""></div>
<div   class="col-md-9">
<div class="col-md-12">
    
ท่านได้สมัครเรียบร้อยแล้ว
กรุณานำใบ Payment ไปชำระที่ธนาคารไทยพานิชย์ทุกสาขา</br>
เก็บสำเนาใบ Payment เพื่อเป็นหลักฐานการชำระเงิน</br>
นำสำเนาใบ Payment มาติดต่อที่ IDDRIVER</br>
ขอบคุณที่ไว้วางใจให้ IDDRIVER บริการ</br>
สอบถามเพิ่มเติมที่เบอร์ (043) 224000 , 227229</br>
หรือ email : Contact@iddriver.com
</div>

<div class="col-md-12">
    <a href="<?php echo site_url('main/bill')."/".$this->session->userdata('register_id') ?>" target="_blank"><button class="btn btn-theme margintop10 pull-left" onclick="goMainpage()">ดาวน์โหลดใบนำฝาก</button></a>
</div>
</div>
</div>
    </div>
    
<section id="content" style="background:transparent">
    <div class="container" style="">
        <div class="row">


        </div>
    </div>
    </div>

</section>
<script>
	var register_status = '<?php echo $this->session->userdata("register_status")?>';
	if(register_status=='1'){
         setTimeout(function(){
       
        //window.open('<?php echo site_url('main/bill')."/".$this->session->userdata('register_id') ?>','_blank');

        },3000);
	}
	var goMainpage = function(){
        window.location.href = "<?php echo site_url()?>";
    }
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