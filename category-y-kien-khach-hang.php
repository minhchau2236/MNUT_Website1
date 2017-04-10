<?php
    /*Front page template file*/   
    get_header();
?>

<!-- start content-wrapper -->
		<div class="content-wrapper width-common"> 
			<div id="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="/"><?php pll_e('Home') ; ?></a></li>						
						<li class="active"><?php single_term_title() ?></li>
					</ul>
				</div>
			</div>
			<!-- #page-header -->
			
			<div class="container">
				<h1 class="text-header"><?php single_term_title() ?></h1>	
				<?php
					$categories = get_the_category();
					if(sizeof($categories)<=0)
					{
				?>
						<p><?php pll_e( 'Sorry, no posts matched your criteria' ); ?>.</p>
				<?php		
					}
					else
					{
						$category_slug = $categories[0]->slug ;
						$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 8,
							'paged' => $paged,
							'category_name'   => $category_slug
							);
							$my_query = new WP_Query( $args ); 
				?>
						
				<div class="row column-2">
				 <?php if ( $my_query->have_posts() ) : ?>
                <?php
                	while ( $my_query->have_posts() ) : $my_query->the_post();				
                ?>
				<div class="col-sm-6">
						<div class="blog-article style-3">							
							<div class="blog-article-details">							
								<div class="author">
									<div class="icon">
									<?php
										if ( has_post_thumbnail() ) {
											echo the_post_thumbnail( array(114, 114) );
										}
										else
										{
									?>								
											<img src="<?php bloginfo('template_url') ?>/resources/images/testimonial_img_default.jpg" alt="" />;
									<?php
										}								  
									?>		
									</div>									
								</div>
								<div class="quote">
									<blockquote>										 
										<a href="<?php  echo the_permalink(); ?>"><?php echo wp_strip_all_tags(the_excerpt(), true ); ?></a>										
									</blockquote>
									<div class="info">
										<h5><?php the_field('testimonialsAuthor'); ?></h5>									
									</div>
								</div>								
							</div>
						</div>
					</div>				
                <?php endwhile; ?>					
				</div>
				<!-- /.row -->
				<!-- pagination here -->
			
				<div class="text-center">
						<?php
						if (function_exists('custom_pagination')) {					
							custom_pagination($my_query->max_num_pages,"",$paged);
						}
						?>
							
					<!-- /.pagination -->
				</div>
				<?php wp_reset_postdata(); ?>
				 <?php else:  ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; }?>

			</div>
		</div>
		<!-- end content-wrapper -->
            
<?php
/*Main template file*/
get_footer();
?>