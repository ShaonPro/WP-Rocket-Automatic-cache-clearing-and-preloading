<?php 
// Load WordPress.
require( 'wp-load.php' );

// Clear cache. Also preload the cache if the Preload is enabled.
if ( function_exists( 'rocket_clean_domain' ) ) {
	rocket_clean_domain();
 }

// Clear Minified/Combined CSS and JavaScript files.
if ( function_exists( 'rocket_clean_minify' ) ) {
	rocket_clean_minify();
}
