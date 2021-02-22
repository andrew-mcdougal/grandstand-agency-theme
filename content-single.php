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
        <button class="button-default" data-remodal-target="modal-booking">Bookings</button>
        <p><a href="#tab-container">Keep scrolling for more details</a></p>

      </div>
    </div>
    <img src="<?php echo (($feat_image[0]))?>" />
  </div><!-- .entry-content -->
</article><!-- #post-## -->

<div class="remodal" data-remodal-id="modal-booking">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>Make a booking enquiry</h1>
  <p>Add your details and fill out as much info on your event or venue. We'll be in touch soon!</p>
  <br>
  <?php
    echo do_shortcode('[contact-form-7 id="5021" title="Main booking"]');
  ?>
  <button data-remodal-action="cancel" class="button button-grey button-small">Close</button>
</div>