<script src="<?php echo base_url()?>js/dataTables/jquery.dataTables.js"></script> 
<script src="<?php echo base_url()?>js/dataTables/dataTables.bootstrap.js"></script> 
<body>
	<br> 
  
	<div class="col-md-12 panel panel-default">
		  <div  ><a href="<?php echo base_url()?>index.php/admin/networkmember"><h1>  Dashboard ข้อมูล : <font color=blue> <?php echo $member_name; ?></font></h1></a></div>
		  <?php 
		  	if($child_name) { 
		  ?>
		  <div  ><h2> ข้อมูลของ  : <font color=green> <?php echo $child_name; ?></font></h2></div>
		  <? } ?>
		  <?php
		  		$total = 0;
				foreach ($member_list as $key) {
				  	 $total = $total+$this->model->sum_staff_payment($key["ID"]);
				}	
		  ?>
		<div  class="col-md-6" align="center">
		     <div  class="bg-primary">  
		     <h2><font color=white>  จำนวนสมาชิก</font></h2> 
		     <h1><font color=white> <?php echo $member_child;?></h1></font> </div>
		</div>
		<div  class="col-md-6" align="center">
		     <div  class="bg-success">  <h2><font color=white>  จำนวนผู้สมัคร</font></h2> <h1> <font color=white><?php echo $total;?></h1></font> </div>
		</div>
 

			<div class="col-md-12 col-xs-12 courseDetail" id="courseDetailList1" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">รายชื่อ สมาชิก </h3>
                    </div>
                    <div class="panel-body">
                        <table class='table table-bordered' id="std_table">
			            	<thead>
				                <tr>
				                    <th style="width:7%">ลำดับที่</th>
				                    <th style="width:25%">ชื่อ-นามสกุล สมาชิก</th>
				                    <th style="width:15%">สมาชิกย่อย</th>
				                    <th style="width:10%">ยอดผู้สมัครเรียน</th>
				                  <!--  <th style="width:10%">การชำระเงิน</th>-->
				                </tr>
			                <thead>
			                    <tbody>
			                 	<?php 
			                 		$run_no=1;
			                 		foreach ($member_list as $key) {
			                 		# code...
			                 	?>
					                <tr>

					                <td><?php  echo $run_no; ?></td>
					                <td><?php  echo "<a href='".base_url()."/index.php/admin/networkmember/".$key["ID"]."'>"; echo $key["name"]; ?></a></td>
					                <td>
						                <?php  
						                	echo "<a href='".base_url()."/index.php/admin/networkmember/".$key["ID"]."'>";   
						                	echo $this->network_model->count_my_child($key["ID"]); ?>
						                	</a>
					                </td> 
					                <td><?php echo $this->model->sum_staff_payment($key["ID"]);?></td>
					                </tr>
					            <?  $run_no++; } ?>
			                	</tbody>
		                </table>
                        </div>
                    </div>
                </div>
            </div>
	</div>
	 
</body>