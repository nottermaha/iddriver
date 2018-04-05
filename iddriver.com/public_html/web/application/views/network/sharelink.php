<script src="<?php echo base_url()?>js/dataTables/jquery.dataTables.js"></script> 
<script src="<?php echo base_url()?>js/dataTables/dataTables.bootstrap.js"></script> 
<body>

	<div class="col-md-12 panel panel-default">
			<br>
				 <?php  
				 	$url_register =  base_url()."/index.php/main/register_meber/".$this->session->userdata('ID');
				  ?>
				<div class="form-group">
				  	<p>Copy Link สำหรับรับมัครสมาชิก</p>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php  echo $url_register;?>" disabled>
				     


				   <!-- Facebook -->
				    <a href="http://www.facebook.com/sharer.php?u=<?php echo $url_register; ?>" target="_blank">
        			<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
   					 </a>


				</div>

				<?php 
					$register_page =  base_url()."index.php/main/register_member_course_network/".$this->session->userdata('ID');
				?>
				<div class="form-group">
				  	<p>Copy Link สมัครหลักสูตร </p>
				    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $register_page; ?>" disabled>
 
				   <!-- Facebook -->
				    <a href="http://www.facebook.com/sharer.php?u=<?php echo $register_page; ?>" target="_blank">
        			<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
   					 </a>
   				</div>
				 
	 	<br><br><br><br>
	</div>
	 
</body>