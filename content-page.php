<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage consult to see
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.

	?>
<!-- start content-wrapper -->
		<div class="content-wrapper width-common"> 
			<?php the_content(); ?>
		</div>
		<!-- end content-wrapper -->

</article><!-- #post-## -->
