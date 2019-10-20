<?php
/**
 * @package Argent
 */
?>

<article id="post-<?php the_ID(); ?>" class="artist-page">
    <!-- if has featured -->
    <?php

    if(has_post_thumbnail()) {
        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "medium_large", true);
    }
    ?>

		
		<div class="entry-content artist-single">
			<div class="artist-single-image" style="background-image:url(<?php echo (($feat_image[0]))?>);"></div>
            <div class="artist-single-content">
            	<!-- Country (if used) -->
            	<?php if( get_field('country') ): ?>
            	<p class="country"><?php the_field('country'); ?></p>
        		<?php endif; ?>
				<!-- Title -->
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="artist-content">
					<!-- Content -->
					<?php the_content(); ?>
				</div>
			</div>
		</div><!-- .entry-content -->
</article><!-- #post-## -->
