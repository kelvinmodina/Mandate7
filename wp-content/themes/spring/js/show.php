<?php
$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header('Content-type: application/x-javascript');
global $spring_options;

?>
(function($){
	jQuery(document).ready(function() {

			
	/*=================================================================
		show-hide navigation
	===================================================================*/ 
		var windowOffsetHeight = windowHeight - 1;
		if (!jQuery('header.navbar').hasClass('show')) {
			jQuery(window).scroll(function() {
				if ( jQuery(this).scrollTop() > windowOffsetHeight - 230 ) {
					jQuery('header.navbar').addClass('show');
				}
				else {
					jQuery('header.navbar').removeClass('show');
				}
			});
		};
		
	});
})(jQuery);