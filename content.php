<?php
/**
 * @package Argent
 */
?>

<article id="post-<?php the_ID(); ?>" class="artist-pod">

	<!-- Thumbnail and title -->
	<?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) : ?>
		<div class="artist-thumb-container">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			</a>
			<!-- Country (if used) -->
            <?php if( get_field('country') ): ?>
            	<p class="country"><?php the_field('country'); ?></p>
        	<?php endif; ?>
		</div>
        <?php else: ?>
        <div class="artist-thumb-container">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/grandstand-agency-logo-full.png" />
			</a>
		</div>
	<?php endif; ?>

	<?php the_title( sprintf( '<a class="title-link" href="%s"><h1 class="entry-title">', esc_url( get_permalink() ) ), '</h1></a>' ); ?>
	<!-- Thumbnail and title -->
    
    <!-- Artist info -->
	<div class="artist-excerpt">
        <?php the_content(); ?>
	</div>
    <!-- Artist info -->
    <!-- More info hover link -->
    <a class="more-info" href="<?php the_permalink(); ?>">More Info <i class="fa fa-share"></i></a>
</article><!-- #post-## -->
