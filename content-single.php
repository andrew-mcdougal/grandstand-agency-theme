<?php
/**
 * @package Argent
 */
?>

<article id="post-<?php the_ID(); ?>" class="artist-page">
		
		<div class="entry-content artist-single">
			<div class="artist-single-image">
				<span class="artist-thumb">
                <!-- Thumbnail -->
                <?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) { the_post_thumbnail( 'band' ); } ?>
            	</span>
            </div>

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
