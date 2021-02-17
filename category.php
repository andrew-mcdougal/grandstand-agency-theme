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
        
    <?php if ( have_posts() ) : ?>

      <header class="category-header-wrapper">
        <h1 class="page-title"><?php single_cat_title(); ?></h1>
        <div class="category-page-category-list">
          <?php wp_list_categories('orderby=name&title_li=');?>
        </div>
        <hr class="hr-grey hr-small" />
        <div class="grid-layout grid-layout--two-columns-2-1 .grid-layout--gap-2">
          <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
          <?php 
            // get the current taxonomy term
            $term = get_queried_object();
            // vars
            $image = get_field('banner', $term);
            $alt = get_field('alt_text', $term);
            echo '<img src="' . $image['url'] . '" alt="' . $alt . '" title="' . $alt . '" />';
          ?>
          <p><a href="#acts-wrapper">Scroll down to see our <?php single_cat_title(); ?></a></p>
        </div>
      </header><!-- .page-header -->
      <hr />
      <?php /* Start the Loop */ ?>
      <div id="acts-wrapper">
        <h4><?php single_cat_title(); ?> for hire</h4>
        <div class="acts-wrapper-inner">
          <?php while ( have_posts() ) : the_post();
          get_template_part( 'content', get_post_format() );
          endwhile;
          ?>
        </div>
      </div>
      <?php the_posts_navigation(); ?>
      <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>