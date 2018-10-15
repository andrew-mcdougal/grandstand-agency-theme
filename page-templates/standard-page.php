<?php
/**
 * Template Name: Standard Page
 *
 * @package Argent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>       
            
            <h1 class="page-title"><?php echo get_the_title(); ?></h1>        
			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
