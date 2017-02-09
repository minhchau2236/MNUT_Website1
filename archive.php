<?php
    /*Front page template file*/   
    get_header();
?>
<p>
This is some text that will display at the top of the Category page.
</p>

<?php if (is_category('tech')) : ?>
<p>This is the text to describe category tech</p>
<?php elseif (is_category('Category B')) : ?>
<p>This is the text to describe category B</p>
<?php else : ?>
<p>This is some generic text to describe all other category pages, 
I could be left blank</p>
<?php endif; ?>

<?php if ( $paged < 2 ) : ?>
<p>Text for first page of Category archive.</p>
<?php else : ?>
<p>Text for subsequent pages of Category.
Can be left out.</p>
<?php endif; ?>

<!--<p>Category: <?php single_cat_title(); ?></p>
<?php 
$args = array ( 'category' => 'fdsafsafdsaf', 'posts_per_page' => 2);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post);
 ?>
<h1><?php the_title(); ?></h1>
<?php endforeach; ?>-->

<?php $my_query = new WP_Query( 'category_name=travel-news&posts_per_page=10' ); ?>
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
	<!-- Do special_cat stuff... -->
    <h1><?php the_title(); ?></h1>
    <h2><?php the_content(); ?></h2>
    <?php
    if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} 
     ?>
<?php endwhile; ?>