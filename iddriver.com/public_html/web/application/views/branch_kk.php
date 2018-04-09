<section id="content" style="background:url(<?php echo base_url()?>/img/bg_contact.jpg); background-size:cover">
    <!-- <div class="container"> -->

  <div class="section">

<div class="row" style="padding-top:5px;">
    <div class="col-md-3"style="padding-left:23px;">
      <div class="panel" >
        <div class="body" style="padding-left:20px;">
        <!-- <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
            <aside> -->
              <div class="widget" id="index-left-menu">
                <h1 class="widgetheading">หลักสูตรและบริการ</h1>
                <hr style="width:90%;"> 
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
            <!-- </aside>
          </div> -->
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="panel">
        <div class="body" style="padding:30px;">
              <h1 style="text-align:center;"><?php echo $branch['name'] ?></h1>
              <hr style="width:90%;">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $branch['address'] ?></p>
              <div class="row"><?php foreach($branch_catagory as $key=>$value){?>
                <div class="col-md-6" style="padding-bottom:10px;">
                  <a href="<?php echo base_url('img/'.$value['image']);?>">
                      <img src="<?php echo base_url('img/'.$value['image']);?>"
                      class="img-responsive" style="width:300px;height:200px;">
                  </a>
                    </div>
                <?php } ?>
              </div>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $branch['thaiDetail'] ?></p> 
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $branch['englishDetail'] ?></p>
        </div>
      </div>
    </div>

    <div class="col-md-3" style="padding-right:20px;">
      <div class="panel">
        <div class="body">
        <h1 style="text-align:center;">วีดีโอที่เกี่ยวข้อง</h1>
        <hr style="width:90%;"> 
          <div class="row">
          <?php foreach ($url as $key => $value) { ?>
            <div style="padding-left:20px;">
                <iframe width="300px" height="250px" src="<?php echo $value['url'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <!-- <div style="padding-left:20px;">
                <iframe width="300px" height="250px" src="https://www.youtube.com/embed/M47E9eebYos" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div> -->
            <?php }?>
          </div>
        </div>
      </div>
    </div>
</div>
      <!-- <div >
        <h1>ไอดี ไดร์ฟเวอร์   ขอนแก่น (043-224-000 , 043-227-229 )</h1>
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo base_url()?>/img/branchkk1.jpg"
            class="img-responsive"><br>
             <img src="<?php echo base_url()?>/img/branchkk2.jpg"
            class="img-responsive"><br>
             <img src="<?php echo base_url()?>/img/branchkk3.jpg"
            class="img-responsive">
             <img src="<?php echo base_url()?>/img/branchkk4.jpg"
            class="img-responsive">
             <img src="<?php echo base_url()?>/img/branchkk5.jpg"
            class="img-responsive">
          </div>
          <div class="col-md-6"   >
            <div class="panel panel-default"><h2>ไอดี ไดร์ฟเวอร์ สาขา ขอนแก่น </h2><p >  
              <br>   
 </p>
 			<h1> โทร. (043) 224000 , 227229 </h1>
      <p>
      “มาตรฐานคุณภาพโรงเรียนสอนขับรถดีเด่นจากกระทรวงศึกษาธิการ และกรมการขนส่งทางบก 

กระทรวงคมนาคมพร้อมการให้บริการที่สะดวกรวดเร็วและครบวงจร 

เป็นต้นแบบให้แก่หน่วยงานทั้งภาครัฐและเอกชน ทั้งในและต่างประเทศ 

พร้อมทั้งระบบการจัดการเรียนการสอนและการสอบใบอนุญาตขับรถที่ได้มาตรฐานสากล”

จังหวัดขอนแก่นมีสถานที่ท่องเที่ยวเชิงวัฒนธรรมที่มีสิ่งศักดิ์สิทธิ์หลายแห่ง 

ขอแนะนำโปรแกรมไหว้พระสักการะสิ่งศักดิ์สิทธิ์เสริมสิริมงคลแห่งชีวิต 

พร้อมศึกษาเรื่องราวความเป็นมาของจังหวัดขอนแก่นที่โฮงมูนมังเมืองขอนแก่น 

ซึ่งเป็นพิพิธภัณฑ์ที่รวบรวมความเป็นมาของเมืองขอนแก่น 

ตลอดจนสะท้อนถึงสภาพชีวิตและความเป็นอยู่ของชาวขอนแก่นตั้งแต่อดีตจนถึงปัจจุบัน 

หลังจากนั้นก็นั่งรถเลาะริมบึงไหว้พระสักการะสิ่งศักดิ์สิทธิ์รอบบึงแก่นนคร 

แล้วค่อยแวะไปดูงานด้านระบบรักษาความปลอดภัยทางถนนของโรงเรียนสอนขับรถไอดีไดร์ฟเวอร์ 

ซึ่งอยู่ห่างจากบึงแก่นนครประมาณ 1 กิโลเมตร เสร็จจาการศึกษาดูงานแล้ว 

แวะไปไหว้พระและชมสิมอีสานวัดป่าแสงอรุณ ที่อยู่ใกล้ๆ 

กับโรงเรียนสอนขับรถไอดีไดร์ฟเวอร์เช่นเดียวกัน

สำหรับโรงเรียนสอนขับรถไอดีไดร์ฟเวอร์ 

เป็นโรงเรียนสอนขับรถเอกชนที่มีมาตรฐานรับรองจากกรมการขนส่ง ทางบก กระทรวงคมนาคม 

และกระทรวงศึกษาธิการเปิดดำเนินการตั้งแต่ปี 2536 

รองรับการแก้ไขปัญหาอุบัติเหตุทางถนนระดับประเทศได้เป็นอย่างดี 

ซึ่งสอดคล้องกับวาระความปลอดภัยทางถนนระดับโลก คือทศวรรษความปลอดภัยทางถนนระหว่างปี 

2554-2563 โดยองค์การสหประชาชาติเป็นผู้กำหนด โรงเรียนสอนขับรถไอดีไดร์ฟเวอร์ 

เปิดการเรียนการสอนขับรถทุกประเภททั้งภาคทฤษฎีและปฏิบัติ ตามมาตรฐานของกรมการขนส่งทางบก 

ได้แก่ รถจักยานยนต์, รถยนต์ส่วนบุคคล, รถตู้โดยสาร, รถบรรทุก, รถการเกษตร, ฯลฯ 

รวมถึงการให้บริการตรวจสภาพรถทุกประเภทก่อนต่อภาษีรถอีกด้วย 

ระบบการเรียนการสอนที่มีความโดดเด่นและแตกต่างจากที่อื่นๆ 

คือการฝึกขับรถโดยใช้เครื่องซีมูเลเตอร์ซึ่งคล้ายคลึงกับระบบการฝึกการบิน 

ทั้งนี้เพื่อให้เกิดความคุ้นเคยและมีความชำนาญในการบังคับรถก่อนลงสนามขับจริง 

เป็นการขัรถเชิงป้องกันอุบัติเหต์ระหว่างการฝึกขับได้เป็นอย่างดี และระหว่างการลงฝึกขับในสนามจริงนั้น 

ไอดีไดร์ฟเวอร์ กำหนดให้มีครูฝึกผู้มีความเชี่ยวชาญกำกับการฝึกขับรถอย่างใกล้ชิดแบบตัวต่อตัว 

ในสนามฝึกขับจนผ่านการทดสอบและประเมินผลแล้ว ครูฝึกจึงพาขับออกนอกสถานที่บนถนนจริงๆ 

เมื่อผ่านการประเมินทักษะต่างๆแล้ว 

จึงกำหนดให้นักเรียนที่มาเรียนขับรถได้เข้าสู่กระบวนการสอบภาคทฤษฎีและภาคปฏิบัติตามข้อกำหนดการ

ออกใบอนุญาตขับขี่รถแต่ละประเภท ของกรมการขนส่งทางบก กระทรวงคมนาคม 

แล้วทำการออกใบอนุญาตขับขี่รถซึ่ง โรงเรียนไอดีไดร์ฟเวอร์ 

สามารถเป็นผู้ออกใบรับรองเพื่อขอรับใบอนุญาตขับขี่ได้ทุกประเภทตามที่กฎหมายกำหนด 

และสิ่งที่น่าศึกษาดูงานของโรงเรียนสอนขับรถไอดีไดร์ฟเวอร์ 

นอกเหนือจากระบบการเรียนการสอนและสนามฝึกขับรถแต่ละประเภทก็คือ 

การนำระบบเทคโนโลยีสารสนเทศเข้ามาใช้ในการบริหารจัดการการเรียนการสอน เช่น 

ระบบการสอบทฤษฎี E-exam, ระบบการสอบภาคปฏิบัติ E-driving 

ซึ่งสามารถควบคุมคุณภาพตามมาตรฐานของกรมการขนส่งทางบก 

บริษัทไอดีไดร์ฟเวอร์เป็นต้นแบบของนวัตกรรมให้กับส่วนราชการและโรงเรียนสอนขับรถเอกชนทั่วไปจำ

นวนมาก 

จากการพัฒนาคุณภาพอย่างต่อเนื่องของโรงเรียนไอดีไดร์ฟเวอร์ กรมการขนส่งทางบก 

กระทรวงคมนาคมกำหนดให้โรงเรียนสอนขับรถไอดีไดร์ฟเวอร์ เปิดหลักสูตร “สร้างนักขับรถมืออาชีพ” 6 

ปี ติดต่อกัน ในการผลิตพนักงานขับรถใหญ่มืออาชีพทุกประเภท ได้แก่ รถโดยสารขนาดใหญ่, 

รถบรรทุกพ่วง, รถบรรทุกวัตถุอันตรายเพื่อป้อนตลาดแรงงาน 

ซึ่งได้รับการสนับสนุนงบประมาณจากกองทุนเพื่อความปลอดภัยในการใช้รถใช้ถนน ( กปถ.) 

กรมการขนส่งทางบก กระทรวงคมนาคม ย่างเข้าสู่ทศวรรษที่ 3 ที่โรงเรียนสอนขับรถไอดีไดร์ฟเวอร์ 

มุ่งพัฒนาการแก้ไขอุบัติเหตุทางถนนเชิงป้องกันอย่างยั่งยืน ได้มีการฝึกอบรมหลักสูตร 

ขับรถเชิงป้องกันอุบัติเหตุรถยนต์ รถบรรทุก รถลากจูง รถขนส่งน้ำมัน Defensive Driving Training course 

เป็นที่ยอมรับของกลุ่มผู้ประกอบการขนส่งและโลจิสติกส์ทั่วทั้งประเทศ 

อีกทั้งยังได้รับการยอมรับจากรัฐบาลสปป.ลาวเป็นอย่างยิ่ง โดย สปป.ลาว 

ได้นำผู้ประกอบการภาคเอกชนมาเยี่ยมชมทุกปีพร้อมส่งเสริมให้ภาคเอกชนในประเทศ 

นำนวัตกรรมและระบบการขับรถของไอดีไดร์ฟเวอร์ไปใช้ในการเรียนการสอนและขยายผลทางธุรกิจใน 

สปป.ลาว กันอย่างต่อเนื่องนี่คือที่สุดการบริการเบ็ดเสร็จ one stop service 

ของความปลอดภัยทางถนนของประเทศ ซึ่งตั้งอยู่ที่จังหวัดขอนแก่น โดยนักธุรกิจชาวขอนแก่น 

There are several cultural tourist attractions with holy objects in Khon Kaen province. We 

recommend a travel program to respect to holy objects for auspicious life, and at the same time 

learn about the background of Khon Kaen province at Home Moon Mung Muang  Khon Kaen which 

is a museum where there are collections of the history of Khon Kaen as well as how people in the old 

days until now lived. After that, you may drive along the swamp bank to play respect to holy objects 

around Kaen Nakhon swamp. Then you can visit ID Driver driving school which is around one 

kilometer away from the swamp to learn the road safety system. After the visit, you may visit 

Wat Pa Saeng Aroon temple to pay respect to Buddha images and see Isan style Buddhist monastery. 

ID Driver driving has been certified for the quality standard by Department of Land 

Transport, Ministry of Transport, and Ministry of Education. We have opened the business since 

1993. It may be said that our business has played an important role in solving road accident 

problems in the country. This corresponds to the world road safety occasion: The Decade of Road 

Safety (2011-2020) by UN. ID Driver driving school province courses for all types of driving through 

both theory and practice based on the standard of Department of Land Transport, Ministry of 

Transport namely motorcycle, private car, passenger van, truck, agricultural machines, etc. The 

school also provides service for car inspection before renewing the tax. 

What makes ID Driver driving school’s lessons different from others is the driving similar to 

fight from others is the driving simulation. This is to ensure that the learners have enough skills in 

controlling the car before actual driving, which in turn can prevent accidents to happen during the 

actual driving practice. Skilled driving coach will be with the learner one to one when practice. Until 

after the learner has completed the practice and passed the driving test, the driving coach will take 

the learner to drive on the real road. When the learner has passed all the skill evaluations, they can 

take the test, both written and driving, and go through all the steps as regulated by the Department 

of Land Transport, Ministry of Transport, before the driving license can be issued by ID Driver driving 

school as allowed by the law. Apart from the driving lesson and types of driving practice fields, 

information and communication technology implemented in the courses such as E-exam  (Electronic 

Test Examination ), E-driving  (Electronic Test Driving  ) , is also interesting. Such technology allows 

the school to be abide by the standard of the department of Land Transport, and has become the 

innovation for other public and private driving schools. 

With the ongoing quality improvement of the school, the Department of Land Transport, has 

assigned ID Driver driving school to provide Professional  Driver  with Defensive driving Training 

course  . The course has produced all types of large-vehicle driver including large bus, trailer, 

dangerous material truck, for the work force. The course is funded by the Road Safety Fund. 

Department of Land Transport, Ministry of Transport. ID Driver driving school is reaching the third 

decade of developing sustainable prevention of road accidents. We have been acknowledged by 

transport and logistics entrepreneurs not just in the country, but also Lao People’s Democratic 

Republic which bring private entrepreneurs to visit the school every year and encourage private 

sectors in their country to implement and invest our innovation and driving lessons in Lap People’s 

Democratic Republic. We are the best one stop service  in road safety, located in Khon Kaen, by 

Khon Kaen business people.
              </p>
             </div>
          </div>
        </div>
      </div>
    </div> -->
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