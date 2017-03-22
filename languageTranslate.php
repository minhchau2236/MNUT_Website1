<?php
add_action( 'admin_init', 'setCustomPolylangString' );
/**
 * Add a string from Send Images to RSS settings to Polylang strings.
 */
function setCustomPolylangString() {
	if ( ! function_exists( 'pll_register_string' ) ) {
		return;
	}
	pll_register_string( 'home', 'Home', 'front-page', false );
	pll_register_string( 'our-event', 'our events', 'front-page', false );
	pll_register_string( 'recent-news', 'recent news', 'front-page', false );
	pll_register_string( 'testimonials', 'testimonials', 'front-page', false );	
	pll_register_string( 'search-result', 'search result', 'search-page', false );	
	pll_register_string( 'we-have-found', 'We have found', 'search-page', false );
	pll_register_string( 'results', 'results', 'search-page', false );
	pll_register_string( 'nothing-found', 'Nothing Found', 'search-page', false );
	pll_register_string( 'sorry-nothing-found', 'Sorry, but nothing matched your search criteria. Please try again with some different keywords', 'search-page', false );			
	pll_register_string( 'related-news', 'Related news', 'single', false );
	pll_register_string( 'share', 'SHARE', 'single', false );
}
?>