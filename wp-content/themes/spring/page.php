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
								
								<h2 class="parallax-title"><span><?php the_title(); ?></span></h2>
								
							</div>
						</header>
					</div>
					<div class="col-md-8 col-md-offset-2 blog-content page-content">
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
			
			<?php endwhile; ?>
			<!-- End Blog Section -->
			
			<!-- End Contact Section -->		
<?php get_footer(); ?>
