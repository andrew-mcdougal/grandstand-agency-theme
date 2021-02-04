<?php
/**
 * Template Name: Category Page
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
        'exclude'     => '1094, 1095, 1096, 1097, 1098, 1159, 54'
      );
      $categories = get_categories($args);
      
      if($categories) {
      
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
            echo '</div>';
          echo '</a>';
        echo '</div>'; // close category pod
      } } ?> 
        <div class="category-pod">
          <a href="https://grandstandagency.com.au/other-entertainment" style="height: 150px;">
            <span class="front-cat-thumb">
              <img src="https://grandstandagency.com.au/website2/wp-content/uploads/2020/08/grandstand-agency-perth-category-roving-performers-600x400.jpg" alt="Other entertainment event hire Perth" title="Other entertainment event hire Perth">
            </span>
          </a>
          <div class="artist-excerpt">
            <a href="https://grandstandagency.com.au/other-entertainment" style="height: 150px;">
              <h3>Other Entertainment</h3>
            </a>
          </div>
        </div>
      </div>

      <!-- Secondary content -->
      <div>
        <hr />
        <?php the_field('secondary_content'); ?>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
