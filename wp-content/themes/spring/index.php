<?php get_header(); ?>
			<?php 
				global $spring_options;
				global $wp_query; 
			?>
			<!-- Company Description Section -->
			<div id="company-desc">
				<div class="container">
					 <h2>A boutique consulting firm since 2014</h2>
					 <p>Mandate Seven Advisory is a boutique consulting firm that caters to institutional <br/>investors in the Gulf region. Mandate Seven Advisory is  a joint venture between<br/> its founder and the Kuwait Small Projects Company, founded in 2014.</p>
				</div>
			</div>
			<!-- End Company Description Section -->
			
			<!-- ABOUT Section -->
			<div id="about">
				<div class="container">
					<?php
						query_posts('post_status=publish&post_type=qk_service');
						while ( have_posts() ) : the_post();
							the_title("<h2>","</h2>");
							the_content();
						endwhile;
						wp_reset_query();
					?> 
				</div>
			</div>
			<!-- End ABOUT Section -->
			
			<!-- Services Section -->
			<div id="services">
				<div class="container">
					<div class="service-quoute">We are run by <strong>seasoned</strong> individuals with <strong>local</strong> and <strong>international</strong> experience. </div>
					<?php
						$qarg = array(
							'post_status' => 'publish',
							'post_type' => 'nk_service',
						);
						query_posts($qarg);
						while ( have_posts() ) : the_post();
							the_title("<h2>","</h2>");
							the_content();
						endwhile;
						wp_reset_query();
					?> 
					<div class="service-acco">
						<div id="accordion" class="panel-group clearfix">
							<div class="panel panel-default">
								<a href="#collapse_1" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
									<h4>Manager Selection (Equities, Fixed Income, Hedge Funds, and Real Estate)<i class="indicator fa fa-plus pull-right"></i></h4>						
								</a>
								<div class="panel-collapse collapse" id="collapse_1">
									<div class="panel-body">
										<div class="service-icon">
											<i class="fa fa-share-alt"></i>
										</div>
										<div class="service-text-block">
											<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica</p>
										</div>
										<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div>								
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a href="#collapse_2" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
									<h4>Asset Allocation<i class="indicator fa fa-plus pull-right"></i></h4>						
								</a>
								<div class="panel-collapse collapse" id="collapse_2">
									<div class="panel-body">
										<div class="service-icon">
											<i class="fa fa-lightbulb-o"></i>
										</div>
										<div class="service-text-block">
											<p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch. Nihil anim keffiyeh helvetica</p>
										</div>
										<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div>								
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a href="#collapse_3" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
									<h4>Portfolio and Risk Analysis<i class="indicator fa fa-plus pull-right"></i></h4>						
								</a>
								<div class="panel-collapse collapse" id="collapse_3">
									<div class="panel-body">
										<div class="service-icon">
											<i class="fa fa-lightbulb-o"></i>
										</div>
										<div class="service-text-block">
											<p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch. Nihil anim keffiyeh helvetica</p>
										</div>
										<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div>								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Services Section -->
			
			<!-- Team Section -->
			<div id="team">
				<div class="container section-header">
					<h2>Meet our team</h2>
					<p>The advisory is run by seasoned individuals with local and international experience and coming from various financial institutions in the region.</p>
				</div>
				<div class="container-fluid">
					<div class="container team-wrap">
						<div class="col-sm-3">
							<div class="team-inner">
								<div class="team">
									<h4>Jeams carry</h4>
									<h5>Designer / Illustrator </h5>										
								</div>
								<img alt="Jeams carry" src="<?php echo get_template_directory_uri();?>/img/team1.jpg">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="team-inner">
								<img alt="Jeams carry" src="<?php echo get_template_directory_uri();?>/img/team2.jpg">
								<div class="team">
									<h4>Jeams carry</h4>
									<h5>Designer / Illustrator </h5>										
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="team-inner">
								<div class="team">
									<h4>Jeams carry</h4>
									<h5>Designer / Illustrator </h5>										
								</div>
								<img alt="Jeams carry" src="<?php echo get_template_directory_uri();?>/img/team3.jpg">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="team-inner">
								<img alt="Jeams carry" src="<?php echo get_template_directory_uri();?>/img/team4.jpg">
								<div class="team">
									<h4>Jeams carry</h4>
									<h5>Designer / Illustrator </h5>										
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- End Team Section -->
			
			<!-- Contact Section -->
			<div class="border"></div>
			<div id="contact">
				<div class="container">
					<div class="gmap col-sm-6">
						<div class="cpreloader"><i class="fa fa-spinner fa-spin"></i></div>
						<div class="embed-responsive">
							<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13907.42458420034!2d47.989586!3d29.374501!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9c60ceae19750d0!2sMandate+Seven+Advisory!5e0!3m2!1sen!2sph!4v1414415934976" width="100%" height="400" frameborder="0" style="border:0"></iframe>	
						</div>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
					<!--<div class="col-sm-3 address-col">
					    <address>
							<strong>office address.</strong><br/>
							Mazaya Tower 2, 10th Floor<br/>
							Khalid Bin Al-Waleed Street.,<br/>
							Sharq. Kuwait City
						</address>

						<address>
						  <strong>contact details</strong><br/>
						  <abbr title="Phone">Tel:</abbr> +965 22087035<br/>
						  <a href="mailto:info@mandate7.com">info@mandate7.com</a><br/>
						  <a href="http://www.mandate7.com">www.mandate7.com</a>
						</address>
					</div>-->
					<div class="links">
						<ul class="clearfix pull-right">
							<?php if($spring_options!=null and $spring_options['facebook']!='' ){ ?>
								<li><a class="facebook" href="<?php echo $spring_options['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
							<?php } ?>
							<?php if($spring_options!=null and $spring_options['twitter']!='' ){ ?>
							<li><a class="twitter" href="<?php echo $spring_options['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
							<?php } ?>
							
							<?php if($spring_options!=null and $spring_options['google']!='' ){ ?>
							<li><a class="google" href="<?php echo $spring_options['google']; ?>"><i class="fa fa-google-plus"></i></a></li>
							<?php } ?>
							<?php if($spring_options!=null and $spring_options['linkedin']!='' ){ ?>
							<!--<li><a class="linkedin" href="<?php echo $spring_options['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
							<?php } ?>-->
						</ul>
					</div>
				</div>
			</div>
			<!-- End Contact Section -->
					
<?php get_footer(); ?>