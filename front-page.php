<?php
    /*Front page template file*/
    get_header();
?>
<div class="content-wrapper width-common"> 
	<div class="intro-site">
		<?php							
			if(is_active_sidebar('banner') && is_home()){
				dynamic_sidebar('banner');			
			}
		?>	
	</div>
	<!-- /.intro-site -->		
			
	<div class="width-common ">
		<div class="container inner">				
			<div class="row">					
				<?php							
					if(is_active_sidebar('block-1') && is_home()){
						dynamic_sidebar('block-1');			
					}
				?>	
			</div>
			<!--/.row --> 
		</div>
		<!--/.container --> 
	</div>
	<!--/.width-common -->
			
			<div class="width-common bg-color-1">
				<div class="container inner">					
					<div class="row">
						<?php							
							if(is_active_sidebar('service') && is_home()){
								dynamic_sidebar('service');			
							}
						?>					
					</div>
					<!--/.row --> 
				</div>
				<!--/.container --> 
			</div>
			<!--/.width-common -->
						
			<div class="width-common">
				<div class="container inner">
					<div class="row">						
						<?php							
							if(is_active_sidebar('service_personal') && is_home()){
								dynamic_sidebar('service_personal');			
							}
						?>							
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
						<?php
							// Get the ID of a given category
							$category_id = get_cat_ID( 'Our Events' );

							// Get the URL of this category
							$category_link = get_category_link( $category_id );
						?>
						<h3><a href="<?php echo esc_url( $category_link ); ?>">Our events</a></h3>								
					</div>
					<!-- /.section-title -->
					<div class="divide20"></div>
					<div class="row">								
						<?php  
							// get posts 
							$posts = get_posts(array( 
							'category_name' => 'Event', 
							'posts_per_page' => 2,
							'meta_key'			=> 'eventPriority',
							'orderby'			=> 'meta_value',
							'order'				=> 'DESC',
							));
							if( $posts ): ?>
							<?php foreach( $posts as $post ):  
							setup_postdata( $post ) 
							?>

							<?php  
							$date = get_field('eventStartDate', false, false); 
							$date = new DateTime($date); 
							?> 
							
								<div class="col-sm-6">
							 		<div class="date-event">
							 			<div class="day"><?php echo $date->format('d'); ?></div>
							 			<div class="month"><?php echo $date->format('F'); ?></div>
							 		</div>
							 		<div class="item-event">
							 		<h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
							 			<div class="item-event-content">
							 				<?php the_content('Read more ...'); ?>
							 			</div>
							 		</div>
							 	</div>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?> 
						<?php endif; ?>
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.width-common -->
			
			<!-- Recent news -->
			<div class="width-common">
				<div class="container inner">
					<div class="section-title">
						<h3>Recent news</h3>								
					</div>
					<!-- /.section-title -->
					<div class="divide20"></div>
					<div class="row">							
						 <?php
									$the_recentNews_query = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' => 3,
										'category_name' => 'news', // this is the category SLUG
									));
							?>		
							<?php
								while ( $the_recentNews_query->have_posts() ) : $the_recentNews_query->the_post();
							?>	
							<div class="post col-sm-4">
								<figure>
									<a href="<?php echo the_permalink(); ?>">
										<?php the_post_thumbnail( array(360, 215) ) ?>																			
									</a>
								</figure>
								<div class="post-content">
									<h3 class="post-title">
										<a href="<?php echo the_permalink();?>"><?php echo the_title(); ?></a></h3>
									<p class="post-decription"><?php echo the_excerpt(); ?></p>
								</div>
								<!-- /.post-content --> 
							</div>
							<!-- /.post -->					
						<?php endwhile; ?>
						<!--/.item -->						
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
										<h5><?php the_field('testimonialsAuthor'); ?></h5>								
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