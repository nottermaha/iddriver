<script src="<?php echo base_url()?>js/dataTables/jquery.dataTables.js"></script> 
<script src="<?php echo base_url()?>js/dataTables/dataTables.bootstrap.js"></script> 
<body>
    <br> 

 


    <div class="col-md-12 panel panel panel-warning">
            <div class="panel-heading">กรอกข้อมูลเพื่อสมัครสมาชิก</div>

         <div class="col-md-6 col-md-offset-3 panel-body">
             <form method=post action="<?php echo base_url()?>index.php/main/add_network_member">
                  <div class="form-group">
                    <p >ชื่อ-นามสกุล</p>
                    <input type="text" class="form-control" id="" name="name" placeholder="ชื่อ-นามสกุล">
                  </div>
                  <div class="form-group">
                    <p >ที่อยู่</p>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="address "  placeholder="ที่อยู่">
                  </div>
                  <div class="form-group">
                    <p >เบอร์โทรศัพท์</p>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="mobile"  placeholder="เบอร์โทรศัพท์">
                  </div>
                  <div class="form-group">
                    <p >Username & Email address</p>
                    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" placeholder="Email">
                  </div>
                    <div class="form-group">
                    <p >password: </p>
                    <input type="password" class="form-control" id="exampleInputEmail1" name="pwd1"  placeholder="******">
                  </div>
                    <div class="form-group">
                    <p >Confirm Password</p>
                    <input type="password" class="form-control" id="exampleInputEmail1"  name="pwd2" placeholder="******">
                  </div>
                   <input type=hidden name=member_id value="<?php echo $member_id;?>">
                  <button type="submit" class="btn btn-primary btn-lg"   Onclick="return ConfirmDelete();">Submit</button>
                </form>
        </div>
    </div>
     
</body>

<script>
    function ConfirmDelete()
    {
      var x = confirm("ต้องการยืนยันการรับสมัครหรือไม่ ?");
      if (x)
          document.myform.submit();
      else
        return false;
    }
</script>  


</html>