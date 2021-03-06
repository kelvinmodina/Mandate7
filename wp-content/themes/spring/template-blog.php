<?php 
/*
*Template Name: Blog List
*/
?>
<?php get_header(); ?>
			<?php 
				global $wp_query, $spring_options; 
			?>
			<!-- Blog Section -->
			<div id="blog">
				<div class="container">
					<div class="col-md-8 col-md-offset-2">
						<header class="section-header">							
							<h2 class="parallax-title"><span>We write creative thought <br>Since 1995</span></h2>
                            <p class="lead">We have created a awesome theme that will help designers, developers and companies create websites for their startups quickly and easily.</p>
							
						</header>
					</div>
				</div>	
			</div>
			<div class="post-list">
				<?php 
					if(is_front_page()) {
						$paged = (get_query_var('page')) ? get_query_var('page') : 1;
					} else {
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					}
					$args = array(
						'post_type' => 'post',
						'paged' => $paged,
					);
					$query = new WP_Query($args);
				?>
				<?php if($query->have_posts()) : ?>
				<?php $i=1; while($query->have_posts()) : $query->the_post(); ?>
				<div class="post-entry">
					<span class="color-overlay"></span>
					<p class="note-meta"><span class="date-posted"><?php the_time('F jS Y'); ?> / <span class="category"><?php the_category(', '); ?></span></span></p>
					<h4><a  href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
					<cite class="note-author"><?php _e('Posted by', 'spring'); ?> <?php the_author_posts_link(); ?></cite>
				</div>
				<?php $i++; endwhile; ?>
				<?php else: ?>
					<h1><?php _e('Nothing Found Here!','spring'); ?></h1>
				<?php endif; ?>
				<div class="clearfix aligncenter">
					<?php spring_pagination($prev = '&laquo;', $next = '&raquo;', $pages=$query->max_num_pages); ?>
				</div>
								
			</div>
			<!-- End Blog Section -->
					
<?php get_footer(); ?>