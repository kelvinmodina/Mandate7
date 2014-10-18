<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<div id="contact">
<div class="container">
	<div class="col-md-8 col-md-offset-2">
	<?php  global $textdomain; ?>
	<div class="comment-section">
		<div class="section-header">
		
			<h2 class="parallax-title"><span><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span></h2>
		</div>
			<ul class="comment-list">
				<?php wp_list_comments('callback=spring_theme_comment'); ?>
			</ul>
			<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				?>
				<footer class="navigation comment-navigation" role="navigation">
					<!--<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', $textdomain ); ?></h1>-->
					<div class="previous"><?php previous_comments_link( __( '&larr; Older Comments', $textdomain ) ); ?></div>
					<div class="next right"><?php next_comments_link( __( 'Newer Comments &rarr;', $textdomain ) ); ?></div>
				</footer><!-- .comment-navigation -->
			<?php endif; // Check for comment navigation ?>

			<?php if ( ! comments_open() && get_comments_number() ) : ?>
				<p class="no-comments"><?php _e( 'Comments are closed.' , $textdomain ); ?></p>
			<?php endif; ?>
		
	</div>
	
<?php

$aria_req = ( $req ? " aria-required='true'" : '' );
$comment_args = array(
	'title_reply'=> 'Leave a Comment',
	'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '
		<div class="row">
			<div class="col-md-6">
				<input type="text" name="author" class="txtform" placeholder="Name*" id="name" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' />
			</div>
			
		',
		'email' => '
				<div class="col-md-6">
				<input id="mail" name="email" class="txtform" placeholder="Email*" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' />
				</div>
			</div>
		',
		'url' => '
		<div class="row">
			<div class="col-md-12">
				<input id="website" name="url" class="txtform" placeholder="Website" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '"  />
			</div>
		</div>
		
		'
	)),
	'comment_field' => '<div class="row"><div class="col-md-12"><textarea cols="45" rows="7" class="txtform" id="comment" placeholder="Your Message*"  name="comment"'.$aria_req.'></textarea></div></div>',
	'label_submit' => 'Send Comment',
	'comment_notes_after' => '',
);
?>
<div class="leave-comment-area">
	<div class="">
		<?php global $post; ?>
		<?php if('open' == $post->comment_status){ ?>
			<?php comment_form($comment_args); ?>
		<?php } ?>					
	</div>
</div>
</div>
</div>
</div>