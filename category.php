<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Argent
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if (is_category( )) {

      $thiscat = get_category( get_query_var( 'cat' ) );
      $catid = $thiscat->cat_ID;
      //create array from get_category_parents
      $parent_list = (explode (',',get_category_parents($catid,false,',')));
      $parent_name = ($parent_list[0]);
      $parent = get_cat_ID( $parent_name );
      $catname = $thiscat->name;

      $catlist = get_categories(
        array(
        'child_of' => $parent,
        'orderby' => 'id',
        'order' => 'DESC',
        'exclude' => $catid,
        'hide_empty' => '0'
        ) );
        
        //check if current category is parent category
        if ( $catid == $parent ) {
          $term = get_queried_object();

          echo '<header class="category-header-wrapper">';
            echo '<h1 class="page-title">' . get_cat_name($catid) . '</h1>';
            echo '<div class="category-page-category-list">';
              echo '<p class="parent-category"><a href="' . get_category_link($catid) . '">' . get_cat_name($catid) . '</a></p>';
              echo '<ul>';

              $children = get_terms( $term->taxonomy, array(
                'parent'    => $term->term_id,
                'hide_empty' => true
              ) );
  
              if ( $children ) {
                foreach( $children as $subcat ) {
                  echo '<li><a href="' . get_category_link($subcat) . '">' . $subcat->name . '</a></li>';
              }
            }


            echo '</ul></div>';
          echo '</header><hr />';
          
          // if this is parent category
          if ( $children ) { ?>
        <div id="acts-wrapper">
          <h2>Choose your <?php echo $catname; ?> flavour:</h2>
          <div class="acts-wrapper-inner">
          <?php foreach( $children as $subcat ) { 
            // subcategory variables to use
            $subcat_name = $subcat->name; // name
            $subcat_link = get_category_link( $subcat ); // link
            $subcat_image = get_field('banner', $subcat); // ACF image
          ?>
          <article id="post-2770" class="artist-pod">
            <a href="<?php echo $subcat_link; ?>" class="artist-thumb-container" style="background-image: url(<?php 

            if ($subcat_image) {
              echo $subcat_image['url'];
            } else {
              echo get_stylesheet_directory_uri() . '/img/grandstand-agency-new-2021.png';
            }

            
            ?>)"></a>
            <a class="title-link" href="<?php echo $subcat_link; ?>"><?php echo $subcat_name; ?></a>
            <a class="more-info" href="<?php echo $subcat_link; ?>">View Acts <i class="fa fa-music"></i></a>
          </article>
          <?php } ?>
        </div>
      </div>
      <?php
      } }
      else { // if not a parent category, show the acts

      echo '<header class="category-header-wrapper">';
        echo '<h1 class="page-title">' . get_cat_name($catid) . '</h1>';
        echo '<div class="category-page-category-list">';
          echo '<p class="parent-category"><a href="' . get_category_link($parent) . '">' . $parent_name . '</a></p>';
          echo '<p>' . $catname . '</p>';
        echo '</div>';
      echo '</header><hr />';
?> 
      <?php /* Start the Loop */ ?>
      <?php if ( have_posts() ) : ?>
      <div id="acts-wrapper">
        <h2><?php single_cat_title(); ?> for hire</h2>
        <div class="acts-wrapper-inner">
          <?php while ( have_posts() ) : the_post();
          get_template_part( 'content', get_post_format() );
          endwhile;
          ?>
        </div>
      </div>
      <hr class="hr-grey hr-small" />
      <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
      <?php the_posts_navigation(); ?>
      <?php endif; } } ?>

    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>