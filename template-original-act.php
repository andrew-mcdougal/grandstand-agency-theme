<?php
/**
 * Template Name Posts: Original Act
 */
get_header(); ?>

	<div id="primary" class="content-area original-acts">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
            
            <div id="tab-container" class="tab-container">
                <ul class='etabs'>
                    <?php if( get_field('bio') ): ?>
                    <li class='tab'><a href="#tabs1-bio"><h4>About</h4></a></li>
                    <?php endif; ?>
                    <?php if( get_field('demo') ): ?>
            		<li class='tab'><a href="#tabs1-demo"><h4>Videos</h4></a></li>
            		<?php endif; ?>
            		<?php if( get_field('website') ): ?>
                    <li class='tab'><a href="#tabs1-songs"><h4>Links/Social</h4></a></li>
                    <?php endif; ?>
                    
                    <?php if( get_field('press') ): ?>
                    <li class='tab'><a href="#tabs1-testimonials"><h4>Press</h4></a></li>
            		<?php endif; ?>
                    
                </ul>
                
                <!-- Show Bio if there is one -->
                <?php if( get_field('bio') ): ?>
                <div id="tabs1-bio" class="tab-content">
                    <article class="artist-page bio">
                        <?php the_field('bio'); ?>
                    </article>
                </div>
                <?php endif; ?>
                <!-- Show Demo if there is one -->
                <?php if( get_field('demo') ): ?>
                <div id="tabs1-demo" class="tab-content">
                    <article class="artist-page demo">
                        <?php the_field('demo'); ?>
                    </article>
                </div>
                <?php endif; ?>
                <!-- Show Bio if there is one -->
                <?php if( get_field('website') ): ?>
                <div id="tabs1-songs" class="tab-content">
                    <article class="artist-page songs">
                        <div class="social-link">
                            <a href="<?php the_field('website'); ?>" target="_blank">
                        	   <i class="fa fa-link" aria-hidden="true"></i>
                            
                            </a>
                            <p>website</p>
                        </div>

						<?php if( get_field('facebook') ): ?>
						<div class="social-link">
                            <a href="<?php the_field('facebook'); ?>" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <p>facebook</p>
                        </div>
						<?php endif; ?>

						<?php if( get_field('twitter') ): ?>
    					<div class="social-link">
                        	<a href="<?php the_field('twitter'); ?>" target="_blank">
    							<i class="fa fa-twitter" aria-hidden="true"></i>
    						</a>
                            <p>twitter</p>
                        </div>
						<?php endif; ?>

						<?php if( get_field('instagram') ): ?>
						<div class="social-link">
                            <a href="<?php the_field('instagram'); ?>" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <p>instagram</p>
                        </div>
						<?php endif; ?>

						<?php if( get_field('soundcloud') ): ?>
						<div class="social-link">
                            <a href="<?php the_field('soundcloud'); ?>" target="_blank">
                                <i class="fa fa-soundcloud" aria-hidden="true"></i>
                            </a>
                            <p>soundcloud</p>
                        </div>
						<?php endif; ?>

						<?php if( get_field('itunes') ): ?>
						<div class="social-link">
                            <a href="<?php the_field('itunes'); ?>" target="_blank">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                            </a>
                            <p>iTunes</p>
                        </div>
						<?php endif; ?>

						<?php if( get_field('spotify') ): ?>
						<div class="social-link">
                            <a href="<?php the_field('spotify'); ?>" target="_blank">
                                <i class="fa fa-spotify" aria-hidden="true"></i>
                            </a>
                            <p>spotify</p>
                        </div>
						<?php endif; ?>

                    </article>
                </div>
                <?php endif; ?>
                <!-- Show Testimonials if there are any -->
                <?php if( get_field('press') ): ?>
                <div id="tabs1-testimonials" class="tab-content">
                    <article class="artist-page testimonial">
                        <?php the_field('press'); ?>
                    </article>
                </div>
                <?php endif; ?>
            </div>

            <!-- Add related acts from same category -->
            <?php
                if ( is_single()) {
                    $categories = get_the_category();
                        if ($categories) {
                            foreach ($categories as $category) {



                                $cat = $category->cat_ID;
                                $args=array(
                                'cat' => $cat,
                                'order' =>DESC,
                                'orderby' => rand,
                                'post__not_in' => array($post->ID),
                                'posts_per_page'=>9999,
                                'caller_get_posts'=>1
                                );
                                $my_query = null;
                                $my_query = new WP_Query($args);
                                    if( $my_query->have_posts() ) {



                                    echo '<p>Check out our other '. $category->cat_name . '...</p>';
                                    echo '<ul class="related-acts">';
                                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                            <p><?php the_title(); ?></p>
                                        </a>
                                    </li>
                                     <?php
                                    endwhile;
                                }
                            }
                        } wp_reset_query(); 
                    }
            ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
