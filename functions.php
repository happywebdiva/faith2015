<?php
// Start Theme Setup. 
add_action('after_setup_theme', 'faith2014_themesetup');
function faith2014_themesetup() {
	
	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'a11yall_custom_background_args', array(
		'default-color' => 'cccccc',
		'default-image' => '',
	) ) );

	// Let users add "featured images", AKA post-thumbnails
	add_theme_support( 'post-thumbnails' );
	
	// Custom headers packaged with the theme
	register_default_headers( array(
		'kaitlin' => array(
			'url' => get_stylesheet_directory_uri() . '/img/kaitlins-flowers.png',
			'thumbnail_url' => get_stylesheet_directory_uri() . '/img/kaitlins-flowers-t.jpg',
			'description' => __( 'Flowers for Kaitline', 'abl' )
		),
		'cherrypath' => array(
			'url' => get_stylesheet_directory_uri() . '/img/cherry-path.jpg',
			'thumbnail_url' => get_stylesheet_directory_uri() . '/img/cherry-path-t.jpg',
			'description' => __( 'Cherry Tree Path', 'abl' )
		),
		'goldenbridge' => array(
			'url' => get_stylesheet_directory_uri() . '/img/header-bridge.jpg',
			'thumbnail_url' => get_stylesheet_directory_uri() . '/img/header-t.jpg',
			'description' => __( 'Golden Bridge', 'abl' )
		),
		'goldengate' => array(
			'url' => get_stylesheet_directory_uri() . '/img/golden-gate.jpg',
			'thumbnail_url' => get_stylesheet_directory_uri() . '/img/golden-gate-t.jpg',
			'description' => __( 'Golden Gate', 'abl' )
		),
		'lotus' => array(
			'url' => get_stylesheet_directory_uri() . '/img/lotus.jpg',
			'thumbnail_url' => get_stylesheet_directory_uri() . '/img/lotus-t.jpg',
			'description' => __( 'Lotus Flower', 'abl' )
		),
		'spirograph' => array(
			'url' => get_stylesheet_directory_uri() . '/img/spirograph.png',
			'thumbnail_url' => get_stylesheet_directory_uri() . '/img/spirograph-t.jpg',
			'description' => __( 'Spirograph Rainbow Burst', 'abl' )
		),
		'sunset' => array(
			'url' => get_stylesheet_directory_uri() . '/img/sunset.jpg',
			'thumbnail_url' => get_stylesheet_directory_uri() . '/img/sunset-t.jpg',
			'description' => __( 'Sunset', 'abl' )
		),
	) );

} // End Part 1 of Theme Setup

// Add ability to customize header
$header_defaults = array(
	'default-image'          => get_stylesheet_directory_uri() . '/img/kaitlins-flowers.png',
	'header-text'			       => false,
	'default-text-color'		=> 'fff',
	'width'                  => 960,
	'height'                 => 200,
	'random-default'         => false,
	'uploads'                => true
);
add_theme_support( 'custom-header', $header_defaults );

?>