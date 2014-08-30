<?php
/**
 * @package faith2015
 */
?>
<div class="widget-area" role="complementary">
	<h2 class="visuallyhidden">Sidebar</h2>
  <p id="tagline"><?php bloginfo( 'description' ); ?></p>
	<?php if ( ! dynamic_sidebar( 'Sidebar Widgets' ) ) : ?>
  	<aside id="archives" class="widget">
    	<h3 class="widget-title">Archives</h3>
      <ul>
      	<?php wp_get_archives('type=monthly&limit=12'); ?>
      </ul>
    </aside>
    <aside id="meta" class="widget">
      <h3 class="widget-title">Meta</h3>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </aside>
  <?php endif; // end sidebar widget area ?>
</div><!-- .widget-area -->
