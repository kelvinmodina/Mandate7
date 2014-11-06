<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php 
global $spring_options; 
global $wp_query;
    $seo_title = get_post_meta($wp_query->get_queried_object_id(), "_cmb_seo_title", true);
    $seo_description = get_post_meta($wp_query->get_queried_object_id(), "_cmb_seo_description", true);
    $seo_keywords = get_post_meta($wp_query->get_queried_object_id(), "_cmb_seo_keywords", true);
?>
<head>
	<title><?php bloginfo('name'); ?>  <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="author" content="qktheme">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- For SEO -->
	<?php if($seo_description!="") { ?>
	<meta name="description" content="<?php echo $seo_description; ?>">
	<?php }elseif($spring_options['seo_des']!=''){ ?>
	<meta name="description" content="<?php echo $spring_options['seo_des']; ?>">
	<?php } ?>
	<?php if($seo_keywords!="") { ?>
	<meta name="keywords" content="<?php echo $seo_keywords; ?>">
	<?php }elseif($spring_options['seo_key']!=''){ ?>
	<meta name="keywords" content="<?php echo $spring_options['seo_key']; ?>">
	<?php } ?>
	<!-- End SEO-->
	<?php if($spring_options['favicon']['url']!=''){ ?>
	<link rel="icon" href="<?php echo $spring_options['favicon']['url']; ?>" type="image/x-icon">
	<?php } ?>
	<?php if($spring_options['apple_icon']['url']!=''){ ?>
	<link rel="apple-touch-icon" href="<?php echo $spring_options['apple_icon']['url']; ?>" />
	<?php } ?>
	<?php if($spring_options['apple_icon_57']['url']!=''){ ?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $spring_options['apple_icon_57']['url']; ?>">
	<?php } ?>
	<?php if($spring_options['apple_icon_72']['url']!=''){ ?>
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $spring_options['apple_icon_72']['url']; ?>">
	<?php } ?>
	<?php if($spring_options['apple_icon_114']['url']!=''){ ?>
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $spring_options['apple_icon_114']['url']; ?>">
	<?php } ?>
<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="blank"></div>
		<!--Preloader
		<div id="preloader">
			<div id="status">
				<ul>
				  <li id='a'></li>
				  <li id='b'></li>
				  <li id='c'></li>
				  <li id='d'></li>
				  <li id='e'></li>
				  <li id='f'></li>
				  <li id='g'></li>
				  <li id='h'></li>
				  <li id='i'></li>
				</ul>
			</div>
		</div>-->
		<!--End Preloader-->
		
		<!-- borders 
		<div id="border-top"></div>
		<div id="border-right"></div>
		<div id="border-left"></div>
		<div id="border-bottom"></div>-->
		<!-- End borders -->
		<?php if(is_page('header-2')){ ?>
		<!-- Header navigation -->
		<header class="navbar">
			<div class="container">
				<div class="row ">
					<div id="main-nav" class="clearfix">
					  <div class="navbar-header">
							<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a id="logo" href="<?php echo home_url();?>" title="<?php bloginfo('name'); ?>">
								<?php if($spring_options['logo']['url']!=''){ ?>
									<img src="<?php echo $spring_options['logo']['url']; ?>" alt="<?php bloginfo('name'); ?>">
								<?php }else{ ?>
										<strong>Mandate Seven</strong>
									<?php } ?>
							
							</a>
							
					  </div>
					  <nav class="collapse navbar-collapse" role="navigation">
						<?php 
							if(is_page_template('template-home.php') or !has_nav_menu( 'primary' )){
								$defaults1= array(
										'theme_location'  => 'one_page',
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'nav navbar-nav whitetext',
										'menu_id'         => '',
										'echo'            => true,
										 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										 'walker'            => new wp_bootstrap_navwalker(),
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
									);
									if ( has_nav_menu( 'one_page' ) ) {
										wp_nav_menu( $defaults1 );
									}
							}else{

								$defaults1= array(
										'theme_location'  => 'primary',
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'nav navbar-nav whitetext',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										'walker'            => new wp_bootstrap_navwalker(),
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
									);
									if ( has_nav_menu( 'primary' ) ) {
										wp_nav_menu( $defaults1 );
									}
							}
							?>
						
						<div id="toggle-navbar"><i class="fa fa-angle-right"></i></div>
					  </nav>
				  </div>
				</div>
			</div>	
		</header>
		
		<?php }elseif($spring_options['header_type']=='header-2'){ ?>
		<!-- Navigation -->
		<nav>
			<!-- Mobile menu -->
			<div class="mobile-nav hidden-lg">
			<?php 
				if(is_page_template('template-home.php') or !has_nav_menu( 'primary' )){
					$defaults1= array(
							'theme_location'  => 'one_page',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'slimmenu',
							'menu_id'         => '',
							'echo'            => true,
							 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							 'walker'            => new wp_bootstrap_navwalker(),
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						if ( has_nav_menu( 'one_page' ) ) {
							wp_nav_menu( $defaults1 );
						}
				}else{

					$defaults1= array(
							'theme_location'  => 'primary',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'slimmenu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker(),
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( $defaults1 );
						}
				}
				?>
				
			</div>
			<!-- End Mobile menu -->
			<!-- desktop menu -->
			<div class="visible-lg">
				<section id="navi">
					<span id="navicontent"></span>
					<span class="btn" id="navih"></span>
				</section>
				<section id="navibar">
					<section id="navitext">
						<?php 
					if(is_page_template('template-home.php') or !has_nav_menu( 'primary' )){
					$defaults1= array(
							'theme_location'  => 'one_page',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							 'walker'            => new wp_bootstrap_navwalker(),
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						if ( has_nav_menu( 'one_page' ) ) {
							wp_nav_menu( $defaults1 );
						}
				}else{

					$defaults1= array(
							'theme_location'  => 'primary',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( $defaults1 );
						}
				}
				?>
					</section>
				</section>
			</div>
			<!-- End desktop menu -->
		</nav>
		<!-- End Navigation -->
		
		<?php }elseif($spring_options['header_type']=='header-3'){ ?>
		<!-- Navigation -->
		<nav>
			<!-- Mobile menu -->
			<div class="mobile-nav hidden-lg">
			<?php 
				if(is_page_template('template-home.php') or !has_nav_menu( 'primary' )){
					$defaults1= array(
							'theme_location'  => 'one_page',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'slimmenu',
							'menu_id'         => '',
							'echo'            => true,
							 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							 'walker'            => new wp_bootstrap_navwalker(),
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						if ( has_nav_menu( 'one_page' ) ) {
							wp_nav_menu( $defaults1 );
						}
				}else{

					$defaults1= array(
							'theme_location'  => 'primary',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'slimmenu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker(),
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( $defaults1 );
						}
				}
				?>
				
			</div>
			<!-- End Mobile menu -->
			<!-- desktop menu -->
			<div class="visible-lg">
				<section id="navi">
					<a id="hamburger-icon"><span></span></a>
					<span class="btn" id="navih"></span>
				</section>
				<section id="navibar">
					<section id="navitext">
						<?php 
					if(is_page_template('template-home.php') or !has_nav_menu( 'primary' )){
					$defaults1= array(
							'theme_location'  => 'one_page',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							 'walker'            => new wp_bootstrap_navwalker(),
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						if ( has_nav_menu( 'one_page' ) ) {
							wp_nav_menu( $defaults1 );
						}
				}else{

					$defaults1= array(
							'theme_location'  => 'primary',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( $defaults1 );
						}
				}
				?>
					</section>
				</section>
			</div>
			<!-- End desktop menu -->
		</nav>
		<!-- End Navigation -->
		<?php }else{ ?>
		<!-- Header navigation -->
		<header class="navbar">
			<div class="container">
				<div class="row ">
					<div id="main-nav" class="clearfix">
					  <div class="navbar-header">
							<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a id="logo" href="<?php echo home_url();?>" title="<?php bloginfo('name'); ?>">
								<?php if($spring_options['logo']['url']!=''){ ?>
									<img src="<?php echo $spring_options['logo']['url']; ?>" alt="<?php bloginfo('name'); ?>">
								<?php }else{ ?>
										<strong>Spring</strong>
									<?php } ?>
							
							</a>
							
					  </div>
					  <nav class="collapse navbar-collapse" role="navigation">
						<?php 
							if(is_page_template('template-home.php') or !has_nav_menu( 'primary' )){
								$defaults1= array(
										'theme_location'  => 'one_page',
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'nav navbar-nav whitetext',
										'menu_id'         => '',
										'echo'            => true,
										 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										 'walker'            => new wp_bootstrap_navwalker(),
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
									);
									if ( has_nav_menu( 'one_page' ) ) {
										wp_nav_menu( $defaults1 );
									}
							}else{

								$defaults1= array(
										'theme_location'  => 'primary',
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'nav navbar-nav whitetext',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										'walker'            => new wp_bootstrap_navwalker(),
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
									);
									if ( has_nav_menu( 'primary' ) ) {
										wp_nav_menu( $defaults1 );
									}
							}
							?>
						
						<div id="toggle-navbar"><i class="fa fa-angle-right"></i></div>
					  </nav>
				  </div>
				</div>
			</div>	
		</header>
		<!-- End Header navigation -->
	
		<?php } ?>
		<?php 
			$banner_type='';
			$banner_type= $spring_options['banner_type'];
		?>
		<!-- Home section -->
		<?php if(is_page('home-video')){ ?>
		<div id="home" class="home-wrapper">		
			<div class="bg-overlay"></div>
			<div class="player" data-video-id="<?php echo $spring_options['videoID']; ?>"></div>
		<?php }elseif(is_page('home-slider')){?>
			<div id="home" class="home-wrapper">
			<div class="bg-overlay"></div>
		<?php }elseif($banner_type=='video'){ ?>
		<div id="home" class="home-wrapper">		
			<div class="bg-overlay"></div>
			<div class="player" data-video-id="<?php echo $spring_options['videoID']; ?>"></div>
		<?php }elseif($banner_type=='slider'){ ?>
			<div id="home" class="home-wrapper">
			<div class="bg-overlay"></div>
		<?php }elseif($banner_type=='videoURL'){ ?>
			<div id="home" class="home-wrapper bg">
			<video src="<?php echo $spring_options["videoURL"]; ?>" autoplay="autoplay" loop></video>
			<div class="bg-overlay"></div>
		<?php }else{ ?>
		<div id="home" class="home-wrapper bg">
			<div class="bg-overlay"></div>
		<?php } ?>
			<div class="wrapper ">
				<div class="inner">
					<div class="lgbg"></div>
					<div class="rgbg"></div>
					<div class="home-logo"></div>
					<div class="inner-content">
						<div class="home-text">
							<!--<h1><span class="adject"><?php 
								if($spring_options!=null and $spring_options['banner_title']!=''){
									echo $spring_options['banner_title'];
								}else{
									echo "spring|Modern|Parallax";
								}
							?></span></h1>-->
						</div>
					</div>
				</div>
			</div>
			<!--<div class="links">
				<ul class="clearfix pull-right">
					<?php if($spring_options!=null and $spring_options['facebook']!='' ){ ?>
						<li><a class="facebook" href="<?php echo $spring_options['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } ?>
					<?php if($spring_options!=null and $spring_options['twitter']!='' ){ ?>
					<li><a class="twitter" href="<?php echo $spring_options['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
					<?php } ?>
					
					<?php if($spring_options!=null and $spring_options['google']!='' ){ ?>
					<li><a class="google" href="<?php echo $spring_options['google']; ?>"><i class="fa fa-google-plus"></i></a></li>
					<?php } ?>
					<?php if($spring_options!=null and $spring_options['linkedin']!='' ){ ?>
					<li><a class="linkedin" href="<?php echo $spring_options['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } ?>
				</ul>
			</div>-->
		</div>
		<!-- End Home section -->
		
		<!-- section wrapper -->
		<div class="inner-wrapper">