<?php
    /* Template Name: old-events*/   
    get_header();
?>
<?php
$category_slug = 'events' ;
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $args = array(
      'post_type' => 'post',
      'posts_per_page' => 9,
      'paged' => $paged,
	  'category_name'   => $category_slug,
	  'meta_query'	=> array(
			'relation'		=> 'AND',
			array(
				'key'	 	=> 'eventStartDate',
				'value'	  	=>  date("Ymd"),
				'compare' 	=> '<',
				'type' => 'DATE' 
			)		
		),
		'orderby' => array( 
			'eventStartDate' => 'DESC'
		),
    );
	$my_query = new WP_Query( $args ); 
?>
<!-- start content-wrapper -->
		<div class="content-wrapper width-common"> 
			<div id="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="/">Home</a></li>						
						<li class="active">Old events</li>
					</ul>
				</div>
			</div>
			<!-- #page-header -->
			
			<div class="container">
				<h1 class="text-header">Old events</h1>				
				<div class="row column-2">
				 <?php if ( $my_query->have_posts() ) : ?>
                <?php
                	while ( $my_query->have_posts() ) : $my_query->the_post();

					$date = get_field('eventStartDate', false, false); 
					$date = new DateTime($date); 
                ?>
				<div class="col-sm-6">
						<div class="blog-article style-2">
							<div class="blog-article-thumbnail"> 
								<a href="<?php  echo the_permalink(); ?>">
								<?php echo the_post_thumbnail( array(570, 270) ) ?>	</a>
							</div>	
							<div class="blog-article-datetime">
								<span class="day"> <?php echo $date->format('d'); ?></span>
								<span class="month"><?php echo $date->format('F'); ?></span>
							</div>
							<div class="blog-article-details">
								<h4><a href="<?php  echo the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
								<p><?php echo wp_strip_all_tags(the_excerpt(), true ); ?></p>
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
				<?php endif; ?>

			</div>
		</div>
		<!-- end content-wrapper -->
            
<?php
/*Main template file*/
get_footer();
?>