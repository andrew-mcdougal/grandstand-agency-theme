<?php
/**
 * Template Name: Front Page
 *
 * @package Argent
 */
get_header(); ?>
  <div class="background-image-fade-wrapper">
    <div 
      class="background-image-fade" 
      style="
      background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 20%, rgba(255, 255, 255, 1)), url('<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>')"
      >
      </div>

      <div class="home-event-select">
        <p>Show me</p>
        <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
          <?php
          $args = array(
              'orderby'       => 'name',
              'echo'          => 0,
              'hierarchical'  => 1,
              'depth'         => 1,
          );
       
          $select  = wp_dropdown_categories( $args );
          $replace = "<select$1 onsubmit='return this.form.submit()'>"; 
          $select  = preg_replace( '#<select([^>]*)>#', $replace, $select );

          echo $select; 
          ?>

          <button class="button button-full" type="submit">Go</button>  
        </form>

        <a href="#home-welcome" class="more-content">
          <i class="fa fa-chevron-down"></i>
          more
        </a>
      </div>


  </div>
  <div id="primary" class="content-area home-page">
    <main id="main" class="site-main" role="main">
    
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="page-content">
        <div class="row">
          <div class="columns twelve home-content home-content-1">
            <?php the_field('home_content', false, false); ?>
          </div>
        </div>
        <div class="row">
          <div class="columns twelve home-content home-content-2">
            <?php the_field('home_content_bottom'); ?>
          </div>
        </div>
      </div>

    <?php endwhile; // end of the loop. ?>
    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>