<?php
add_action( 'admin_init', 'setCustomPolylangString' );
/**
 * Add a string from Send Images to RSS settings to Polylang strings.
 */
function setCustomPolylangString() {
	if ( ! function_exists( 'pll_register_string' ) ) {
		return;
	}
	pll_register_string( 'our-event', 'our events', 'front-page', false );
	pll_register_string( 'recent-news', 'recent news', 'front-page', false );
	pll_register_string( 'testimonials', 'testimonials', 'front-page', false );	
}
?>