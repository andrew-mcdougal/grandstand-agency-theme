<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Argent
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-content">
		<?php the_content(); ?>
	</div><!-- .page-content -->
</article><!-- #post-## -->
