<?php get_header(); ?>
			
			<?php while(have_posts()) : the_post(); ?>
			<!-- Blog Section -->
			<div id="blog">
				<div class="container">
				
					<div class="col-md-8 col-md-offset-2">
						<?php the_post_thumbnail('', array('class'=>'img-responsive')); ?>
						<header class="section-header">
							<div class="post-entry blog-single-page">
								<span class="color-overlay"></span>
								<p class="note-meta"><span class="date-posted"><?php the_time('F jS Y'); ?> / <span class="category"><?php the_category(', '); ?></span></span></p>
								<h2 class="parallax-title"><span><?php the_title(); ?></span></h2>
								<cite class="note-author"><?php _e('Posted by', 'spring'); ?> <?php the_author_posts_link(); ?></cite>
							</div>
						</header>
					</div>
					<div class="col-md-8 col-md-offset-2 blog-content">
					<div id="post-<?php the_ID(); ?>" <?php post_class('post-content'); ?>>
						<?php the_content(); ?>
						<br/>
						<?php

							$defaults = array(
								'before'           => '<div id="page-links">',
								'after'            => '</div>',
								'link_before'      => '<span>',
								'link_after'       => '</span>',
								'next_or_number'   => 'number',
								'separator'        => ' ',
								'nextpagelink'     => __( 'Next page','mercury' ),
								'previouspagelink' => __( 'Previous page','mercury' ),
								'pagelink'         => '%',
								'echo'             => 1
							);
						 ?>
						<?php wp_link_pages($defaults); ?>
						<hr/>
					</div>
					</div>
					
				
				</div>
				
			</div>
			<?php global $post; ?>
			<?php if('open' == $post->comment_status){ ?>
				<?php comments_template(); ?>
			<?php } ?>
			<?php endwhile; ?>
			<!-- End Blog Section -->
			
			<!-- End Contact Section -->		
<?php get_footer(); ?>
