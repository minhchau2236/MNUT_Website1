<?php
/**
 * The template for displaying all single posts.
 *
 * @package West
 */
get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>				
			<div id="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="/"><?php echo pll_e('Home'); ?></a></li>
						<?php 
								$post_categories = get_the_category();

								if($post_categories)
								{
									$first_item = reset($post_categories);
									$cat = get_category( $first_item );
						?>
						<li><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $first_item->name ?></a></li>	
						<?php
							}
						?>							
						<li class="active"><?php echo the_title(); ?></li>
					</ul>
				</div>
			</div>
			<!-- #page-header -->	

	
            <div class="container post">
				<div class="row">
					<div class="col-md-8">
				
						<h1 class="text-header"> <?php the_title(); ?></h1>
						<div class="divide20"></div>
					</div>
				</div>
				
				<div class="row article-body">
				<div class="col-md-8">
						<div style="display:none;">
							<figure>
								<?php echo the_post_thumbnail( array(750, 400) ) ?>						 
							</figure>
							<div class="divide30"></div>				
						</div>
						<div class="row ">
							<div class="col-sm-2 col-md-2 ">
								<div class="sticky">
									<span><?php echo pll_e('SHARE'); ?></span>
									<ul class="social-sharer">
										<li>
											<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="Share on Facebook." class="link--anchor"><span class="fa fa-facebook"></span></a>
										</li>
										<li>
											<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!" target="_blank" class="link--anchor"><span class="fa fa-twitter"></span></a>
										</li>
										<li>
											<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="link--anchor" target="_blank"><span class="fa fa-google-plus"></span></a>
										</li>
									</ul>
								</div>
								<!-- /.sticky -->
								<div class="divide10"></div>
							</div>

							<div class="col-sm-10 col-md-10 article-body--main">
					 			<?php  the_content();  ?>
								<div class="divide50"></div>
							</div>
						</div>
			        </div>
					<!-- /column left -->
					<div class="col-md-4">
						
						<div class="header-style-2"><?php echo pll_e('Related news'); ?></div>
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


<script>
	// sticky social sharer
		$(document).ready(function() {
			var sticky = $(".sticky");
			var offset = sticky.offset();			
			
			
			var mainContentHeight = $(".article-body--main").height();
			
			console.log("ofset: " + sticky.offset().top);
			console.log(mainContentHeight);
			$(window).scroll(function() {    
				var scroll = $(window).scrollTop() ;
				if (scroll + 150 >= offset.top & scroll <= mainContentHeight + sticky.height()) {
					sticky.addClass("fixed");
				} else {
					sticky.removeClass("fixed");
				}
				
				console.log("scroll: " + scroll);
			}); 
		});
</script>