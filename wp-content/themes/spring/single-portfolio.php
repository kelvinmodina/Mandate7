<?php while(have_posts()) : the_post(); ?>
<div class="cbp-l-project-title"><?php the_title(); ?></div>
	<div class="cbp-l-project-subtitle"><?php echo get_post_meta(get_the_ID(), '_cmb_p_subtitle', true); ?></div>
		<div class="cbp-slider">
			<?php 
				$gallery = get_post_meta(get_the_ID(), '_cmb_p_slider', true);
			?>
			<?php if(count($gallery)>0 and $gallery!=''){ ?>
			<ul class="cbp-slider-wrap">
				<?php foreach($gallery as $img) {?>
				<li class="cbp-slider-item">
					<img src="<?php echo $img; ?>" alt="<?php the_title(); ?>" class="cbp-l-project-img">
				</li>
				<?php } ?>
			</ul>
			<?php } ?>
		</div>
		<div class="cbp-l-project-container">
			<div class="cbp-l-project-desc">
				<div class="cbp-l-project-desc-title"><span><?php _e('Project Description', 'spring'); ?></span></div>
					<div class="cbp-l-project-desc-text">
						<?php the_content(); ?>
					</div>
			</div>
			<div class="cbp-l-project-details">
				<div class="cbp-l-project-details-title"><span><?php _e('Project Details', 'spring'); ?></span></div>
				<ul class="cbp-l-project-details-list">
					<?php if(get_post_meta(get_the_ID(), '_cmb_p_client', true) !=''){?>
					<li><strong><?php _e('Client', 'spring'); ?></strong> <?php echo get_post_meta(get_the_ID(), '_cmb_p_client', true); ?></li>
					<?php } ?>
					<?php if(get_post_meta(get_the_ID(), '_cmb_p_date', true) !=''){?>
					<li><strong><?php _e('Date', 'spring'); ?></strong><?php echo get_post_meta(get_the_ID(), '_cmb_p_date', true); ?></li>
					<?php } ?>
					<li><strong><?php _e('Categories', 'spring'); ?> </strong> <?php $skill = get_the_term_list( get_the_ID(), 'portfolio_category', '', ' , ', '' ); ?> <?php echo $skill; ?></li>
				</ul>
				<?php if(get_post_meta(get_the_ID(), '_cmb_p_link', true) !=''){?>
				<a href="<?php echo get_post_meta(get_the_ID(), '_cmb_p_link', true); ?>" target="_blank" class="cbp-l-project-details-visit"><?php _e('visit the site', 'spring'); ?></a>
				<?php } ?>
			</div>
		</div>
<br>
<br>
<br>
<?php endwhile; ?>