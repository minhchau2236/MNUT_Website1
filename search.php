
<?php get_header(); ?>
	<div id="page-header">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
				<li><a href="#">News</a></li>						
				<li class="active">search result</li>
			</ul>
		</div>
	</div>
	<!-- #page-header -->
<?php
	$s=get_search_query();
	$args = array(
					's' =>$s
				);
		// The Query
	$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
		?>
		<div class="container search">
				<div class="divide50"></div>
				<div class="notification">
					<p>
						<span class="text text-bolder">search result :</span>
						<span class="text text-italic"><?php echo get_query_var('s')?></span>
					</p>
					<p class="text-result">We have found: <?php echo $the_query->post_count; ?> results</p>
				</div>
				<!-- /.notification -->
				
				<div class="divide10"></div>
				<div class="list-result">
		<?php        
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
					<div class="item-result">
						<?php $title = get_the_title(); $keys= explode(" ",$s); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $title); ?>
						<h4><a class="title-item" href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h4>
						<div class="description-item"><?php the_excerpt(); ?></div>
						<div class="divide20"></div>
					</div>                   
                 <?php
        }?>
		</div><!--/.list-result -->
		<?php
    }else{
?>
		<div class="notification">
			<p><span class="text text-bolder">Nothing Found</span></p>
		</div>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
	
<?php } ?>
	</div><!--/.container.search -->
<?php get_footer(); ?>