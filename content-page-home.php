<?php
/**
 * Template name: Home Page
 *
  * @package Argent
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="page-header">
	<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
</header><!-- .page-header -->

	
	<?php
$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
    echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br />';
}
?>

	<div class="page-content">
		<?php the_content(); ?>
	</div><!-- .page-content -->

</article><!-- #post-## -->