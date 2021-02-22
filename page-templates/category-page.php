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
        'parent'      => 0
      );

      $categories = get_categories($args);
      
      if($categories) {

        echo '<div class="acts-wrapper-inner">';
      
        foreach($categories as $category) { 

          $imageArray = get_field('banner', 'category_'.$category->term_id);
          $imageThumbURL = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
          $alt = get_field('alt_text', $category);
          $categoryLink = get_category_link( $category->term_id );
          $categoryName = get_cat_name( $category->term_id );
          $categoryDescription = category_description( $category );

          //var_dump($category);

          echo '<article class="artist-pod">';
            echo '<a class="artist-thumb-container" href="' . $categoryLink . '" style="background-image: url(' . $imageThumbURL . ');"></a>';
            echo '<a class="title-link" href="' . $categoryLink . '">' . $categoryName . '</a>';
            echo '<div class="artist-excerpt">' . $categoryDescription . '</div>';
            echo '<a class="more-info" href="' . $categoryLink . '">More info</a>';

          echo '</article>';

        } // foreach

        echo '</div>';
      } // if 
      ?>

      </div>

      <!-- Secondary content -->
      <div>
        <hr />
        <?php the_field('secondary_content'); ?>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
