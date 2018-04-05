<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<ul class="portfolio-categ filter">
								<?php
									for($i=0;$i<count($album);$i++){
										if($i==0){
										echo '<li class="'.$album[$i]->ID.' active"><a href="#">'.$album[$i]->name.'</a></li>';
										}
										else{
										echo '<li class="'.$album[$i]->ID.'"><a href="#">'.$album[$i]->name.'</a></li>';	
										}
									}
								?>
				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
						<ul id="thumbs" class="portfolio">
								<?php
									for($i=0;$i<count($images);$i++){
										echo '<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="'.$images[$i]->gen_id.'">';
										echo '<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="'.base_url().'img/gallery/'. $images[$i]->image.'">';
										echo '<span class="overlay-img"></span>';
										echo '<span class="overlay-img-thumb font-icon-plus"></span>';
										echo '</a>';
										echo '<img src="'.base_url().'img/gallery/'. $images[$i]->image.'">';
										echo '</li>';
									}
								?>
						</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
</section>