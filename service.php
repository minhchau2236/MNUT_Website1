
<?php
/* Template Name: service template*/get_header();
 ?>
<!-- start content-wrapper -->
		<div class="content-wrapper width-common"> 
			<div id="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>						
						<li class="active">Management Consulting</li>
					</ul>
				</div>
			</div>
			<!-- #page-header -->
			
			<?php
				$the_query = new WP_Query(array(
					'posts_per_page' => 6,
					'category_name' => 'service', // this is the category SLUG
				));
			 ?>			  
			<div class="container">
				<h1 class="text-header text-center">Management Consulting</h1>
				<div class="summary">
					<p class="text-center"><i>Reach us at info@consultosee.com or +84 163 969 1059 for a free personal consulting</i></p>
					<p class="text-center"><i>Using the powerful method of systemic constellation, we support you in</i></p>
				</div>
				

			 <?php
				$postCount = 1;
				while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>
			  <?php
			  $postQuery = get_post(get_the_ID());  
			  if($postCount % 2 > 0){
				echo '<div class="divide20"></div> <div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">';
			  }
			 ?>			   				
					<div class="col-sm-6">
						<div class="feature feature-s">
							<div class="icon icon-s"> <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" /> </div>
							<h4><?php echo the_title(); ?></h4>
							<?php echo apply_filters('the_content', $postQuery->post_content); ?>
						</div>
						<!--/.feature --> 
					</div>
					<?php					 
						if($postCount % 2 == 0){
							echo '</div>';
						};
						$postCount = $postCount + 1;
					 ?>
			<?php endwhile; ?>	
			
				<div class="divide60"></div>
				<div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
					<div class="col-md-4 col-md-offset-2 col-sm-12 col-xs-12 text-center wow fadeIn position-relative" data-wow-duration="1s">
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
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="divide50"></div>
						<h2 class="text-header">Get to know each other</h2>
						<p>If you’re still unsure. How about getting to know each other first to see if it’s right. For a free personal consulting, reach us at:</p>
						<div class="divide10"></div>
						<ul class="contact">
							<li><i class="mdi mdi-phone"></i>+ 84 163 969 1059 </li>
							<li><i class="mdi mdi-email"></i>info@consultosee.com</li>							
						</ul>
						 
						<h2 class="text-header">or experience it yourself at</h2>
						<a href="#" class="btn btn-transparent btn-large">Our workshop</a>
					</div>
				</div>
				
				<div class="divide80"></div>
			</div>
		</div>
		<!-- end content-wrapper -->
    
<?php
/*Main template file*/
get_footer();
?>