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
      </header><!-- .page-header -->
      <hr />
      <?php endif; ?> 

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

          $children = get_terms( $term->taxonomy, array(
              'parent'    => $term->term_id,
              'hide_empty' => false
          ) );

          //var_dump($children);
          
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
            <a href="<?php echo $subcat_link; ?>" class="artist-thumb-container" style="background-image: url(<?php echo $subcat_image['url']; ?>)"></a>
            <a class="title-link" href="<?php echo $subcat_link; ?>"><?php echo $subcat_name; ?></a>
            <a class="more-info" href="<?php echo subcat_link; ?>">View Acts <i class="fa fa-music"></i></a>
          </article>
          <?php } ?>
        </div>
      </div>
      <?php
      } }
      else { // if not a parent categorry, show the acts
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