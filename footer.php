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
  <h1 class="widget-title">Entertainment quick links</h1>
  <div class="widget-wrapper">
    <ul class="widget_categories" style="list-style-type: none;">
      <?php
      $count = '';

      $category1 = get_category('1094');
      $category2 = get_category('1095');
      $category3 = get_category('1096');
      $category4 = get_category('1097');
      $category5 = get_category('1098');
      $category6 = get_category('1159');

      $count = $category1->category_count + $category2->category_count + $category3->category_count + $category4->category_count + $category5->category_count + $category6->category_count;

      $othernumber = $othercategories->category_count;
      $categories = get_categories( array(
        'orderby' => 'menu_order',
        'order'   => 'ASC',
        'exclude' => '54, 1094, 1095, 1096, 1097, 1098, 1159'
      ) );
      
      foreach( $categories as $category ) {
        $category_link = sprintf( 
          '<a href="%1$s" alt="%2$s">%3$s</a>',
          esc_url( get_category_link( $category->term_id ) ),
          esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
          esc_html( $category->name )
        );

        echo '<li class="cat-item">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li> ';
      } ?>
      <li><a href="/other-entertainment">Other Entertainment</li>

      </ul>
  </div><!-- .widget-wrapper -->
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
