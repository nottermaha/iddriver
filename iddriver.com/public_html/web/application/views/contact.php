<section id="content" style="background:url(<?php echo base_url()?>/img/bg_contact.jpg); background-size:cover">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <select class="form-control" id='idRoot'>
                        <option value='1'>ไอดี ไดร์ฟเวอร์ สำนักงานใหญ่</option>
                        <option value='2'>เดอะโปรเฟชชั่นแนล ไอดี ไดร์ฟเวอร์</option>
                        <option value='3'>ไอดี ไดร์ฟเวอร์ สาขาหน้าหมู่บ้านการเคหะ</option>
                        <option value='4'>ไอดี ไดร์ฟเวอร์ สาขาถนนมะลิวัลย์ (หน้าหมู่บ้านเบสโฮม 3)</option>
                        <option value='5'>ไอดี ไดร์ฟเวอร์ สาขาถนนศรีจันทร์</option>
                        <option value='6'>ไอดี ไดร์ฟเวอร์ สาขาถนนกลางเมือง</option>
                        <option value='7'>ไอดี ไดร์ฟเวอร์ สาขาถนนมิตรภาพ</option>
                        <option value='8'>ไอดี ไดร์ฟเวอร์ สาขาในปั๊ม ปตท. มหาวิทยาลัยขอนแก่น</option>
                        <option value='9'>ไอดี ไดร์ฟเวอร์ สาขามหาสารคาม  จังหวัด มหาสารคาม</option>
                        <option value='10'>ไอดี ไดร์ฟเวอร์ สาขาลำลูกกา จังหวัดปทุมธานี </option>
                    </select>
                </div>
                <div id='map'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30616.123404344144!2d102.8526925014071!3d16.424042956575075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x54941db8580c4b1a!2z4LmC4Lij4LiH4LmA4Lij4Li14Lii4LiZ4Liq4Lit4LiZ4LiC4Lix4Lia4Lij4LiWSUQgZHJpdmVy!5e0!3m2!1sen!2sth!4v1422506929542" frameborder="0" style="border:0;width:100%;height:500px;"></iframe>
                </div>
                <div class="col-md-12 col-xs-12" align="center">
                <div class='row' id='mapImage'>
            <image src='http://iddriver.com/images/map03.jpg'  class='img-thumbnail' />
        </div>
        </div>
            </div>
            <div class="col-md-6" id="contact_form">
                <h4>กรอกข้อมูลเพื่อทำการติดต่อเรา</h4>
                <?php $id=array( 'id'=> 'contactform','novalidate'=>true); echo form_open('mail/sendMail',$id ); ?>
                <!--<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">-->
                <div id="sendmessage">
                    Your message has been sent. Thank you!
                </div>
                <div class="row">
                    <div class="col-lg-4 field">
                        <input type="text" name="name" placeholder="ชื่อ-นามสกุล"  required/>
                    </div>
                    <div class="col-lg-8 field">
                        <input type="text" name="email" placeholder="อีเมลแอดเดรส" required />
                    </div>
                 </div>
                    <div class="row">
                    <div class="col-lg-8">
                        <h4>ติดต่อเรื่อง</h4>
                        <select type="text" name="subject" placeholder="ชื่อหัวข้อ" class="form-control">
                            <option value="ติดต่อสอบถาม">ติดต่อสอบถาม</option>
                            <option value="สอบถามราคา">สอบถามราคา</option>
                        </select>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-12 field">
                        <input type="text" name="head" placeholder="หัวข้อ" required />
                    </div>
                    <div class="col-lg-12 margintop10 field">
                        <textarea rows="12" name="message" class="input-block-level" required></textarea>
                        <p>

                               <?php 
                                $this->captcha->captcha_create(); ?>
                            <h4 for="captcha">โปรดกรอกรหัสด้านบน</h4>
                            <div class="col-md-6 col-xs-12">
                            <input type="text" name="captcha" class="form-control" value="" id="captcha"/>
                        </div>
                        <div class="row">
                            
                            <button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
                        </div>
                        </p>
                    </div>
                </div>
                <!--</form>-->
                <?php echo form_close(); ?>
            </div>
        </div>
        
    </div>
</section>
<script>
    $('#contactform').validationEngine({
        'custom_error_messages': {
            'custom[email]': {
                'message': "รูปแบบของอีเมลไม่ถูกต้อง"
            }
        }
    }); // Apply form validate
    $('#idRoot').on('change', function() {
        $('#map').empty();
        $('#mapImage').empty();
        if (this.value == 1) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30616.123404344144!2d102.8526925014071!3d16.424042956575075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x54941db8580c4b1a!2z4LmC4Lij4LiH4LmA4Lij4Li14Lii4LiZ4Liq4Lit4LiZ4LiC4Lix4Lia4Lij4LiWSUQgZHJpdmVy!5e0!3m2!1sen!2sth!4v1422506929542" frameborder="0" style="border:0;width:100%;height:500px;"></iframe>');
            $('#mapImage').append("<image src='http://iddriver.com/images/map03.jpg' class='img-thumbnail'/>");
        }
        if (this.value == 2) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.0585801960583!2d102.85577899999998!3d16.421851000000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228bd5b5a96303%3A0xf7278e18f1db393d!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4lOC4reC4sCDguYLguJvguKPguYDguJ_guIrguIrguLHguYjguJnguYHguJnguKUg4LmE4Lit4LiU4Li1IOC5hOC4lOC4o-C5jOC5gOC4p-C4reC4o-C5jCDguIjguLPguIHguLHguJQ!5e0!3m2!1sen!2sth!4v1423149947095" frameborder="0" style="border:0;width:100%;height:500px;"></iframe>');
            $('#mapImage').append("<image src='http://iddriver.com/images/map2-02.jpg' class='img-thumbnail'/>");
        }
        if (this.value == 3) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3827.8722664166726!2d102.81717599999999!3d16.380468!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312289cdf77e0f1d%3A0x3ef352dc4cd93ce6!2z4LmE4Lit4LiU4Li1IOC5hOC4lOC4o-C5jOC4n-C5gOC4p-C4reC4o-C5jA!5e0!3m2!1sen!2sth!4v1423150132419" frameborder="0" style="border:0;width:100%;height:500px;"></iframe>');
            $('#mapImage').append("<image src='http://iddriver.com/images/map3-02.jpg' class='img-thumbnail'/>");
        }
        if (this.value == 4) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3826.5328321154625!2d102.771324!3d16.448536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312261bd4c211389%3A0x183a5db35caed63!2z4LmE4Lit4LiU4Li1IOC5hOC4lOC4o-C5jOC4n-C5gOC4p-C4reC4o-C5jA!5e0!3m2!1sen!2sth!4v1423150338212" frameborder="0" style="border:0;width:100%;height:500px;"></iframe>');
            $('#mapImage').append("<image src='http://iddriver.com/images/map4-02.jpg' class='img-thumbnail'/>");
        }
        if (this.value == 5) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3826.9558010230276!2d102.86192799999999!3d16.427070999999994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228bd08ea1e1f3%3A0x4111bf8705875009!2z4LmE4Lit4LiU4Li1IOC5hOC4lOC4o-C5jOC4n-C5gOC4p-C4reC4o-C5jA!5e0!3m2!1sen!2sth!4v1423150427595" frameborder="0" style="border:0;width:100%;height:500px;"></iframe>');
            $('#mapImage').append("<image src='http://iddriver.com/images/map5-02.jpg' class='img-thumbnail'/>");
        }
        if (this.value == 6) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15307.946711097926!2d102.8636148499511!3d16.425502985640012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228bd08ea1e1f3%3A0x4111bf8705875009!2z4LmE4Lit4LiU4Li1IOC5hOC4lOC4o-C5jOC4n-C5gOC4p-C4reC4o-C5jA!5e0!3m2!1sen!2sth!4v1423150505207" frameborder="0" style="border:0;width:100%;height:500px;""></iframe>');
            $('#mapImage').append("<image src='http://iddriver.com/images/map6-02.jpg' class='img-thumbnail'/>");
        }
        if (this.value == 7) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.223629807241!2d102.817609!3d16.413464999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312289f0859f9bd5%3A0x841cf29962d35fbf!2z4LmE4Lit4LiU4Li1IOC5hOC4lOC4o-C5jOC4n-C5gOC4p-C4reC4o-C5jA!5e0!3m2!1sen!2sth!4v1423150583661" frameborder="0" style="border:0;width:100%;height:500px;"></iframe>');
            $('#mapImage').append("<image src='http://iddriver.com/images/map7-02.jpg' class='img-thumbnail'/>");
        }
        if (this.value == 8) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3826.2014915504105!2d102.81995500000001!3d16.465332000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a7bb9e814f5%3A0xf0469d0a80730d0!2z4LmB4Lib4Lil4LiH4LiX4Li14LmIMi3guKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguILguK3guJnguYHguIHguYjguJk!5e0!3m2!1sen!2sth!4v1423152354920" frameborder="0" style="border:0;width:100%;height:500px;"></iframe>');
            $('#mapImage').append("<image src='http://iddriver.com/images/map8-02.jpg' class='img-thumbnail'/>");
        }
		if (this.value == 9) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61307.41101489703!2d103.30331969999999!3d16.183734399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3122a68d2d01982f%3A0x402b54113615bc0!2z4LiV4Liz4Lia4LilIOC4leC4peC4suC4lCDguK3guLPguYDguKDguK3guYDguKHguLfguK3guIfguKHguKvguLLguKrguLLguKPguITguLLguKEg4Lih4Lir4Liy4Liq4Liy4Lij4LiE4Liy4LihIDQ0MDAw!5e0!3m2!1sth!2sth!4v1429522102940" width="600" height="450" frameborder="0" style="border:0"></iframe>');
            $('#mapImage').append("<image src='<?php echo base_url()?>/img/network/45944.png' class=''/>");
        }
		if (this.value == 10) {
            $('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247820.2997284293!2d100.66070518662605!3d13.947159760832633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d79a94889ce1b%3A0x3019237450c51c0!2z4Lit4Liz4LmA4Lig4LitIOC4peC4s-C4peC4ueC4geC4geC4siDguJvguJfguLjguKHguJjguLLguJnguLU!5e0!3m2!1sth!2sth!4v1429523373374" width="600" height="450" frameborder="0" style="border:0"></iframe>');
            $('#mapImage').append("<image src='<?php echo base_url()?>/img/network/45944.png' class=''/>");
        }

    });
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
    #contact_form{
        background-color:rgba(103, 103, 103, 0.8);
    }
    h4{
        
        color:white;
    }
</style>