<?php
/**
 * The template for displaying all single posts.
 *
 * @package Argent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
            
            <div id="tab-container" class="tab-container">
                <ul class='etabs'>
                    <?php if( get_field('bio') ): ?>
                    <li class='tab'><a href="#tabs1-bio"><h4>Bio</h4></a></li>
                    <?php endif; ?>
                    <?php if( get_field('songs') ): ?>
                    <li class='tab'><a href="#tabs1-songs"><h4>Song list</h4></a></li>
                    <?php endif; ?>
                    <?php if( get_field('demo') ): ?>
            		<li class='tab'><a href="#tabs1-demo"><h4>Demo</h4></a></li>
            		<?php endif; ?>
                    <?php if( have_rows('testimonial') ): ?>
                    <li class='tab'><a href="#tabs1-testimonials"><h4>Testimonials</h4></a></li>
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
                
                <!-- Show Bio if there is one -->
                <?php if( get_field('songs') ): ?>
                <div id="tabs1-songs" class="tab-content">
                    <article class="artist-page songs">
                        <?php the_field('songs'); ?>
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
                
                <!-- Show Testimonials if there are any -->
                <?php if( have_rows('testimonial') ): ?>
                <div id="tabs1-testimonials" class="tab-content">	
                    <article class="artist-page testimonial">
                        <div class="flexslider">
                            <ul class="slides">
                            <?php
                            $rows = get_field('testimonial');
                            if($rows) {
                                foreach($rows as $row) {
                                    $output = "<li>\n";
                                    $output .= "  <p class='testimonial-text'>". $row['words'] ."</p>\n";
                                    $output .= "  <small>" . $row['person'] . "</small>";
                                    $output .= "</li>\r\n\n";
                                    echo $output;
                                }
                            }
        
                            ?>
                            </ul>
                        </div>
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
