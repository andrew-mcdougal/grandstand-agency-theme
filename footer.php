<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Argent
 */
?>
    <div id="secondary" class="footer-widget-area widget-area" role="complementary">
      
      <!-- naviagation -->
      <nav id="site-navigation" class="main-navigation header-element" role="navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'argent' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      </nav>
      
    </div><!-- #secondary -->
    <?php get_sidebar(); ?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
        	&copy; <?php echo date("Y") ?> Grandstand Agency
			<span class="sep"> | </span>
			site by <a href="http://ontrendwebsites.com" target="_blank" title="onTrend websites - Mobile friendly WordPress design and development">onTrend websites</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,900|Quicksand:400,700" rel="stylesheet">

<?php wp_footer(); ?>

</body>
</html>
