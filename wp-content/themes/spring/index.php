<?php get_header(); ?>
			<?php 
				global $spring_options;
				global $wp_query; 
			?>
			<!-- Company Description Section -->
			<div id="company-desc">
				<div class="container">
				<div class="vc_col-sm-8 wpb_column vc_column_container">
					  <header class="section-header">
					  	<h2 class="parallax-title"><span>A boutique consulting firm <br> since 2014</span></h2>
					  </header>
					  <p>Mandate Seven Advisory ultimately seeks to add value and deliver results to financial institutions with services that are relevant and applicable to a market environment<br> that is very unique in nature. </p>
					  </div>
				</div>
			</div>
			<!-- End Company Description Section -->
			<!-- ABOUT Section -->
			<div id="about">
				<div class="container vc_col-sm-8">
					<?php
						query_posts('post_status=publish&post_type=qk_service');
						while ( have_posts() ) : the_post();

						the_title("<header class='section-header'><h2 class='parallax-title'><span>","</span></h2></header>");
						the_content();
						endwhile;
						wp_reset_query();
					?> 
				</div>
			</div>
			<!-- End ABOUT Section -->
			
			<!-- Services Section -->
			<div id="services">
				<div class="container ">
					<?php
						$qarg = array(
							'post_status' => 'publish',
							'post_type' => 'nk_service',
						);
						query_posts($qarg);
						while ( have_posts() ) : the_post();
							the_title("<header class='section-header'><h2 class='parallax-title '><span>","</span></h2></header>");
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
											<i class="fa fa-users"></i>
										</div>
										<div class="service-text-block">
											<p>Mandate Seven Advisory conducts external manager searches across all asset classes and regions. Mandate Seven further seeks to add value by bringing forward new fund managers when possible, conducting an independent due diligence on fund managers, aiding in fee negotiation, as well as advising on portfolio transition and implementation when necessary. </p>
										</div>
										<!--<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div> -->								
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
											<i class="fa fa-bank "></i>
										</div>
										<div class="service-text-block">
											<p> Asset Allocation, a critical aspect within investment management, is the primary driver of portfolio risk and return over the long run. Mandate Seven Advisory is well positioned to advise and create actionable and realistic asset allocation models that seek to diversify and balance risk with return - providing mechanisms for rebalancing as well as methodology for moving the allocation according to market conditions. </p>
										</div>
										<!--<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div>	-->							
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
											<i class="fa fa-book"></i>
										</div>
										<div class="service-text-block">
											<p> Portfolio analysis, a key area of expertise for Mandate Seven Advisory helps the client look at his portfolio exposure through many lenses, identifying characteristics, risk and return drivers, as well as aiding in projecting future performance. Recommendations can be made to enhance portfolio performance, stream-lining exposure, as well as hedging. </p>
										</div>
										<!--<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div>	-->								
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a href="#collapse_4" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
									<h4>Performance Measurement & Analysis<i class="indicator fa fa-plus pull-right"></i></h4>						
								</a>
								<div class="panel-collapse collapse" id="collapse_4">
									<div class="panel-body">
										<div class="service-icon">
											<i class="fa fa-dashboard"></i>
										</div>
										<div class="service-text-block">
											<p> Performance measurement is a very important aspect of investment management and operations. For performance metrics to be meaningful and representative of reality, the appropriate benchmarks and performance measurement methodologies need to be used. Mandate Seven Advisory can help in benchmarking and selection of appropriate methodologies as well as in implementation for ongoing operation as well as evaluation on an ad-hoc basis. </p>
										</div>
										<!--<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div>-->									
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a href="#collapse_5" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
									<h4>Transaction Cost Analysis (TCA) and Advisory<i class="indicator fa fa-plus pull-right"></i></h4>						
								</a>
								<div class="panel-collapse collapse" id="collapse_5">
									<div class="panel-body">
										<div class="service-icon">
											<i class="fa fa-suitcase "></i>
										</div>
										<div class="service-text-block">
											<p> Transaction costs can be highly detrimental to long-term performance. These costs are often explicit and quantifiable such as brokerage commissions and other times they are implicit and difficult to measure as in the case of market impact. Mandate Seven Advisory can conduct in-depth transaction cost analyses in order to minimize transaction costs and provide solutions for on-going savings - be it for a single large transaction or on-going investment operations.  </p>
										</div>
										<!--<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div>-->									
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a href="#collapse_6" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
									<h4>Implementation and Procurement<i class="indicator fa fa-plus pull-right"></i></h4>						
								</a>
								<div class="panel-collapse collapse" id="collapse_6">
									<div class="panel-body">
										<div class="service-icon">
											<i class="fa fa-key"></i>
										</div>
										<div class="service-text-block">
											<p> When a client is ready to launch an investment, Mandate Seven Advisory can advise on the procurement of the investment vehicle, bookkeeping and custody providers, and implementation be it through transition management or otherwise. </p>
										</div>
										<!--<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div>-->									
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<a href="#collapse_7" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
									<h4>Research and Consulting <i class="indicator fa fa-plus pull-right"></i></h4>						
								</a>
								<div class="panel-collapse collapse" id="collapse_7">
									<div class="panel-body">
										<div class="service-icon">
											<i class="fa fa-search"></i>
										</div>
										<div class="service-text-block">
											<p> Mandate Seven Advisory provides consultations and conducts bespoke research on specific situations encountered by institutions. </p>
										</div>
										<!--<div class="service-text-block">
											<h5>Services includes <i class="fa fa-level-down"></i></h5>
											<p><i class="fa fa-ellipsis-v"></i> Design <i class="fa fa-ellipsis-v"></i> Development <i class="fa fa-ellipsis-v"></i> Responsive <i class="fa fa-ellipsis-v"></i> Mobile App <i class="fa fa-ellipsis-v"></i> Content management</p>									
										</div>-->									
									</div>
								</div>
							</div>
							
							
							
							
						</div>
					</div>
				</div>
			</div>
			<!-- End Services Section -->
			<div class="service-quoute">
				<div class="container "><p>We are run by <b>seasoned</b> individuals with <b>local</b> and <b>international</b> experience. </p></div>
			</div>
			<!-- Team Section -->
			<div id="team">
				<div class="container vc_col-sm-8">
					<header class="section-header">
						<h2 class="parallax-title">
							<span>Meet our team</span>
						</h2>
					</header>
					<p>The advisory is run by seasoned individuals with local and international experience and coming from various financial institutions in the region.</p>
				</div>
				<div class="container-fluid">
					<div class="container team-wrap">
						<div class="col-sm-3">
							<div class="team-inner">
								<div class="team">
									<h4>Osama S. Al-Ghanim </h4>
									<h5>General Manager </h5>										
								</div>
								<img alt="Jeams carry" src="<?php echo get_template_directory_uri();?>/img/team1.jpg">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="team-inner">
								<img alt="Jeams carry" src="<?php echo get_template_directory_uri();?>/img/team1.jpg">
								<div class="team">
									<h4>Faisal S. Quttaineh</h4>
									<h5>Director </h5>										
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="team-inner">
								<div class="team">
									<h4>Saad B. Al-Munifi </h4>
									<h5>Associate </h5>										
								</div>
								<img alt="Jeams carry" src="<?php echo get_template_directory_uri();?>/img/team1.jpg">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="team-inner">
								<img alt="Jeams carry" src="<?php echo get_template_directory_uri();?>/img/team1.jpg">
								<div class="team">
									<h4>Noura O. Al-Abdulkareem </h4>
									<h5>Associate </h5>										
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- End Team Section -->
			
			<!-- Contact Section -->
		
			<div id="contact">
				<div class="container">
					<div class="gmap col-sm-12">
						<div class="cpreloader"><i class="fa fa-spinner fa-spin"></i></div>
						<div class="embed-responsive">
							<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13907.42458420034!2d47.989586!3d29.374501!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9c60ceae19750d0!2sMandate+Seven+Advisory!5e0!3m2!1sen!2sph!4v1414415934976" width="100%" height="350px" frameborder="0" style="border:0"></iframe>	
						</div>
					</div>
					
					<div class="container">
					
					
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
					
					
					<div class="col-sm-6 address-col">
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
						
						<div class="links">
						<ul class="clearfix <!--pull-left-->">
							<!--<?php if($spring_options!=null and $spring_options['facebook']!='' ){ ?>
								<li><a class="facebook" href="<?php echo $spring_options['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
							<?php } ?>
							<?php if($spring_options!=null and $spring_options['twitter']!='' ){ ?>
							<li><a class="twitter" href="<?php echo $spring_options['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
							<?php } ?>
							
							<?php if($spring_options!=null and $spring_options['google']!='' ){ ?>
							<li><a class="google" href="<?php echo $spring_options['google']; ?>"><i class="fa fa-google-plus"></i></a></li>
							<?php } ?>-->
							<?php if($spring_options!=null and $spring_options['linkedin']!='' ){ ?>
							<li><a class="linkedin" href="<?php echo $spring_options['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
							<?php } ?>
						</ul>
					</div>
					</div>
					
					</div>
					
				
				</div>
			</div>
			<!-- End Contact Section -->
					
<?php get_footer(); ?>