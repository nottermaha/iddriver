<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ID DRIVER ADMIN SYSTEM</title>

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/admin/metisMenu.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/admin/sb-admin-2.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>fonts/thai/font_thai.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	
    <script src="<?php echo base_url()?>js/jquery.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/admin/metisMenu.min.js"></script>
    <script src="<?php echo base_url()?>js/admin/raphael-min.js"></script>
    <script src="<?php echo base_url()?>js/admin/sb-admin-2.js"></script>
</head>
<style>
body {
  background-image:url(../../img/pano2-blur.jpg);
  background-size:cover;
  background-repeat:no-repeat;
  background-color:#e67817;
}
</style>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center"><img src="<?php echo base_url(); ?>img/iddriver.jpg" height="80"><br><br>
<i class="fa fa-users"></i><strong>&nbsp; สำหรับเจ้าหน้าที่เท่านั้น</strong></h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open('admin/checklogin');?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control"  name="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
									
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="login"/>
                            </fieldset>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
