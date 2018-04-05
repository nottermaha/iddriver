<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="min-width:400px">
                <?php 
				$id = $this->uri->segment(3);
				for($i=0;$i<count($content);$i++){
					echo '<h3>'.$content[$i]->title. '</h3>'; 
					if($content[$i]->image==NULL){ 
						echo '<div style="text-align:center"><img src="'.base_url(). '/img/idd_logo1a.gif"/></div>'; }
					else{ 
						echo '<div style="text-align:center"><img src="'.base_url(). "img/uploads/".$content[$i]->image. '"></div>'; 
					} 
					if(empty($id)){
						echo '<br><p class="box">';
						echo strip_tags(html_entity_decode($content[$i]->description));
						echo '<a href="'.site_url("main/article").'/'.$content[$i]->ID.'" class="pull-right">อ่านต่อ <i class="icon-angle-right"></i></a>';
						echo '</p>';
					}else{
						echo '<br><p>';
						echo html_entity_decode($content[$i]->description);
						echo '<br><a href="'.site_url("main/article").'" class="pull-right">ย้อนกลับ <i class="icon-angle-right"></i></a>';
						echo '<br></p>';
					}
					echo '<hr>';
				}
				?>
			</div>
            
            
            <div class="col-lg-4">
                <aside class="right-sidebar">
                    <div class="widget">
                        <h5 class="widgetheading">ข่าวล่าสุด</h5>
                        <ul class="cat">
                           <?php 
							$allnews =$this->model->getNews(null);
							$count = count($allnews);
							if($count>5){
								$count = 5;
							}
								for($i=0;$i<$count;$i++){
									echo '<li>';
									echo '<i class="icon-angle-right"></i>';
									echo '<a class="icon-angle-right"></a>';
									echo '<a href="'.site_url("main/news").'/'.$allnews[$i]["ID"].'">'.$allnews[$i]['title'].'</a>';
									echo '</li>';
								}
							?>
                            </li>
                        </ul>
                    </div>
                    <!--
                    <div class="widget">
                        <h5 class="widgetheading">บทความน่าสนใจ</h5>
                        <ul class="recent">
                            <li>
                                <img src="<?php echo base_url()?>/img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
                                <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url()?>/img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
                                <h6><a href="#">Maiorum ponderum eum</a></h6>
                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url()?>/img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
                                <h6><a href="#">Et mei iusto dolorum</a></h6>
                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </li>
                        </ul>
                    </div>
                -->
                </aside>
            </div>
        </div>
    </div>
</section>
<style>
.box {
    -o-text-overflow: ellipsis;   /* Opera */
    text-overflow:    ellipsis;   /* IE, Safari (WebKit) */
    overflow:hidden;              /* don't show excess chars */
    white-space:nowrap;           /* force single line */
    width: 100%;                 /* fixed width */
}
</style>