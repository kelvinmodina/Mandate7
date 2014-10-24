		</div>
		<!-- End section wrapper -->
		<?php global $spring_options; ?>
		<!-- Footer section -->
		<!--<footer id="footer">
			<div class="footer-top clearfix">
				<div class="container">
					<div class="row">-->
						<!--<div class="col-lg-4 col-sm-4 footer-block">										
							<?php if($spring_options['footer-logo']['url']!=''){ ?>
								<img src="<?php echo $spring_options['footer-logo']['url']; ?>" alt="<?php bloginfo('name'); ?>">
							<?php } ?>
							<?php 
								if(is_active_sidebar('footer-1')){
									dynamic_sidebar('footer-1');
								}
							
							?>
						</div>
						<div class="col-lg-4 col-sm-4 footer-block">			
							<i class="f-contact-icon fa fa-flag"></i>
							<?php 
								if(is_active_sidebar('footer-2')){
									dynamic_sidebar('footer-2');
								}
							
							?>
							
							
						</div>
						<div class="col-lg-4 col-sm-4 footer-block">
							<i class="f-contact-icon fa fa-twitter"></i>
							<?php 
								if(is_active_sidebar('footer-3')){
									dynamic_sidebar('footer-3');
								}
							
							?>
						</div>-->
					<!--</div>
				</div>
			</div>	
			<div class="footer-bottom clearfix">
				<div class="topbutton">
					<a href="#home"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/arrow_up.png"></a>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4">
							<p class="copyright"><?php echo $spring_options['footer-text']; ?></p>
						</div>
						<div class="col-lg-4 col-md-8 text-center txtright">
							<p class="love">Made with <i class="fa fa-heart"></i> </p>
						</div>
						
					</div>
				</div>
			</div>
		</footer>-->
		<!-- End Footer -->

		<?php wp_footer(); ?>		
	</body>
</html>
