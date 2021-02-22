<?php
/**
 * @package Argent
 */
?>

<article id="post-<?php the_ID(); ?>" class="artist-pod">

  <!-- Thumbnail -->
  <?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) : ?>
  <a href="<?php the_permalink(); ?>" class="artist-thumb-container" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></a>
    
  <?php else: ?>
  <a href="<?php the_permalink(); ?>" class="artist-thumb-container" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/grandstand-agency-logo-full.png)"></a>

  <?php endif; ?>

  <!-- Title -->
  <?php the_title( sprintf( '<a class="title-link" href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>
  
    
  <!-- Artist info -->
  <div class="artist-excerpt">
    <?php the_content(); ?>
  </div>
  
  <!-- More info hover link -->
  <a class="more-info" href="<?php the_permalink(); ?>">More Info <i class="fa fa-info"></i></a>
</article>
