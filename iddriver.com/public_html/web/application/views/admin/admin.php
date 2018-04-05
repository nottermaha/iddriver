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
    <link href="<?php echo base_url()?>css/fileinput.min.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>js/jquery.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/admin/metisMenu.min.js"></script>
    <script src="<?php echo base_url()?>js/admin/raphael-min.js"></script>
    <script src="<?php echo base_url()?>js/admin/sb-admin-2.js"></script>
	<script src="<?php echo base_url()?>js/fileinput.js"></script>
    <script src="<?php echo base_url()?>js/dataTables/jquery.dataTables.js"></script> 
	<script src="<?php echo base_url()?>js/dataTables/dataTables.bootstrap.js"></script> 
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url()?>">ID DRIVER</a>

            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="<?php echo site_url('admin/logout') ?>">
                        <i class="fa fa-sign-out fa-fw"></i>Logout
                    </a>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <?php 
                        $userRole = $this->session->userdata('level');
                        if($userRole==0){ ?>
                        <li>
                            <a href="<?php echo site_url()?>/admin"><i class="fa fa-dashboard fa-fw"></i> หน้าหลัก</a>
                        </li>
 
                        <li>
                            <a href="<?php echo site_url()?>/admin/member_network_summary"><i class="fa fa-dashboard fa-fw"></i>รายละเอียดสามาชิก(Network)</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url()?>/admin/member_admin"><i class="fa fa-dashboard fa-fw"></i>รายละเอียดสามาชิกทั้งหมด</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> จัดการข่าว <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url()?>/admin/news">ข่าวสารและกิจกรรม</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url()?>/admin/article">บทความ</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?> 

                        <?php if($userRole==0){ ?>

                        <li>
                            <a href="#"><i class="fa fa-file-image-o"></i> จัดการรูปภาพ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url()?>/admin/slide">รูปสไลด์</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url()?>/admin/album">อัลบั้ม</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url()?>/admin/gen">ทำเนียบรุ่น</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <?php } ?> 


                        <?php if($userRole==0){ ?>
                        <li>
                            <a href="<?php echo site_url()?>/admin/course"><i class="fa fa-list-ul"></i> หลักสูตร</a>
                        </li>


                        <?php } ?> 

                        <?php if($userRole==0){ ?>
                        <li>
                            <a href="<?php echo site_url()?>/admin/student"><i class="fa fa-users"></i> รายชื่อผู้สมัครเรียน</a>
                        </li>


                        <?php } ?> 

                        <?php if($userRole==0){ ?>
                        <li>
                            <a href="<?php echo site_url()?>/admin/job_register"><i class="fa fa-male"></i> รายชื่อผู้สมัครงาน</a>
                        </li>


                        <?php } ?> 

                        <?php if($userRole==0){ ?>
                        <li>
                             <a href="<?php echo site_url()?>/admin/job"><i class="fa fa-pencil-square"></i>  รับสมัครพนักงาน</a>
                        </li>  

                        <?php } ?> 

                        <?php if($userRole==0){ ?>
                        <li>
                            <a href="<?php echo site_url()?>/admin/user"><i class="fa fa-user"></i> ผู้ใช้งาน</a>
                        </li> 

                        <?php } ?>     

                        <?php if($userRole==0 ||$userRole==2){ ?>

                        <li>
                            <a href="#"><i class="fa fa-money"></i> การชำระเงิน <span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url()?>/admin/payment"> ชำระเงิน</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url()?>/admin/staff_payment">รายชื่อผู้ที่ชำระเงินแล้ว</a>
                                </li>
                            </ul>

                        <?php } ?> 
                        
                        <li>
                            <a href="<?php echo site_url()?>/admin/getBranchs"><i class="fa fa-sitemap"></i> จัดการสาขา</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url()?>/admin/getYoutube"><i class="fa fa-youtube-play"></i> YouTube</a>
                        </li>

                        <li>
                             <a href="<?php echo site_url('admin/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> ออกจากระบบ</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php $this->load->view($page)?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

</body>

</html>
