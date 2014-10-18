<?php
global  $textdomain;
// Creating the widget 
class recent_post_widget extends WP_Widget {

function __construct() {
	global $textdomain;
parent::__construct(
// Base ID of your widget
'recent_post_widget', 

// Widget name will appear in UI
__('QK Recent Posts', $textdomain), 

// Widget description
array( 'description' => __( 'Listing Recent Posts', $textdomain ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
?>

<ul class="recent-post">
	<?php 
		//echo $instance['count'].'asd';
		$arr = array('post_type' => 'post', 'posts_per_page' => $instance['count']);
		$query = new WP_Query($arr);
		while($query->have_posts()) : $query->the_post();
	?>
		<li>
			<div class="thumb-img">
				<?php 
					if(has_post_thumbnail()){ ?>
					<?php $image = bfi_thumb( zine_thumbnail_url(''), array( 'width' => 60, 'height' => 45 ) ); ?>
					<img alt="<?php the_title(); ?>" src="<?php echo $image; ?>">
				<?php
					}else{
				?>
				<img alt="" src="<?php echo get_template_directory_uri(); ?>/images/thumb_img.jpg">
				<?php } ?>
			</div>
			<div class="post-text">
				<?php echo zine_excerpt($limit = 10); ?> <span><?php the_time('d F Y'); ?></span>
			</div>
		</li>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
</ul>


<?php

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
global $textdomain;
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'white' );
//$count = 4;
}
if ( isset( $instance[ 'count' ] ) ) {
$count = $instance[ 'count' ];
}
else {
$count = 2;
//$count = 4;
}

// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', $textdomain); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e( 'Number of posts:', $textdomain); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" type="text" value="<?php echo esc_attr( $count ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget2() {
	register_widget( 'recent_post_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget2' );
?>