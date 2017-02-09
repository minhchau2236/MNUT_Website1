<?php
/*
Plugin Name: ConsultToSee_Plugin
Description: Custom plugin for consult-to-see
*/
/* Start Adding Functions Below this Line */

class wpb_lasted_news_widget extends WP_Widget {
function __construct() {
	parent::__construct(
		// Base ID of your widget
		'wpb_widget',
		// Widget name will appear in UI
		__('WPBeginner Widget', 'wpb_widget_domain'),
		// Widget description
		array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
	);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	$topicId = apply_filters( 'widget_title', $instance['topicId'] );
	// before and after widget arguments are defined by themes
	echo $args['before_widget'];
	if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];
	// This is where you run the code and display the output
	if(! empty( $topicId ))
	{
		$my_query = new WP_Query( 'category_name='. $topicId .'&posts_per_page=3' );
						while ( $my_query->have_posts() ) : $my_query->the_post(); 
							echo '<!-- Do special_cat stuff... -->';
							echo '<div class="post col-sm-4">'.
								'<figure>';
									if ( has_post_thumbnail() ) {

									echo '<a href="#">'.
										'<img src="'; echo the_post_thumbnail_url(); echo '" alt="" />';									
									} 					   									
								echo '</a>'.
								'</figure>'.
								'<div class="post-content">'.
									'<h3 class="post-title">'.
										'<a href="#">'; echo the_title(); echo '</a></h3>'.
									'<p class="post-decription">'; echo the_content(); echo '</p>'.
								'</div>'.
								'<!-- /.post-content --> '.
							'</div>';
		endwhile;
	}
	
	echo $args['after_widget'];
}

// Widget Backend
public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
		$title = $instance[ 'title' ];
	}
	else {
		$title = __( 'New title', 'wpb_widget_domain' );
		$topicId = __( 'New Topic Id', 'wpb_widget_domain' );
	}
	
	if ( isset( $instance[ 'topicId' ] ) ) {
		$topicId = $instance[ 'topicId' ];
	}
	else {
		$topicId = __( 'New Topic Id', 'wpb_widget_domain' );
	}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id( 'topicId' ); ?>"><?php _e( 'Topic:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'topicId' ); ?>" name="<?php echo $this->get_field_name( 'topicId' ); ?>" type="text" value="<?php echo esc_attr( $topicId ); ?>" />
</p>
<?php
	}
		// Updating widget replacing old instances with new
		public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['topicId'] = ( ! empty( $new_instance['topicId'] ) ) ? strip_tags( $new_instance['topicId'] ) : '';
		return $instance;
		}
	} // Class wpb_widget ends here
	 
	// Register and load the widget
	function wpb_load_widget() {
		register_widget( 'wpb_lasted_news_widget' );
	}
add_action( 'widgets_init', 'wpb_load_widget' );
/* Stop Adding Functions Below this Line */
?>

