<?php
require_once dirname( __FILE__ ) . '/framework/Custom-Metaboxes/metabox-functions.php';
require_once dirname( __FILE__ ) . '/framework/BFI_Thumb.php';
require_once dirname( __FILE__ ) . '/framework/post_type.php';
require_once dirname( __FILE__ ) . '/framework/wp_bootstrap_navwalker.php';
require_once dirname( __FILE__ ) . '/vc_shortcodes.php';
require_once( dirname( __FILE__ ) . '/framework/theme-config.php' );
$textdomain = 'spring';
function spring_setup() {
	global $textdomain;
	load_theme_textdomain( 'birva', get_template_directory() . '/languages' );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Subpage Menu', 'spring' ),
        'one_page'   => __( 'One Page Menu', 'spring' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	/*add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );*/
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'spring_setup' );


if ( ! isset( $content_width ) ) {
	$content_width = 875;
}

function spring_widgets_init() {
	global $textdomain;
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'spring' ),
		'id'            => 'footer-1',
		'description'   => __( 'Main sidebar that appears on footer 1.', 'spring' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title"><span>',
		'after_title'   => '</span></h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'spring' ),
		'id'            => 'footer-2',
		'description'   => __( 'Main sidebar that appears on footer 2.', 'spring' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title"><span>',
		'after_title'   => '</span></h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'spring' ),
		'id'            => 'footer-3',
		'description'   => __( 'Main sidebar that appears on footer 3.', 'spring' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title"><span>',
		'after_title'   => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'spring_widgets_init' );

function spring_scripts() {

	// Load our main stylesheet.
	global $spring_options;
	//Fonts
	$protocol = is_ssl() ? 'https' : 'http';
   
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css');
	wp_enqueue_style( 'icon-works', get_template_directory_uri().'/fonts/icon-works/icon-works.css');
	wp_enqueue_style( 'cubeportfolio', get_template_directory_uri().'/css/cubeportfolio.css');
	wp_enqueue_style( 'carousel', get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_style( 'venobox', get_template_directory_uri().'/css/venobox/venobox.css');
	wp_enqueue_style( 'slimmenu', get_template_directory_uri().'/css/slimmenu.css');
	
	wp_enqueue_style( 'theme-default', get_template_directory_uri().'/css/theme_default.css');
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), '2014-08-25' );
	wp_enqueue_style( 'color', get_template_directory_uri().'/css/color.php');
	
	
	
	wp_enqueue_script("jquery");
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	
	wp_enqueue_script("easing", get_template_directory_uri()."/js/jquery.easing.1.3.js",array(),false,true);
	wp_enqueue_script("nprogress", get_template_directory_uri()."/js/nprogress.js",array(),false,true);
	wp_enqueue_script("NProgress-start", get_template_directory_uri()."/js/NProgress-start.js",array(),false,true);
	wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
	wp_enqueue_script("slimmenu", get_template_directory_uri()."/js/jquery.slimmenu.min.js",array(),false,true);
	wp_enqueue_script("mediaCheck", get_template_directory_uri()."/js/mediaCheck.js",array(),false,true);
	wp_enqueue_script("adjector", get_template_directory_uri()."/js/adjector.js",array(),false,true);
	wp_enqueue_script("parallax", get_template_directory_uri()."/js/jquery.parallax-1.1.3.js",array(),false,true);
	wp_enqueue_script("carousel", get_template_directory_uri()."/js/owl.carousel.min.js",array(),false,true);
	wp_enqueue_script("cubeportfolio", get_template_directory_uri()."/js/jquery.cubeportfolio.js",array(),false,true);
	wp_enqueue_script("portfolio-main", get_template_directory_uri()."/js/portfolio-main.js",array(),false,true);
	wp_enqueue_script("venobox", get_template_directory_uri()."/js/venobox.min.js",array(),false,true);
	wp_enqueue_script("waypoints", get_template_directory_uri()."/js/waypoints.min.js",array(),false,true);
	wp_enqueue_script("counterup", get_template_directory_uri()."/js/jquery.counterup.min.js",array(),false,true);
	wp_enqueue_script("placeholder", get_template_directory_uri()."/js/jquery.placeholder.js",array(),false,true);
	wp_enqueue_script("TweenMax", get_template_directory_uri()."/js/TweenMax.min.js",array(),false,true);
	wp_enqueue_script("ScrollToPlugin", get_template_directory_uri()."/js/ScrollToPlugin.min.js",array(),false,true);
	wp_enqueue_script("content-scroll", get_template_directory_uri()."/js/content-scroll.js",array(),false,true);
	wp_enqueue_script("hamburger-icon", get_template_directory_uri()."/js/hamburger-icon.js",array(),false,true);
	$banner_type='';
	$banner_type= $spring_options['banner_type'];
	if($banner_type=='video' or is_page('home-video')){ 
	//Video JS
	wp_enqueue_script("okvideo", get_template_directory_uri()."/js/okvideo.js",array(),false,true);
	wp_enqueue_script("initplayer", get_template_directory_uri()."/js/initplayer.js",array(),false,true);
	}
	if($banner_type=='slider' or is_page('home-slider')){
		wp_enqueue_style( 'supersized', get_template_directory_uri().'/css/supersized.css');
		//Video JS
		wp_enqueue_script("supersized", get_template_directory_uri()."/js/supersized.3.2.7.min.js",array(),false,true);
		wp_enqueue_script("supersized.shutter", get_template_directory_uri()."/js/supersized.shutter.min.js",array(),false,true);
		wp_enqueue_script("slider_js", get_template_directory_uri()."/js/slider_js.php",array(),false,true);
	}
	if(is_page('header-2') or $spring_options['header_type']!='header-2'){
		wp_enqueue_script("show", get_template_directory_uri()."/js/show.php",array(),false,true);
	}
	wp_enqueue_script("theme-script", get_template_directory_uri()."/js/script.js",array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'spring_scripts' );

//For IE
function spring_script_ie() {
        echo '
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		';
        
    }
add_action( 'wp_head', 'spring_script_ie' );

//Get thumbnail url
    
function spring_thumbnail_url($size){
    global $post;
    //$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()),$size );
    if($size==''){
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
         return $url;
    }else{
        $url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $size);
         return $url[0];
    }
   
}
//pagination
function spring_pagination($prev = 'Prev', $next = 'Next', $pages='') {
    global $wp_query, $wp_rewrite, $textdomain;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
		'base' 			=> str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
		'format' 		=> '',
		'current' 		=> max( 1, get_query_var('paged') ),
		'total' 		=> $pages,
		'prev_text' => __($prev,$textdomain),
        'next_text' => __($next,$textdomain),
		'type'			=> 'list',
		'end_size'		=> 3,
		'mid_size'		=> 3
);
    $return =  paginate_links( $pagination );
	echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}

//Custom Excerpt Function
function spring_excerpt($limit = 30) {
 
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//Custom comment List:
function spring_theme_comment($comment, $args, $depth) {
     $GLOBALS['comment'] = $comment; ?>
	 
	 <li <?php comment_class('clearfix'); ?> id="comment-<?php comment_ID() ?>">
		<div class="comment-box">
			<?php echo get_avatar($comment,$size='100',$default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=100' ); ?>
			<h2 class="author "><?php printf(__('%s','white'), get_comment_author_link()) ?></h2>
			<span class="time"><?php printf(__('%1$s at %2$s','white'), get_comment_date(), get_comment_time()) ?></span>
			<div class="comment-content">
				<?php comment_text() ?>
				<?php if ($comment->comment_approved == '0') : ?>
					 <em><?php _e('Your comment is awaiting moderation.','ipressa') ?></em>
					 <br />
				  <?php endif; ?>
			</div>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>

<?php

}


function spring_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}

if(function_exists('vc_add_param')){

	vc_add_param('vc_row',array(
				  "type" => "textfield",
				  "heading" => __('Section ID', 'wpb'),
				  "param_name" => "el_id",
				  "value" => "",
				  "description" => __("Set ID section", "wpb"),   
    ));
	
	vc_add_param('vc_row',array(
			  "type" => "dropdown",
			  "heading" => __('Fullwidth', 'wpb'),
			  "param_name" => "fullwidth",
			  "value" => array(   
								__('No', 'wpb') => 'no',  
								__('Yes', 'wpb') => 'yes',                                                                                
							  ),
			  "description" => __("Select Fullwidth or not", "wpb"),      
			) 
    );
    
	
}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.0
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'spring_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function spring_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
             // This is an example of how to include a plugin from a private repo in your theme.

		array(            
            'name'               => 'WPBakery Visual Composer', // The plugin name.
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
		array(            
            'name'               => 'Twitter Widget', // The plugin name.
            'slug'               => 'tweets', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/framework/plugins/tweets.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
            'name'      => 'Redux Framework',
            'slug'      => 'redux-framework',
            'required'  => true,
        ),
		array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
		array(
            'name'      => 'Widget Importer & Exporter',
            'slug'      => 'widget-importer-exporter',
            'required'  => true,
        ),
        array(
            'name'      => 'WordPress Importer',
            'slug'      => 'wordpress-importer',
            'required'  => true,
        ),
		
		
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'tgmpa' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'tgmpa' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'tgmpa' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'tgmpa' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}
?>