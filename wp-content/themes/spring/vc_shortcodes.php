<?php 
/************************************
*Title spring
*************************************/
function shortcode_section_title( $atts,  $content = null ) {
    extract( shortcode_atts( array(
      'title' => '',
      'subtitle' => '',
      'eye' => '',
      
   ), $atts ) );
   ob_start(); ?>
   <header class="section-header">
	<?php if($eye=='yes') { ?>
		<div class="eye"></div>
	<?php } ?>
		<h2 class="parallax-title"><span><?php echo $title; ?></span></h2>
		<p class="lead"><?php echo $subtitle; ?></p>
	</header>

 

<?php
    return ob_get_clean();

}
add_shortcode( 'qk_section_title', 'shortcode_section_title' );

if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Section Title","spring"),
   "base" => "qk_section_title",
   "class" => "",
   "category" => __("Content", "spring"),
   "icon" => "icon-qk",
   "params" => array(
	 
      
	   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","spring"),
         "param_name" => "title",
         "value" => "Section Title",
         "description" => ''
      ),array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("Intro Title","spring"),
         "param_name" => "subtitle",
         "value" =>'We have created a awesome theme that will help designers, developers and companies create websites for their startups quickly and easily.',
         "description" => ''
      ),
	 array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Eye","spring"),
         "param_name" => "eye",
         "value" => "",
         "description" => '"yes" or "no"'
      )
	  
   )
) );

}

/************************************
*Service spring
*************************************/
add_shortcode('qk_service','shortcode_service');
function shortcode_service($atts, $content=null){
	$atts = shortcode_atts(
		array(
		'order' => '6',
		'title' => '',
		'sub_title' => '',
	), $atts);
	
	$args = array('post_type' => 'qk_service', 'posts_per_page' => $atts['order']);
			
	 $service = new WP_Query($args);
 ob_start(); ?>
		<div class="about-inro">
			<div class="container">
				<div class="col-md-10 col-md-offset-1">
					<section class="grid">
					<?php while($service->have_posts()) : $service->the_post(); ?>
						<article>
							<a href="#"><span></span>
								<i><?php echo get_post_meta(get_the_ID(), '_cmb_ser_icon', true); ?></i>
								<h2 ><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
							</a>
						</article>
					<?php endwhile; ?>
					
					</section>
				</div>
			</div>
		</div>
		
<?php
    return ob_get_clean();

}
if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK About","spring"),
   "base" => "qk_service",
   "class" => "",
   "icon" => "icon-qk",
   "category" => __("Content", "spring"),
   "params" => array(
	 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order","spring"),
         "param_name" => "order",
         "value" => "3",
         "description" => ''
      ),
	  
	  
   )
) );

}


/************************************
*Fact spring
*************************************/
function shortcode_service_block( $atts,  $content = null ) {
    extract( shortcode_atts( array(
      
	  'num' => '',
	  'title' => '',
	  
      
   ), $atts ) );
   static $count = 1;
   ob_start(); ?>
	<div class="stat">
		<!-- Num -->
		<div class="num"><span data-count="<?php echo $num; ?>" class="increment"><?php echo $num; ?></span></div>
		<!-- Num -->
		<!-- Type -->
		<div class="number-text"><i class="fa fa-eye"></i> <?php echo $title; ?></div>
		<!-- Type -->
	</div>
	
<?php
	$count++; 
    return ob_get_clean();

}
add_shortcode( 'qk_service_block', 'shortcode_service_block' );

if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Fact","spring"),
   "base" => "qk_service_block",
   "class" => "",
   "icon" => "icon-qk",
   "category" => __("Content", "spring"),
   "params" => array(
	 array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","spring"),
         "param_name" => "title",
         "value" => "Project Views",
         "description" => ''
      ), array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number","spring"),
         "param_name" => "num",
         "value" => "36350",
         "description" => ''
      ),
      
   )
) );

}

/************************************
*Title spring
*************************************/
function shortcode_gallery( $atts,  $content = null ) {
    extract( shortcode_atts( array(
      'title' => '',
      'subtitle' => '',
      'gallery' => '',
      
   ), $atts ) );
   ob_start(); ?>
   
   <?php $gallery =  explode(",", $gallery);?>
   <?php 
   
	$img1 = wp_get_attachment_image_src($gallery[0],'full');
	$title1 = get_the_title($gallery[0]);
	$img2 = wp_get_attachment_image_src($gallery[1],'full');
	$title2 = get_the_title($gallery[1]);
	$img3 = wp_get_attachment_image_src($gallery[2],'full');
	$title3 = get_the_title($gallery[2]);
	$img4 = wp_get_attachment_image_src($gallery[3],'full');
	$title4 = get_the_title($gallery[3]);
	$img5 = wp_get_attachment_image_src($gallery[4],'full');
	$title5 = get_the_title($gallery[4]);
	$img6 = wp_get_attachment_image_src($gallery[5],'full');
	$title6 = get_the_title($gallery[5]);
	$img7 = wp_get_attachment_image_src($gallery[6],'full');
	$title7 = get_the_title($gallery[6]);
	$img8 = wp_get_attachment_image_src($gallery[7],'full');
	$title8 = get_the_title($gallery[7]);
   ?>
   <div id="gallery" class="container-fluid">					
		<div class="gal-inner clearfix" id="gallery-inner">
			<div class="col-md-4 left nopadding">
				<div class="left-box-1">
					<div class="img">
						<img alt="" src="<?php echo bfi_thumb($img1[0], array('width'=>267, 'height'=> 267)); ?>" />
						<div class="overlay">
							<a class="expand venobox" data-gall="thumb-gallery"  href="<?php echo $img1[0]?>"><?php echo $title1; ?></a>
						</div>
					</div>
				</div>
				<div class="left-box-2 box">
					<div class="img">
						<img alt="" src="<?php echo bfi_thumb($img2[0], array('width'=>267, 'height'=> 267)); ?>">
						<div class="overlay">
							<a class="expand venobox" data-gall="thumb-gallery"  href="<?php echo $img2[0]?>"><?php echo $title2; ?></a>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="left-box-btm box">
					<div class="img">
						<img alt="" src="<?php echo bfi_thumb($img3[0], array('width'=>533, 'height'=> 267)); ?>">
						<div class="overlay">
							<a class="expand venobox" data-gall="thumb-gallery"  href="<?php echo $img3[0]; ?>"><?php echo $title3; ?></a>										
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 mid nopadding">
				<div class="mid-box-1 box">
					<div class="img">
						<img alt="" src="<?php echo bfi_thumb($img4[0], array('width'=>275, 'height'=> 550)); ?>">
						<div class="overlay">
							<a class="expand venobox" data-gall="thumb-gallery"  href="<?php echo $img4[0]; ?>"><?php echo $title4; ?></a>										
						</div>
					</div>
				</div>
				<div class="mid-box-2 box">
					<div class="img">
						<img alt="" src="<?php echo bfi_thumb($img5[0], array('width'=>275, 'height'=> 550)); ?>">
						<div class="overlay">
							<a class="expand venobox" data-gall="thumb-gallery"  href="<?php echo $img5[0]; ?>"><?php echo $title5; ?></a>										
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 right nopadding">
				<div class="right-box-1 box">
					<div class="img">
						<img alt="" src="<?php echo bfi_thumb($img6[0], array('width'=>533, 'height'=> 267)); ?>">
						<div class="overlay">
							<a class="expand venobox" data-gall="thumb-gallery"  href="<?php echo $img6[0]; ?>"><?php echo $title6; ?></a>										
						</div>
					</div>
				</div>
				<div class="right-box-2 box">
					<div class="img">
						<img alt="" src="<?php echo bfi_thumb($img7[0], array('width'=>267, 'height'=> 267)); ?>">
						<div class="overlay">
							<a class="expand venobox" data-gall="thumb-gallery"  href="<?php echo $img7[0]; ?>"><?php echo $title7; ?></a>										
						</div>
					</div>
				</div>
				<div class="right-box-3 box">
					<div class="img">
						<img alt="" src="<?php echo bfi_thumb($img8[0], array('width'=>267, 'height'=> 267)); ?>">
						<div class="overlay">
							<a class="expand venobox" data-gall="thumb-gallery"  href="<?php echo $img8[0]; ?>"><?php echo $title8; ?></a>										
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery Section -->
	
 

<?php
    return ob_get_clean();

}
add_shortcode( 'qk_gallery', 'shortcode_gallery' );

if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Gallery","spring"),
   "base" => "qk_gallery",
   "class" => "",
   "category" => __("Content", "spring"),
   "icon" => "icon-qk",
   "params" => array(
	 
      
	   array(
         "type" => "attach_images",
         "holder" => "div",
         "class" => "",
         "heading" => __("Upload Images","spring"),
         "param_name" => "gallery",
         "value" => "",
         "description" => ''
      )
	  
   )
) );

}


/************************************
*Service spring
*************************************/
add_shortcode('nk_service','shortcode_nk_service');
function shortcode_nk_service($atts, $content=null){
	$atts = shortcode_atts(
		array(
		'order' => '6',
		'title' => '',
		'sub_title' => '',
	), $atts);
	
	$args = array('post_type' => 'nk_service', 'posts_per_page' => $atts['order']);
			
	 $services = new WP_Query($args);
 ob_start(); ?>
 <?php global $spring_options; ?>
		<div class="service-acco">
			<div class="panel-group clearfix" id="accordion">
			<?php $i=1; while ($services->have_posts()) : $services->the_post(); ?>
				<div class="panel panel-default">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $i; ?>">
						<h4><?php the_title(); ?><i class="indicator fa fa-plus pull-right"></i></h4>						
					</a>
					<div id="collapse_<?php echo $i; ?>" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="service-icon">
								<i class="fa fa-<?php echo get_post_meta(get_the_ID(), '_cmb_nk_icon', true); ?>"></i>
							</div>
							<div class="service-text-block">
								<?php the_content(); ?>
							</div>
							<div class="service-text-block">
								<h5><?php _e($spring_options['services_includes'] , 'spring'); ?> <i class="fa fa-level-down"></i></h5>
								<p><?php echo get_post_meta(get_the_ID(), '_cmb_nk_ser_inc', true); ?></p>									
							</div>								
						</div>
					</div>
				</div>
			<?php $i++; endwhile; ?>	
			</div>
	
			
		</div>
		<!-- End Service Section -->
		
		
<?php
    return ob_get_clean();

}
if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Services","spring"),
   "base" => "nk_service",
   "class" => "",
   "icon" => "icon-qk",
   "category" => __("Content", "spring"),
   "params" => array(
	 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order","spring"),
         "param_name" => "order",
         "value" => "4",
         "description" => ''
      ),
	  
	  
   )
) );

}


/************************************
*Team ELEMENT
*************************************/
function shortcode_team( $atts,  $content = null ) {
    extract( shortcode_atts( array(
	  'image' => '',
	  'name' => 'Jonathan Sanders',
	  'job' => 'Development',
	  'btn_link' => '#',
	  'facebook' => '#',
	  'twitter' => '#',
	  'google' => '#',
	  'btn_text' => 'more',
	  'type' => '',
	  'social' => '<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a>',
	  //'content' => 'Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tortor ac felis. Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. Praesent ac nibh congue elit interdum aliquet.'
      
   ), $atts ) );
   ob_start(); ?>
   
   <div class="team-inner">
	<?php if($type=='type2'){ ?>
		<?php
			$img = wp_get_attachment_image_src($image,'full');
			$img = $img[0];
		?>
		<img src="<?php echo $img; ?>" alt="<?php echo $name; ?>" />
		<div class="team">
			<h4><?php echo $name; ?></h4>
			<h5><?php echo $job; ?> </h5>										
		</div>
	<?php }else{ ?>
		<div class="team">
			<h4><?php echo $name; ?></h4>
			<h5><?php echo $job; ?> </h5>										
		</div>
		<?php
			$img = wp_get_attachment_image_src($image,'full');
			$img = $img[0];
		?>
		<img src="<?php echo $img; ?>" alt="<?php echo $name; ?>" />
	<?php } ?>	
		<div class="team-social <?php echo $type; ?>">
			<?php if($twitter!=''){ ?>
			<a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
			<?php } ?>
			<?php if($facebook!=''){ ?>
			<a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>
			<?php } ?>
			<?php if($google!=''){ ?>
			<a href="<?php echo $google; ?>"><i class="fa fa-google"></i></a>
			<?php } ?>
		</div>
	</div>
   

<?php
    return ob_get_clean();

}
add_shortcode( 'qk_team', 'shortcode_team' );

if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Team","spring"),
   "base" => "qk_team",
   "class" => "",
   "icon" => "icon-qk",
   "category" => __("Content", "spring"),
   "params" => array(
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Name","spring"),
         "param_name" => "name",
         "value" => "Jeams carry",
         "description" => ''
      ),
	  
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Job","spring"),
         "param_name" => "job",
         "value" => "Designer / Illustrator",
         "description" => ''
      ),
	  
     array(
         "type"      => "attach_image",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Avatar", 'spring'),
         "param_name"=> "image",
         "value"     => "",
         "description" => __("UploadIcon", 'spring')
      ),
	 
	   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Twitter","spring"),
         "param_name" => "twitter",
         "value" => "#",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Facebook","spring"),
         "param_name" => "facebook",
         "value" => "#",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Google","spring"),
         "param_name" => "google",
         "value" => "#",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Type","spring"),
         "param_name" => "type",
         "value" => "type1",
         "description" => '"type1" or "type2"'
      )
	  
   )
) );

}


/************************************
*Recent Project ELEMENT
*************************************/
add_shortcode('qk_Portfolio','shortcode_portfolio_fliter');
function shortcode_portfolio_fliter($atts, $content=null){
	global $textdomain;
	$atts = shortcode_atts(
		array(
		'order' => '3',
		'id' => '',
		'title' => '',
		'sub_title' => '',
	), $atts);
	$args = array('post_type' => 'portfolio', 'posts_per_page' => $atts['order']);
			
	$portfolio = new WP_Query($args);
 ob_start(); ?>
	<?php global $spring_options; ?>
		
		<!-- Portfolio Section -->
			<div id="portfolio">
				<div class="container">
					<div class="col-md-8 col-md-offset-2">
						<header class="section-header">							
							<h2 class="parallax-title"><span><?php echo $atts['title']; ?></span></h2>
                            <p class="lead"><?php echo $atts['sub_title']; ?></p>
						</header>
						<div id="filters-container" class="cbp-l-filters-button">
							<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All<div class="cbp-filter-counter"></div></div>
							<?php $portfolio_skills = get_terms('portfolio_category'); ?>
							  <?php foreach($portfolio_skills as $portfolio_skill) { ?>
							  <div data-filter=".<?php echo $portfolio_skill->slug; ?>" class="cbp-filter-item"><?php echo $portfolio_skill->name; ?><div class="cbp-filter-counter"></div></div>
							<?php } ?>
						</div>
					</div>					
				</div>			
			</div>
			
			<div class="portfolio-grid">
				<div class="wrapper">					
						<div id="grid-container" class="cbp-l-grid-fullScreen">
							<ul>
							<?php while($portfolio->have_posts()) : $portfolio->the_post(); ?>
								<?php
								$item_classes = '';
								$item_skill = '';
								$item_cats = get_the_terms(get_the_ID(), 'portfolio_category');
								foreach((array)$item_cats as $item_cat){
									if(count($item_cat)>0){
										$item_classes .= $item_cat->slug . ' ';
										$item_skill .= $item_cat->name . ' | ';
									}
								}
							?>
							<?php
								$img = spring_thumbnail_url('');
							?>
								<li class="cbp-item <?php echo $item_classes; ?>">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="<?php echo bfi_thumb($img, array('width'=>500, 'height'=>570)); ?>" alt="<?php the_title(); ?>">
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href="<?php the_permalink(); ?>" class="cbp-singlePage cbp-l-caption-buttonLeft"><i class="fa fa-info"></i></a>
													<?php if(get_post_meta(get_the_ID(), '_cmb_portfolio_type', true)=='video'){ ?>
														<a href="<?php echo get_post_meta(get_the_ID(), '_cmb_intro_video', true); ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="<?php the_title(); ?>"><i class="fa fa-video-camera"></i></a>
													<?php }else{ ?>
													<a href="<?php echo $img; ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="<?php the_title(); ?>"><i class="fa fa-search-plus"></i></a>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>									
								</li>
								
								<?php endwhile; ?>
							</ul>
						</div>

						<div class="cbp-l-loadMore-button">
							<a href="<?php echo get_post_type_archive_link('portfolio');?>" data-loading="<?php echo $spring_options['loading'];?>" data-nomore="<?php echo $spring_options['nomore'];?>" class="cbp-l-loadMore-button-link theme-btn"><?php echo $spring_options['load_more'];?></a>
						</div>
				</div>
			</div>	
			<!-- End Portfolio Section -->
				
	
	
	<?php global $wp_query; ?>
   <?php 
      if(is_front_page()){
         $link = home_url();
      }else{
         $link = get_permalink($wp_query->get_queried_object_id());
      }
   ?>
	
<?php
    return ob_get_clean();

}
if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Project","spring"),
   "base" => "qk_Portfolio",
   "class" => "",
   "icon" => "icon-qk",
   "category" => __("Content", "spring"),
   "params" => array(
		array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","spring"),
         "param_name" => "title",
         "value" => "View our creative works",
         "description" => ''
      ),array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => __("SubTitle","spring"),
         "param_name" => "sub_title",
         "value" => "We have created a awesome theme that will help designers, developers and companies create websites for their startups quickly and easily.",
         "description" => ''
      ),
		array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order","spring"),
         "param_name" => "order",
         "value" => "10",
         "description" => ''
      ),
	  
   )
) );

}

/************************************
*Portfolio Slider ELEMENT
*************************************/
add_shortcode('qk_testimonial','shortcode_testimonial');
function shortcode_testimonial($atts, $content=null){
	$atts = shortcode_atts(
		array(
		'order' => '8',
		'id' => '',
	), $atts);
	$args = array('post_type' => 'testimonial', 'posts_per_page' => $atts['order']);
			
	$testimonials = new WP_Query($args);
 ob_start(); ?>
		
		<!-- Testimonial Section -->
		<div id="testimonial">
			<i class="fa fa-quote-left"></i>
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div id="testimonial-slider" class="owl-carousel">
						<?php while($testimonials->have_posts()) : $testimonials->the_post(); ?>
						<div class="item">
							<div class="quote"><?php the_content(); ?></div>
							<hr/>
							<h4 class="author"><?php the_title(); ?><br><span><?php echo get_post_meta(get_the_ID(), '_cmb_t_job', true); ?></span></h4>
						</div>
						<?php endwhile; ?>						
					</div>
					
				</div>
			</div>	
		</div>
		<!-- End Testimonial Section -->
	
		
<?php
    return ob_get_clean();

}
if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Testimonial","spring"),
   "base" => "qk_testimonial",
   "class" => "",
   "category" => __("Content", "spring"),
   "icon" => "icon-qk",
   "params" => array(
		array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order","spring"),
         "param_name" => "order",
         "value" => "3",
         "description" => ''
      ),
	  
   )
) );

}


add_shortcode('qk_client','shortcode_client');
function shortcode_client($atts, $content=null){
	$atts = shortcode_atts(
		array(
		'cat' => '',
		'order' => '3',
	), $atts);
	
	$args = array('post_type' => 'client', 'posts_per_page' => $atts['order']);
		
	 $flexslider = new WP_Query($args);
	  ob_start(); ?>
	  <!-- CLIENTS -->
		
				<div id="client-slider" class="owl-carousel">
				<?php while($flexslider->have_posts()) : $flexslider->the_post(); ?>
					<div class="item">
					<a href="<?php echo get_post_meta(get_the_ID(), '_cmb_link', true); ?>" >
						<img alt="<?php the_title(); ?>" src="<?php echo get_post_meta(get_the_ID(), '_cmb_c_logo', true); ?>" />
					</a>
					</div>
				<?php endwhile; ?>
				</div>
			
		<!-- END CLIENTS -->

	  
	 <?php
    return ob_get_clean();

}

if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Client","arista"),
   "base" => "qk_client",
   "class" => "",
   "icon" => "icon-qk",
   "category" => __("Content", "arista"),
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order","arista"),
         "param_name" => "order",
         "value" => '10',
         "description" => ''
      )
   )
) );

}


/************************************
*Blog ELEMENT
*************************************/
add_shortcode('qk_blog','shortcode_blog');
function shortcode_blog($atts, $content=null){
	$atts = shortcode_atts(
		array(
		'order' => '8',
		'title' => '',
		'id' => '',
	), $atts);
	$args = array('post_type' => 'post', 'posts_per_page' => $atts['order']);
			
	$portfolio = new WP_Query($args);
 ob_start(); ?>
	
	<div class="post-list">
	<?php
			while($portfolio->have_posts()) : $portfolio->the_post();
		?>
			<div class="post-entry">
				<span class="color-overlay"></span>
				<p class="note-meta"><span class="date-posted"><?php the_time('F jS Y'); ?> / <span class="category"><?php the_category(', '); ?></span></span></p>
				<h4><a  href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
				<cite class="note-author"><?php _e('Posted by', 'spring'); ?> <?php the_author_posts_link(); ?></cite>
			</div>
	<?php endwhile; ?>			
		</div>
		<div class="blog-action-panel">
			<a href="<?php echo get_permalink($atts['id']);?>" class="theme-btn read-blog">READ ALL BLOG</a>
		</div>
	
	
	
<?php
    return ob_get_clean();

}
if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Blog","spring"),
   "base" => "qk_blog",
   "class" => "",
   "category" => __("Content", "spring"),
   "icon" => "icon-qk",
   "params" => array(

		array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Order","spring"),
         "param_name" => "order",
         "value" => "3",
         "description" => ''
      ),
	  array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Page ID full Blog","spring"),
         "param_name" => "id",
         "value" => "",
         "description" => ''
      ),
	  
   )
) );

}
/************************************
*Featured Video
*************************************/
function shortcode_video( $atts,  $content = null ) {
    extract( shortcode_atts( array(
      'title' => '',
      'subtitle' => '',
      'video' => '',
      
   ), $atts ) );
   ob_start(); ?>
   
   <section class="separator-overlay video-featured">		
	<a class="venobox" data-type="vimeo" href="<?php echo $video; ?>"><img alt="" title="" src="<?php echo get_template_directory_uri(); ?>/img/play.png"/></a>
	<h1><span><?php echo $title; ?></span></h1>
	<h3><span><?php echo $subtitle; ?></span></h3>
</section>
 
<?php
    return ob_get_clean();

}
add_shortcode( 'qk_video', 'shortcode_video' );

if(function_exists('vc_map')){

vc_map( array(
   "name" => __("NK Featured Video","spring"),
   "base" => "qk_video",
   "class" => "",
   "category" => __("Content", "spring"),
   "icon" => "icon-qk",
   "params" => array(
	 
      
	   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title","spring"),
         "param_name" => "title",
         "value" => "Featured Video",
         "description" => ''
      ),array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Intro Title","spring"),
         "param_name" => "subtitle",
         "value" =>'Anim pariatur cliche reprehenderit',
         "description" => ''
      ),
	 array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Video Url","spring"),
         "param_name" => "video",
         "value" => "http://vimeo.com/75976293",
         "description" => ''
      )
	  
   )
) );

}

/************************************
*Featured Video
*************************************/
function shortcode_contact( $atts,  $content = null ) {
    extract( shortcode_atts( array(
      'contact_form' => '',
      
   ), $atts ) );
   ob_start(); ?>
   
 <div class="open-contact" id="show-contactform">
		<i class="fa fa-envelope-o"></i>
</div>

	<div class="contact-form clearfix">
		
		<?php echo do_shortcode('[contact-form-7 id="'.$contact_form.'"]'); ?>
		
	</div>
 
<?php
    return ob_get_clean();

}
add_shortcode( 'qk_contact', 'shortcode_contact' );

if(function_exists('vc_map')){
$args = array (
		'nopaging' => true,
		'post_type' => 'wpcf7_contact_form',
		'status' => 'publish',
	);
$contacts = get_posts($args);	
$contact_options = array(); $default_contact = '';
foreach ($contacts as $contact) {

//$default_contact = empty($default_sidebar) ? $contact->ID : $default_contact;
$contact_options[$contact->post_title] = $contact->ID;

}
vc_map( array(
   "name" => __("NK Contact Form","spring"),
   "base" => "qk_contact",
   "class" => "",
   "category" => __("Content", "spring"),
   "icon" => "icon-qk",
   "params" => array(
	 
      
	   array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => __("Select Contact","spring"),
         "param_name" => "contact_form",
         "value" => $contact_options,
         "description" => ''
      )
	 
	  
   )
) );

}
function shortcode_icon( $atts,  $content = null ) {
    extract( shortcode_atts( array(
      
	  'link' => '#',
	  'name' => 'facebook',
	  'title' => 'Facebook',
	  
      
   ), $atts ) );
   ob_start(); ?>
   <a href="<?php echo $atts['link']; ?>"><i class="fa fa-<?php echo $atts['name']; ?>"></i></a>
   
<?php
    return ob_get_clean();

}
add_shortcode( 'qk_icon', 'shortcode_icon' );

?>