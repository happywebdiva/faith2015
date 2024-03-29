<?php
/**
 * @package faith2015
 */
?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
<?php	
	// Detect whether usin Yoast's WordPress SEO Plugin and change title accordingly
 include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); 
 if (is_plugin_active('wordpress-seo/wp-seo.php')) {
	 wp_title('');
 } else {
	global $page, $paged;
	wp_title('-',true,'right');
	if ( $paged >= 2 || $page >= 2 )
		echo  sprintf( __( 'Page %s', 'a11yall' ), max( $paged, $page ) ), ' - ';
	bloginfo( 'name' );
	$site_description = get_bloginfo('description','display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " - $site_description";
  }
?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<?php
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); 
	wp_head(); 
?>
<style type="text/css">        
<?php 
	echo '.section.header .container {background-image:url(';
	if ( is_singular() && has_post_thumbnail( $post->ID ) &&
		( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) )  ) {
		echo $image[0];
	} else {
		header_image();
	}	
	echo ');}';
?>
</style>
<!--[if lte IE 7]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lt-ie8.css"><![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<?php
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); 
	wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<div class="section header">
  <header class="container" role="banner">
  	<div class="sixteen columns">
        <a href="#main" class="visuallyhidden focusable" id="skiptomain">Skip to content</a>
        <div id="site-title">
        <h1><a href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <p id="tagline"><?php bloginfo( 'description' ); ?></p>
        </div><!--#site-title-->
        <div id="main-search-box" role="search"><?php  get_search_form() ?></div>
    </div><!--.sixteen.columns-->
  </header>
</div><!--.section-->
<div class="section mainmenu">
  <div class="sixteen columns alpha omega"> 
		<?php 
      wp_nav_menu( array( 
				'theme_location' => 'primary', 
				'container' => 'nav',
				'container_class' => 'container menus',
				'container_id' => 'site-navigation',
				'menu_class' => 'mdd-menu',
				'depth' => 2
			) );
    ?>
  </div>
</div><!--.section-->
<div class="section middle"><!-- content and sidebar -->
	<div class="container">