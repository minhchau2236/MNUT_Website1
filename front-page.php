<?php
    /*Front page template file*/
    get_header();
?>
<div class="content-wrapper width-common"> 
	<div class="intro-site">
		<div class="bg-parallax" style="background-image: url(<?php bloginfo('template_url') ?>/resources/images/bg_slider.jpg);">
			<div class="container">
				<div class="block-text">
					<div class="divide40"></div>
					<div class="txt-slogan-small">
						<p>Business consulting and personal consulting</p>								
					</div>
				
					<div class="txt-slogan-big">								
						<p>Make yourself a picture !</p>
					</div>
					
					<div class="txt-slogan-descript">
						<p>You want to be more successful in your life and at peace with yourself. You want to be<br/> 
						more happy and successful with your company. By using the powerful method of <br/>
						Systemic Constellation with <i style="color: #35c0cc;">Torsten Seeger</i> , we help you...
						</p>
					</div>
					<br/>
					<div>
						<span class="leanMore">Lean more at</span>
						<a href="#" class="btn btn-transparent btn-large">Our events</a>
					</div>
				</div>
				<div class="block-img" >
					<div class="thumb-img">
						<img class="img-responsive" src="<?php bloginfo('template_url') ?>/resources/images/girl_on_ladder.png" alt="ảnh"/>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.intro-site -->		
			
			<div class="width-common ">
				<div class="container inner">				
					<div class="row">					
						<div class="col-md-7 col-sm-12 col-xs-12">							
							<div class="section-title">
								<h3>Systemic Constellation</h3>							
							</div>
							<div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
								<div class="col-sm-12">
									<div class="decription">
										Systemic Constellation enables you to get into your own power and to take control by yourself! <br/>
										The method enables you To See your roots as an eternal powerbank, rather than an excuse for shortcomings! To See difficulties as the rocks on your path, which strengthen you by removing them.									
									</div>
									<a href="<?php echo get_page_link(250) ?>" class="btn-more pull-right">More about our Method</a>
								</div>																	
							</div>
							<!--/.row -->
							<div class="divide40"></div>							
						</div>
						<!--/column --> 
						<div class="col-md-5 col-sm-12 col-xs-12 text-center wow fadeIn" data-wow-duration="1s">							
							<figure> <img src="<?php bloginfo('template_url') ?>/resources/images/img-1.png" alt="" /> </figure>							
						</div>
						<!--/column -->
					</div>
					<!--/.row --> 
				</div>
				<!--/.container --> 
			</div>
			<!--/.width-common -->
			
			<div class="width-common bg-color-1">
				<div class="container inner">					
					<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12 text-center wow fadeIn position-relative" data-wow-duration="1s">
							<div class="quote style-1 bg-quote-left">
								<blockquote>
									<p class="quote-text">&ldquo; 
										For problems there are the same strict ownership rules as for real estate.
									&rdquo;</p>
									<p>Klaus P. Horn</p>
								</blockquote>
							</div>
							<figure class="img-bottom"> <img src="<?php bloginfo('template_url') ?>/resources/images/object.png" alt="" /> </figure>								
						</div>
						<!--/column -->
						<div class="col-md-8 col-sm-12 col-xs-12">							
							<div class="section-title">
								<a href="<?php echo get_page_link(243); ?>"><h3>management consulting</h3></a>							
							</div>
							<!-- /.section-title -->
								<?php
									$the_service_query = new WP_Query(array(
										'posts_per_page' => 6,
										'category_name' => 'service', // this is the category SLUG
									));
								?>		
							<?php
							$service_postCount = 1;
							while ( $the_service_query->have_posts() ) : $the_service_query->the_post();
							?>
							<?php
							$service_postQuery = get_post(get_the_ID());  
							if($service_postCount == 1){
								echo '<div class="divide20"></div>';
							}
							if($service_postCount % 2 > 0){
								echo '<div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">';
							}
							?>		
								<div class="col-sm-6">
									<div class="feature feature-s">
										<div class="icon icon-s"> <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" /> </div>
										<h4><?php echo the_title(); ?></h4>
										<p><?php echo km_get_the_excerpt(get_the_ID(), 20); ?></p>
									</div>
									<!--/.feature --> 
								</div>
								<?php					 
									if($service_postCount % 2 == 0){
										echo '</div>';
									};
									$service_postCount = $service_postCount + 1;
								?>
						<?php endwhile; ?>								
						</div>
						<!--/column -->						
					</div>
					<!--/.row --> 
				</div>
				<!--/.container --> 
			</div>
			<!--/.width-common -->
						
			<div class="width-common">
				<div class="container inner">
					<div class="row">						
						<div class="col-md-8 col-sm-12 col-xs-12">						
							<div class="section-title">
								<a href="<?php echo get_page_link(245); ?>"><h3>Personal developement Consulting </h3></a>								
							</div>
							
							<!-- /.section-title -->				
							<?php
									$the_service_query = new WP_Query(array(
										'posts_per_page' => 5,
										'category_name' => 'service', // this is the category SLUG
									));
								?>		
							<?php
							$service_personal_postCount = 1;
							while ( $the_service_query->have_posts() ) : $the_service_query->the_post();
							?>
							<?php
							$service_postQuery = get_post(get_the_ID());  
							if($service_personal_postCount == 1){
								echo '<div class="divide20"></div>';
								echo '<div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">';
							}
							if($service_personal_postCount % 2 == 0){
								echo '<div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">';
							}
							if($service_personal_postCount == 1){
								echo '<div class="col-sm-12">';
							}
							else
							{
								echo '<div class="col-sm-6">';
							}
							?>		
									<div class="feature feature-s">
										<div class="icon icon-s"> <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" /> </div>
										<h4><?php echo the_title(); ?></h4>
										<p><?php echo km_get_the_excerpt(get_the_ID(), 20); ?></p>
									</div>
									<!--/.feature --> 
								</div>
								<?php					 
									if($service_personal_postCount % 2 > 0){
										echo '</div>';
									};
									$service_personal_postCount = $service_personal_postCount + 1;
								?>
						<?php endwhile; ?>						
							<!--/.row -->							

						</div>
						<!--/column -->	
						
						<div class="col-md-4 col-sm-12 col-xs-12 text-center wow fadeIn position-relative" data-wow-duration="1s">
							<div class="quote style-1 bg-quote-right">
								<blockquote>
									<p class="quote-text">&ldquo; 
										To be adult does not mean to do what you are supposed to do!
										To be adult means to follow your heart!
									&rdquo;</p>
									<p>Wilfred Nelles</p>
								</blockquote>
							</div>
							<figure class="img-top"> <img src="<?php bloginfo('template_url') ?>/resources/images/object-2.png" alt="" /> </figure>
						</div>
						<!--/column -->							
					</div>
					<!--/.row --> 
				</div>
				<!--/.container --> 
			</div>
			<!--/.width-common -->
			
			<div class="width-common events " style="background-image: url(<?php bloginfo('template_url') ?>/resources/images/bg.jpg);">
				<div class="overlay"></div>
				<div class="container inner">
					<div class="section-title">
						<h3>Our workshops</h3>								
					</div>
					<!-- /.section-title -->
					<div class="divide20"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="date-event">
								<div class="day">12</div>
								<div class="month">January</div>
							</div>
							<div class="item-event">
								<h4>UPCOMING - Management Consulting<br/>
									Worshop of January</h4>
								<div class="item-event-content">
									<div>Location: Saigon Cafe 52 Thành Thái, District 10, HCM</div>
									<div>Date: Monday, 12th January, 2016</div>
									<div>Time: From 9AM to 12AM</div>
								</div>
							</div>
						</div>
						<!-- /column -->
						
						<div class="col-sm-6">
							<div class="date-event">
								<div class="day">15</div>
								<div class="month">December</div>
							</div>
							<div class="item-event">
								<h4>Personal Development and Family Consulting<br/>
									First Promotional Workshop</h4>
								<div class="item-event-content">
									<div>Thank you to all participants on our first promotional workshop weekend! It was a great honour and lots of fun to work with you!</div>
								</div>
							</div>
						</div>
						<!-- /column -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.width-common -->
			
			<div class="width-common">
				<div class="container inner">
					<!--<div class="section-title">
						<h3>recent news</h3>								
					</div>-->
					<!-- /.section-title -->
					<div class="divide20"></div>
					<div class="row">	
						<?php
							get_sidebar('lasted-news');
						?>

						<?php $my_query = new WP_Query( 'category_name=travel-news&posts_per_page=3' ); ?>
						<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
							<!-- Do special_cat stuff... -->
							<div class="post col-sm-4">
								<figure>
									<a href="#">
									<?php	
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									} 		
									?>				   									
									</a>
								</figure>
								<div class="post-content">
									<h3 class="post-title">
										<a href="#"><?php the_title(); ?></a></h3>
									<p class="post-decription"><?php the_content(); ?></p>
								</div>
								<!-- /.post-content --> 
							</div>
						<?php endwhile; ?>		
						<!-- /.post -->
						
					</div>
				</div>
			</div>
			<!-- /.width-common -->
			
			<div class="width-common">
				<div class="container inner">
					<div class="section-title">
						<h3>Testimonials</h3>						
					</div>
					<div class="divide20"></div>
					<div class="carousel-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="testimonials col1 owl-carousel owl-theme">
						<?php
									$the_testimonials_query = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' => 2,
										'category_name' => 'testimonials', // this is the category SLUG
									));
								?>		
							<?php
							$testimonials_postCount = 1;
							while ( $the_testimonials_query->have_posts() ) : $the_testimonials_query->the_post();
							?>	
							<div class="item">								
								<div class="quote">
									<blockquote>
										<?php echo the_content('...'); ?>
									</blockquote>
									<div class="info">
										<h5>
											Le Dong Thao Vy</h5>									
									</div>
								</div>
								<!--/.quote --> 
							</div>								
						<?php endwhile; ?>
							<!--/.item -->
						</div>
						<!--/.carousel --> 
					</div>
					<!--/.carousel-wrapper --> 
					
				</div>
				<!-- /.container --> 
			</div>
			<!-- /.width-common -->
			
		</div>
    <?php
        /*Front page template file*/
        get_footer();
    ?>