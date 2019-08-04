<?php
/**
 * Template Name: Front Page
 *
 * @package Argent
 */
get_header(); ?>
	<div id="primary" class="content-area home-page">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="page-content">
				<?php if ( '' != get_the_content() ) : ?>
			
				<div class="welcome-text">
					<?php the_content(); ?>
					<div class="row">
						<div class="columns twelve">
							<?php the_field('home_content'); ?>
						</div>
					</div>
					<!-- slider -->
					<div class="row secondary-container">
						<div class="columns six">
							<!-- Slider ACF Repeater -->
						    <?php if( have_rows('slider') ): ?>

							<ul class="home-slides">

							<?php while( have_rows('slider') ): the_row(); 

								// vars
								$image = get_sub_field('image');
								$medium_image = 'medium';
								$image_display = wp_get_attachment_image_src( $attachment_id, $medium_image );
								$detail = get_sub_field('detail');
								?>

								<li class="slider-single">
									<div class="image-container">
										<img class="slide-image" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>" />
										<p><?php echo $detail; ?></p>
									</div>
								</li>

							<?php endwhile; ?>

							</ul>

							<?php endif; ?>
							<!-- End Slider ACF Repeater -->
						</div>
						<!-- secondary content -->
						<div class="columns six secondary-content">
							<?php the_field('home_content_2'); ?>
						</div>
					</div>

					<div class="row">
						<div class="columns twelve">
							<?php the_field('home_content_bottom'); ?>
						</div>
					</div>
                </div>
                <?php endif; ?>
			</div>

		<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>