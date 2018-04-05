<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>สอนขับรถ สอบใบขับ ที่ไอดี ไดร์ฟเวอร์ อนุญาตโดยกรมการขนส่งทางบก และกระทรวงศึกษาธิการ ที่ปรึกษาโรงเรียนสอนขับรถ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?echo @$description;?>" />
    <meta name="keywords" content="<?echo @$keywords;?>" />
    <meta name="author" content="http://bootstraptaste.com" />

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/jcarousel.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/flexslider.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>fonts/thai/font_thai.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>skins/default.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/menu.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/validationEngine.jquery.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/fileinput.min.css" rel="stylesheet" />


    <script src="<?php echo base_url()?>js/jquery.js"></script>
    <script src="<?php echo base_url()?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url()?>js/jquery.fancybox-media.js"></script>
    <script src="<?php echo base_url()?>js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo base_url()?>js/portfolio/jquery.quicksand.js"></script>
    <script src="<?php echo base_url()?>js/portfolio/setting.js"></script>
    <script src="<?php echo base_url()?>js/jquery.flexslider.js"></script>
    <script src="<?php echo base_url()?>js/animate.js"></script>
    <script src="<?php echo base_url()?>js/custom.js"></script>
    <script src="<?php echo base_url()?>js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url()?>js/validate.js"></script>
	<script src="<?php echo base_url()?>js/jquery.validationEngine.js"></script>
	<script src="<?php echo base_url()?>js/jquery.validationEngine-en.js"></script>
	<script src="<?php echo base_url()?>js/fileinput.min.js"></script>
 
</head>

<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo site_url('main')?>">
                        <img class="" src="<?php echo base_url()?>img/idd_logo1a.gif" ></a>
                        <a class="navbar-brand2" href="http://www.professionaldriver.co.th/" target="_blank">
                        <img src="<?php echo base_url()?>img/idd_logo1b.gif" alt="สถาบัน ไอดี ไดร์ฟเวอร์" class="">
                        </a>
                        
                        
                        <div class="navbar-title">
                        <a class="navbar-brand" href="<?php echo site_url('main')?>">
                        <strong>ไอดี ไดรฟ์เวอร์ </strong><br>
                        <!-- <small>โทร. 043-224000 , 043-227229 </small> -->
                        </a>
                        </div>
                        
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                        	<li>&nbsp;
                            </li>
                            <?php $session = $this->session->all_userdata();//start session
							if(isset($session['ID'])){ 
								if($session['level']!=0){?>
    
                                <li>
                                    <a href="<?php echo site_url('admin/networkmember')?>">หน้าหลัก </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/sharelink')?>">แชร์ Link </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/register_new_process')?>">ลงทะเบียน (New) </a>
                                </li>
 
                                <li>
                                <img src="<?php echo base_url()?>img/iso.jpg" alt="" class="" width="150" height="50">
                                </li>
								<li>
									<a href="#">[เฉพาะเจ้าหน้าที่เท่านั้น]</a>
								</li>
                                <li>
                                    <a href="<?php echo site_url('admin/register')?>">หลักสูตร</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/register_all')?>">รายชื่อลงทะเบียน</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/register_list')?>">รายชื่อผู้ที่ชำระเงินแล้ว</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/logout_web')?>">ออกจากระบบ</a>
                                </li>
								<?php }else{ ?>
								<li class="active"><a href="<?php echo site_url('main/index')?>"><i class="fa fa-home" style="font-size:1.5em"></i></a>
                                </li>
                                <li><a href="<?php echo site_url('main/typography')?>">เกี่ยวกับเรา</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('main/job')?>">สมัครงาน</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('main/contact')?>">ติดต่อ</a>
                                </li>
                                <li>
									<a href="<?php echo site_url('admin/logout_web')?>">ออกจากระบบ</a>
								</li>
								<?php }?>
							<?php }else{?>
                            <li class="active"><a href="<?php echo site_url('main/index')?>"><i class="fa fa-home" style="font-size:1.5em"></i></a>
                            </li>
                            <li><a href="<?php echo site_url('main/typography')?>">เกี่ยวกับเรา</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('main/job')?>">สมัครงาน</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('main/contact')?>">ติดต่อ</a>
                            </li>
                            <li>
                                <img src="<?php echo base_url()?>img/iso.jpg" alt="" class="" width="150" height="50">
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <?php $this->load->view($page)?>
        <footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-xs-12">
			  <div class="widget">
					<h5 class="widgetheading"></h5>
				<address>
					<strong>ไอดี ไดรฟ์เวอร์ สถาบันฝึกอบรม สอนขับรถเอกชน</strong><br> 
200/222 หมู่ 2 ถนนชัยพฤกษ์ <br>
ตำบลในเมือง อำเภอเมือง <br>
จังหวัดขอนแก่น 40000</address>

				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="widget">
                <h5 class="widgetheading"></h5>
                <address>
                <strong>ติดต่อ </strong><br> 
					<p>
						<i class="fa fa-phone"></i> โทร. (043) 224000 , 227229 <br>
                       <i class="fa fa-fax"></i> แฟ๊กซ์ 043-228939 , 043-224000 <br>
						<!--
                        <i class="fa fa-paper-plane"></i> แฟ๊กซ์. (043) 228939  <br>
                        -->
						<i class="fa fa-envelope-o"></i> Contact@iddriver.com 
					</p>
                    </address>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="widget">
					<h5 class="widgetheading"></h5>
					<address>
                    <strong>หลักสูตรของเรา  </strong><br> 
						<a href="<?php echo site_url('main/register/1');?>"><i class="fa fa-car"></i> หลักสูตรรถยนต์</a><br>
						<a href="<?php echo site_url('main/register/2');?>"><i class="fa fa-truck"></i>&nbsp; หลักสูตรรถจักรยานยนต์</a><br>
						<a href="<?php echo site_url('main/register/4');?>"><i class="fa fa-bus"></i>\&nbsp; หลักสูตรอบรมรถขนส่งบรรทุก </a><br>
                        <a href="<?php echo site_url('main/register/5');?>"><i class="fa fa-bus"></i>\&nbsp; หลักสูตรอบรมรถลากจูง </a><br>
                        <a href="<?php echo site_url('main/contact');?>"><i class="fa fa-bus"></i>\&nbsp; หลักสูตรอบรมพนักงานขับรถ </a><br>
                        <a href="<?php echo site_url('main/contact');?>"><i class="fa fa-bus"></i>\&nbsp; หลักสูตรอบรม Defensive Dirver </a>					
				</address>
                </div>
			</div>
			<div class="col-lg-3 col-xs-12">
				<div class="widget" align="center">
					<h5 class="widgetheading"></h5>
                   
                        <div class="col-xs-6">
                        <a href="<?php echo site_url('main/index');?>">
                                    <img src="<?php echo base_url()?>img/idd_logo1a.gif" style="height:80px;" alt="สถาบัน ไอดี ไดร์ฟเวอร์" class="img-thumbnail"></a>
                        </div>
                        <div class="col-xs-6">
                        <a href="http://www.idsafetycenter.com/professional/companyexam/index2.php" target="_blank">
                                    <img src="<?php echo base_url()?>img/idd_logo1b.gif" style="height:80px;" alt="สถาบัน ไอดี ไดร์ฟเวอร์" class="img-thumbnail"></a>
                        </div>

					
					<div class="copyright">
						<p>
							<span>&copy; ID Driver 2015 All right reserved. </span>
						</p>
					</div>
		
                
			</div>
		</div>
	</div>
</div>
	</footer>
    </div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <style type="text/css">
        #fbplikebox {
            display: block;
            padding: 0;
            z-index: 99999;
            position: fixed;
            background: #ffffff;
        }
        .fbplbadge {
            background-color: #3B5998;
            display: block;
            height: 150px;
            top: 50%;
            margin-top: -75px;
            position: absolute;
            left: -47px;
            width: 47px;
            background-image: url("http://3.bp.blogspot.com/-1GCgbuSZXK0/T38iRiVF41I/AAAAAAAABpg/WlGuQ3fi-Rs/s1600/vertical-right.png");
            background-repeat: no-repeat;
            overflow: hidden;
            -webkit-border-top-left-radius: 8px;
            -webkit-border-bottom-left-radius: 8px;
            -moz-border-radius-topleft: 8px;
            -moz-border-radius-bottomleft: 8px;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }
		footer ul li{
			list-style-type:none;
			float:left;
			margin-left:10px;
		}
    </style>
    <script type="text/javascript">
        /*<![CDATA[*/
        (function(w2b) {
            w2b(document).ready(function() {
                var $dur = "medium"; // Duration of Animation
                w2b("#fbplikebox").css({
                    right: -311,
                    "top": 100
                })
                w2b("#fbplikebox").hover(function() {
                    w2b(this).stop().animate({
                        right: 0
                    }, $dur);
                }, function() {
                    w2b(this).stop().animate({
                        right: -311
                    }, $dur);
                });
                w2b("#fbplikebox").show();
            });
        })(jQuery);
        /*]]>*/
    </script>
    
    <div id="fbplikebox" style="display:none;">
        <div class="fbplbadge"></div>
        <div class="fb-page" data-href="https://www.facebook.com/iddrivercontact" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/iddrivercontact"><a href="https://www.facebook.com/iddrivercontact">สอนขับรถพร้อมสอบใบขับขี่ที่ ไอดี ไดร์ฟเวอร์</a></blockquote></div></div>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
</body>
</html>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75505160-1', 'auto');
  ga('send', 'pageview');

</script>