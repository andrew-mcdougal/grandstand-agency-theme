<?php
/**
 * Template Name: Other Category Page
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

		<div class="category-container entertainment-page">
                <?php
                $args = array( 
                  'hide_empty'  => '0',
                  'orderby'     => 'menu_order',
                  'order'       => 'ASC',
                  'include'     => '1094, 1095, 1096, 1097, 1098'
                );
                $categories = get_categories($args);
                if($categories){
                    
                    foreach($categories as $category) {
                    
                    	echo '<div class="category-pod">'; // category pod
                    		echo '<a href="' . get_category_link( $category->term_id ) . '">'; // category link
                    			echo '<span class="front-cat-thumb">'; // category image container
						
									$imageArray = get_field('banner', 'category_'.$category->term_id);
									$imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
									$alt = get_field('alt_text', $category);
	 
									echo '<img src="' . $imageThumbURL . '" alt="' . $alt . '" title="' . $alt . '">'; // category image
								echo '</span>';
								echo '<div class="artist-excerpt">';
									echo '<h3>' . $category->name . '</h3>'; // category pod title
									echo '<p class="grabber">' . $category->description . '</p>'; // category description
								echo '</div>';
								//echo '<a class="more-info" href="' . get_category_link( $category->term_id ) . '">' . 'View Acts</a>';
							echo '</a>';
						echo '</div>'; // close category pod
					} 
				echo '</div>'; // close category container
				}    
			?>

			<!-- Secondary content -->
			<div>
				<hr />
				<?php the_field('secondary_content'); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
