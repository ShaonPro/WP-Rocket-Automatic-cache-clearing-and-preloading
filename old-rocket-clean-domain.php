<?php 
// Load WordPress.
require( 'wp-load.php' );

// Clear cache.
// Only available on WP Rocket versions older than 3.12
if ( function_exists( 'rocket_clean_domain' ) ) {
	rocket_clean_domain();
}


// Clear Combined/Minified CSS and JavaScript files.
if ( function_exists( 'rocket_clean_minify' ) ) {
	rocket_clean_minify();
}

// Preload cache.
if ( function_exists( 'run_rocket_sitemap_preload' ) ) {
	run_rocket_sitemap_preload();
}
