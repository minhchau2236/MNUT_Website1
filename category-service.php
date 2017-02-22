<?php
    /*Front page template file*/   
    get_header();
?>
<?php
$categories = get_the_category();
$category_slug = $categories[0]->slug ;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'posts_per_page' => 3,
  'paged'          => $paged,
  'category_name'    => $category_slug
);


$my_query = new WP_Query( $args ); 
?>
<!-- start content-wrapper -->
		<div class="content-wrapper width-common"> 
			<div id="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>						
						<li class="active"><?php single_term_title() ?></li>
					</ul>
				</div>
			</div>
			<!-- #page-header -->
			
			<div class="container">
				<h1 class="text-header">Recent News</h1>				
				<div class="row column-3">
                <?php
                 // Declare global $more (before the loop).
                global $more;
                			while ( $my_query->have_posts() ) : $my_query->the_post();
                ?>
					<div class="col-sm-4">
						<div class="blog-article">
							<div class="blog-article-thumbnail"> 
								<a href="<?php  echo the_permalink(); ?>"><img src="<?php the_post_thumbnail_url();  ?>" alt=""></a>
							</div>							
							<div class="blog-article-details">
								<h4><a href="<?php  echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p><?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?></p>
							</div>
						</div>
					</div>
                <?php endwhile; ?>					
				</div>
				<!-- /.row -->
<!-- Add the pagination functions here. -->

<!--<div class="nav-previous alignleft"><?php next_posts_link(); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Previous posts' ); ?></div>-->

				<?php echo paginate_links(); ?>


				<div class="text-center">
					<ul class="pagination">
						<li> <?php previous_posts_link('&laquo;')?></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><?php next_posts_link('&raquo;')?></li>
					</ul>
					<!-- /.pagination -->
				</div>
			</div>
		</div>
		<!-- end content-wrapper -->
            
<?php
/*Main template file*/
get_footer();
?>