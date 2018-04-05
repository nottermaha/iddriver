<script src="<?php echo base_url()?>js/dataTables/jquery.dataTables.js"></script> 
<script src="<?php echo base_url()?>js/dataTables/dataTables.bootstrap.js"></script> 
<body>
    <br> 

 


    <div class="col-md-12 panel panel panel-warning">
            <div class="panel-heading">กรอกข้อมูลเสร็จสินแล้ว</div>

          
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