<?php
/**
 * @package Argent
 */
?>

<article id="post-<?php the_ID(); ?>" class="artist-page">
  <!-- if has featured -->
  <?php
  if(has_post_thumbnail()) {
    $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
  }
  ?>
  <div class="entry-content artist-single grid-layout grid-layout--two-columns-1-2 grid-layout--gap-4">
    <div class="artist-single-content">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      <div class="artist-content">
        <?php the_content(); ?>
        <p><a href="#tab-container">Keep scrolling for more details</a></p>
      </div>
    </div>
    <img src="<?php echo (($feat_image[0]))?>" />
  </div><!-- .entry-content -->
</article><!-- #post-## -->