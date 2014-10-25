<?php

$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
global $spring_options;
$main_color = $spring_options['main-color'];

?>
<?php if($spring_options['on_footer']==1){ ?>
#footer{
	position: fixed;
	z-index: -999;
}
.inner-wrapper {
margin-bottom: 410px;
}
<?php } ?>
button:hover, button:active, #navi, .hireus-section i,  .form-btn:hover, .form-btn:active, #submit:hover, .team-wrap .team-inner:hover .team, .cbp-l-filters-button .cbp-filter-item, .cbp-l-filters-button .cbp-filter-counter, .open-contact i, .footer-top{
	background-color: <?php echo $main_color; ?>;
}
button:hover, .theme-btn:hover, .theme-btn:focus, .btncolor:hover, .btncolor:focus,
.links ul li, .hireus-section a,  #contact .section-header h2 ,#contact .section-header p{color: #fff;}
 .open-contact, .theme-btn:hover, .theme-btn:focus, .pagination .current{
	border-color: <?php echo $main_color; ?>;
}
.btncolor:hover, .btncolor:focus, .links ul li a, header.navbar .navbar-nav li a:hover,header.navbar .navbar-nav li a:active,header.navbar .navbar-nav li a:focus, .post-entry .note-meta .category, .post-entry .note-meta .category a, #submit:hover, .comment-reply-link:hover, #contact a:hover, .theme-btn:hover, .theme-btn:focus, .team-social a:hover, .grid article i, .home-text h1:hover, #navitext li a:hover{
	color: <?php echo $main_color; ?>;
}
.gal-inner .overlay, .parallax h1, .lasthover > a, #nprogress .bar, .grid article:hover span{
	background: <?php echo $main_color; ?>;
} 
.lasthover:hover a{
	background: <?php echo $main_color; ?> !important;
	border-color: <?php echo $main_color; ?> !important;
}
.cbp-l-loadMore-button .cbp-l-loadMore-button-link:hover{
	color: <?php echo $main_color; ?> !important;
	border-color: <?php echo $main_color; ?> !important;
}
.links ul li{
	border-bottom-color: <?php echo $main_color; ?> !important;
}
<?php
     $rgba = spring_hex2rgb($spring_options['main-color']);
?>

.cbp-caption-zoom .cbp-caption-activeWrap{
	background-color: rgba(<?php echo $rgba[0]; ?>, <?php echo $rgba[1]; ?>, <?php echo $rgba[2]; ?>,0.9) !important;
}
<?php if($spring_options['logo']['url']!='') { ?>
.hider{
	background-image: url(<?php echo $spring_options['logo_retina']['url']; ?>);<!--added by nomli--><!--Altered by nomli orignal variable is "logo"-->
}
<?php } ?>
<?php if($spring_options['banner_bg']['url']!='') { ?>
#home.bg{
	background-image: url(<?php echo $spring_options['banner_bg']['url']; ?>);
}
<?php } ?>
<?php echo $spring_options['custom-css'];?>