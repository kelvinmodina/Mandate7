<?php $t=0; $i = 1; if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php
	$item_classes = '';
	$item_skill = '';
	$item_cats = get_the_terms(get_the_ID(), 'portfolio_category');
	foreach((array)$item_cats as $item_cat){
		if(count($item_cat)>0){
			$item_classes .= $item_cat->slug . ' ';
			$item_skill .= $item_cat->name . ' | ';
		}
	}
?>
<?php if($i%5==1){ ?>
<?php $t = $t+1; ?>
<div class="cbp-loadMore-block<?php echo $t; ?>">
<?php }?>
<?php
	$img = spring_thumbnail_url('');
?>
<li class="cbp-item <?php echo $item_classes; ?>">
	<div class="cbp-caption">
		<div class="cbp-caption-defaultWrap">
			<img src="<?php echo bfi_thumb($img, array('width'=>500, 'height'=>570)); ?>" alt="<?php the_title(); ?>">
		</div>
		<div class="cbp-caption-activeWrap">
			<div class="cbp-l-caption-alignCenter">
				<div class="cbp-l-caption-body">
					<a href="<?php the_permalink(); ?>" class="cbp-singlePage cbp-l-caption-buttonLeft"><i class="fa fa-info"></i></a>
					<?php if(get_post_meta(get_the_ID(), '_cmb_portfolio_type', true)=='video'){ ?>
						<a href="<?php echo get_post_meta(get_the_ID(), '_cmb_intro_video', true); ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="<?php the_title(); ?>"><i class="fa fa-video-camera"></i></a>
					<?php }else{ ?>
					<a href="<?php echo $img; ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="<?php the_title(); ?>"><i class="fa fa-search-plus"></i></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>									
</li>    
<?php global $wp_query; ?>
<?php if($i%5==0 or $i == $wp_query->post_count){ ?>
</div>
<?php } ?>
<?php $i++; endwhile; endif; ?>

