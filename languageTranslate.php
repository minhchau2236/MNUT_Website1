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
	pll_register_string( 'past-events', 'past events', 'event', false );
	pll_register_string( 'new-events', 'new events', 'event', false );
	pll_register_string( 'no-events', 'More Events Coming Soon!', 'event', false );
	pll_register_string( 'Check_all_of_Our_Event_here', 'Check all of Our Event here!', 'event', false );	
	
	pll_register_string( 'Sorry-no-posts-matched-your-criteria', 'Sorry, no posts matched your criteria', 'category', false );
	
	
	pll_register_string( 'our_events', '/en/category/events', 'URL slugs ', false );// our events
	pll_register_string( 'news', '/en/category/news', 'URL slugs ', false );// news
	pll_register_string( 'testimonials', '/en/category/testimonials', 'URL slugs ', false );//testimonials
	
}
?>