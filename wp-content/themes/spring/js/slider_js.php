<?php
$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header('Content-type: application/x-javascript');
global $spring_options;
$slides = $spring_options['image_slider'];
$slides = explode(",", $slides);
 
?>
<?php if(count($slides)>0 and $slides!=''){ ?>
//slider initialization
jQuery(function($){
"use strict";

	$.supersized({
		// Functionality
		slide_interval          :   4000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	1200,		// Speed of transition							   
		keyboard_nav            :   0,
		// Components							
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		
		slides					:[
										<?php foreach($slides as $slide) {?>
										<?php
											$img = wp_get_attachment_image_src($slide,'full');
											$img = $img[0];
										?>
										{image:"<?php echo $img; ?>"},
										<?php } ?>
										
								]
	});
});

<?php } ?>