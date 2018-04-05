
<section id="featured"> 
  <!-- start slider -->
  <div>
    <div class="row">
      <div class="col-lg-12"> 
        <!-- Slider -->
        <div id="main-slider" class="flexslider" >
          <ul class="slides">
            <?php
								for($i=0;$i<count($slide);$i++){
									if($slide[$i]->status==1){
									echo '<li>';
									echo '<img src="'.base_url().'/img/slides/'.$slide[$i]->img_name.'"/>';	
									/*
									echo '<div class="flex-caption">';
									echo 	'<h3>'.$slide[$i]->title.'</h3>';
									echo 	'<p>'.strip_tags($slide[$i]->content).'</p>';
									echo '</div>';
									*/
									echo '</li>';
									}
								}
								?>
          </ul>
        </div>
        <!-- end slider --> 
      </div>
    </div>
    <br>
  </div>
</section>
<div style="margin-top:-72px">
  <div class="row" style="padding:0;margin:0;">
    <div id='cssmenu'>
      <ul>
        <li><a href='<?php echo site_url('main/register')?>'><span>สมัครเรียน</span></a></li>
        <li><a href='<?php echo site_url('main/register')?>'><span>หลักสูตร</span></a></li>
        <li><a href='<?php echo site_url('main/autocheck')?>'><span>ตรวจสอบสภาพรถ</span></a></li>
        <li><a class='last' href='<?php echo site_url('main/gallery')?>'><span>บรรยากาศโรงเรียน</span></a></li>
         <li><a class='last' href='<?php echo site_url('main/branch_1')?>'><span>สาขา ปทุมธานี</span></a></li>
          <li><a class='last' href='<?php echo site_url('main/branch_2')?>'><span>สาขา เลี่ยงเมืองขอนแก่น</span></a></li>
           <li><a class='last' href='<?php echo site_url('main/branch_3')?>'><span>สาขา มหาสารคาม</span></a></li>
        <!--    <li class='last'><a href='#'><span>ข่าวสาร</span></a></li> -->
      </ul>
  


  </div>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
         <li><a href='<?php echo site_url('main/register')?>'><span>หลักสูตร</span></a></li>
        <li><a href='<?php echo site_url('main/autocheck')?>'><span>ตรวจสอบสภาพรถ</span></a></li>
      </ul>
    </div>
  <div class='row' style="margin:0">
    <section id="content" style="background-color:white;">
      <div class="container"  style="background-color:white"> 
        <!-- divider --> 
        <!-- end divider -->
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12  col-xs-12">
            <aside>
              <div class="widget" id="index-left-menu">
                <h3 class="widgetheading">หลักสูตรและบริการ</h3>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-xs-12" ><a href="<?php echo site_url('main/register/1');?>"> <img src="<?php echo base_url()?>img/network/car.jpg" width="95%" class=""></a> </div>
                </div>
                <div class="row" style="position:relative; top:-20px;">
                  <div class="col-lg-12 col-md-12 col-xs-12" ><a href="<?php echo site_url('main/register/2');?>"> <img src="<?php echo base_url()?>img/network/motorbike.jpg"  width="95%" class=""> </a></div>
                </div>
                <div class="row" style="position:relative;top:-40px;">
                  <div class="col-lg-12 col-md-12 col-xs-12" > <a href="<?php echo site_url('main/register/4');?>"> <img src="<?php echo base_url()?>img/network/truck.jpg"  width="95%" class=""> </a></div>
                </div>
                <div class="row" style="position:relative; top:-60px;">
                  <div class="col-lg-12 col-md-12 col-xs-12" > <a href="<?php echo site_url('main/register/5');?>"> <img src="<?php echo base_url()?>img/network/trailer.jpg" width="95%" class=""> </a></div>
                </div>
                <div class="row" style="position:relative;top:-80px;">
                  <div class="col-lg-12 col-md-12 col-xs-12" > <a href="<?php echo site_url('main/contact');?>"> <img src="<?php echo base_url()?>img/network/driver.jpg"  width="95%" class=""> </a></div>
                </div>
                <div class="row" style="position:relative; top:-100px;">
                  <div class="col-lg-12 col-md-12 col-xs-12" > <a href="<?php echo site_url('main/contact');?>"> <img src="<?php echo base_url()?>img/network/defensive.jpg" width="95%" class=""> </a></div>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-lg-5 col-md-6 ">
            <aside class="right-sidebar">
              <div class="widget">
                <h3 class="widgetheading">ข่าวสารและกิจกรรม <a href="<?php echo site_url('main/news') ?>" style="float:right;font-size:13px;font-weight:initial">ดูทั้งหมด</a></h3>
                
                <ul class="recent">
                  <?php
									$count=count($news);
									if($count>5){
										$count=5;
									}
									for($i=0;$i<$count;$i++){
										echo '<li>';
										echo '<img style="height:60px" src="';
										echo base_url();
										echo 'img/uploads/'.(empty($news[$i]['image'])? 'idd_logo1b copy.PNG': $news[$i]['image']).'" class="pull-left" alt="" width="60" height="60"/>';
										echo '<h6><a href="'.site_url("main/news").'/'.$news[$i]["ID"].'">';
										echo $news[$i]["title"];
										echo '</a></h6>';
										echo '<p class="news-content">';
										echo strip_tags(html_entity_decode($news[$i]["description"]));
										echo '</p>';
										echo '<div class="bottom-article-home">';
                                        echo '<a href="'.site_url("main/news").'/'.$news[$i]["ID"].'" class="pull-right">อ่านต่อ <i class="icon-angle-right"></i></a>';
                                        echo '</div>';
										echo '</li>';
									}
								?>
                </ul>
              </div>
            </aside>
          </div>
          <div class="col-lg-4  col-md-6">
            <aside class="right-sidebar">
              <div class="widget">
                <h3 class="widgetheading">ความรู้เรื่องจราจร  <a href="<?php echo site_url('main/article') ?>" style="float:right;font-size:13px;font-weight:initial">ดูทั้งหมด</a></h3>
                <ul class="recent">
                  <?php
									$count=count($article);
									if($count>5){
										$count=5;
									}
									for($i=0;$i<$count;$i++){
										echo '<li>';
										echo '<img style="height:60px" src="';
										echo base_url();
										echo 'img/uploads/'.(empty($article[$i]->image)? 'idd_logo1b copy.PNG': $article[$i]->image).'" class="pull-left" alt="" width="60" height="60"/>';
										echo '<h6><a href="'.site_url("main/article").'/'.$article[$i]->ID.'">';
										echo $article[$i]->title;
										echo '</a></h6>';
										echo '<p class="news-content">';
										echo strip_tags(html_entity_decode($article[$i]->description));
										//echo html_entity_decode($article[$i]->description);
										echo '</p>';
										echo '<div class="bottom-article-home">';
                                        echo '<a href="'.site_url("main/article").'/'.$article[$i]->ID.'" class="pull-right">อ่านต่อ <i class="icon-angle-right"></i></a>';
                                        echo '</div>';
										echo '</li>';
									}
								?>
                </ul>
              </div>
            </aside>
          </div>
        </div>
        <hr style="border-color:#e67817">
        <div class="row">
          <div class="col-lg-3 col-lg-offset-1">
            <div class="box">
              <div class="box aligncenter" >
                <div class="icon"> <img src="<?php echo base_url()?>img/index1.jpg"  width="200" class="img-circle"> </div>
                <br />
                <strong> สอนขับรถยนต์ให้เป็น ไม่ใช่เพียงขับรถได้ </strong>
                <hr style="border-color:#e67817">
                <p align="left">&nbsp;&nbsp;&nbsp;
                  มีทั้งรถยนต์เก๋ง กระบะ เกียร์กระปุก และเกียร์ออโต ให้ผู้เรียนใช้รถฝึกขับ PC ภายในห้องได้ฟรี
                  ก่อนครูฝึกจะรับลงสนามฝึกขับรถจริง เพื่อให้ผู้เรียนได้เรียนที่สนามฝึกอย่างคุ้มค่า </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-lg-offset-1">
            <div class="box">
              <div class="box aligncenter" >
                <div class="icon"> <img src="<?php echo base_url()?>img/index2.jpg"  width="200" class="img-circle"> </div>
                <br />
                <strong>มีวิชาอบรมที่เป็นประโยชน์แก่ผู้ขับรถ </strong>
                <hr style="border-color:#e67817">
                <p align="left">&nbsp;&nbsp;&nbsp;
                  กฎหมายจราจร-กฎหมายเกี่ยวข้องต่างๆ  เทคนิคขับขี่ปลอดภัย-พร้อมแก้ไขสถานการณ์ 
                  มารยาทการขับขี่   ดูแลบำรุงรักษารถ-พร้อมแก้ไขเบื้องต้น </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-lg-offset-1">
            <div class="box">
              <div class="box aligncenter" >
                <div class="icon"> <img src="<?php echo base_url()?>img/index5.jpg"  width="200" class="img-circle"> </div>
                <br />
                <strong>สอนขับด้วยครูฝึกที่มีประสบการณ์ </strong>
                <hr style="border-color:#e67817">
                <p align="left">&nbsp;&nbsp;&nbsp;
                  สอนขับด้วยครูฝึกที่ได้รับใบอนุญาตจากกรมการขนส่งทางบก 
                  เมื่อครบ 15 ชั่วโมง ไอดี ไดร์ฟเวอร์ได้บริการจัดติว (Tutor-รับประกัน) 
                  และสอบใบขับขี่ที่ สถาบันไอดี ไดร์ฟเวอร์ได้เลย </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<script>
			$('#index-left-menu p').on('click',function(){
				$(this).html(function(){
						//return $content.is(":visible") ? "Collapse" : "Expand";
						return  $(this).next('div').is(":visible") ? $(this).html().replace('▾','▸'): $(this).html().replace('▸','▾') ;
				})
				$(this).next('div').slideToggle(300)
				
			});
		</script> 
