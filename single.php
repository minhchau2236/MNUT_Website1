<?php
/**
 * The template for displaying all single posts.
 *
 * @package West
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>			
<div class="container post">
				<div class="row">
					<div class="col-md-8">
				
						<h1 class="text-header"> <?php the_title(); ?></h1>
						<div class="divide20"></div>
					</div>
				</div>
				
				<div class="row article-body">
				<div class="col-md-8">
					<figure> <img class="img-responsive" src="<?php the_post_thumbnail_url();  ?>" alt=""> </figure>
					 <?php  the_content();  ?>
			     </div>

					<!-- /column left -->
					<div class="col-md-4">
						
						<div class="header-style-2">Related news</div>
						<div class="divide20"></div>
						<ul class="style-1">
						<?php
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
									$first_tag = $tags[0]->term_id;
									$args=array(
									'tag__in' => array($first_tag),
									'post__not_in' => array($post->ID),
									'posts_per_page'=>5,
									'ignore_sticky_posts'=>1 );
									$my_related_query = new WP_Query($args);
									if( $my_related_query->have_posts() ) {
										while ($my_related_query->have_posts()) : $my_related_query->the_post(); ?>
											<li>
												<i class="fa fa-caret-right"></i>
												<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
											</li>
										<?php
										endwhile;
									}

								}
								else
								{
									$post_categories = get_the_category();

									if($post_categories)
									{
										$first_item = reset($post_categories);
										$cat = get_category( $first_item );
										$catSlug = $first_item->slug;
										$args=array(	
										'category_name' => $catSlug ,						
										'post__not_in' => array($post->ID),
										'posts_per_page'=>5,
										'ignore_sticky_posts'=>1 );
										$my_related_query = new WP_Query($args);
										if( $my_related_query->have_posts() ) {
											while ($my_related_query->have_posts()) : $my_related_query->the_post(); ?>
												<li>
												<i class="fa fa-caret-right"></i>
												<a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>	
											<?php
											endwhile;
										}
									}							
									
								}
								wp_reset_query();
									
							?>		
							</ul>							

						<!--<div class="header-style-2">Related news</div>
						<div class="divide20"></div>
						<ul class="style-1">
							<li>
								<i class="fa fa-caret-right"></i>
								<a href="#">Put the pieces together and overcome the differences in company values</a></li>
							<li>
								<i class="fa fa-caret-right"></i>
								<a href="#">Systemic Constellation in practice</a></li>
							<li>
								<i class="fa fa-caret-right"></i>
								<a href="#">Impression from the last promotional workshop with ConsulToSee</a></li>
						</ul>-->
					</div>
				</div>
			</div>
			<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>