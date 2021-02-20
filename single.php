<?php
/**
 * The template for displaying all single posts.
 *
 * @package Argent
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'single' ); ?>
            
      <div id="tab-container" class="tab-container">
        <ul class='etabs'>
          <?php if( get_field('bio') ):
          echo '<li class="tab"><a href="#tabs1-bio">Bio</a></li>';
          endif;
          
          if( get_field('songs') ):
          echo '<li class="tab"><a href="#tabs1-songs">Song list</a></li>';
          endif;
          
          if( get_field('demo') ):
          echo '<li class="tab"><a href="#tabs1-demo">Demo</a></li>';
          endif;
          
          if( have_rows('testimonial') ):
          echo '<li class="tab"><a href="#tabs1-testimonials">Testimonials</a></li>';
          endif; ?>
        </ul>
                
        <!-- Show content if any -->
        <?php if( get_field('bio') ): ?>
        <div id="tabs1-bio" class="tab-content">
          <article class="artist-page bio">
            <?php the_field('bio'); ?>
          </article>
        </div>
        <?php endif; ?>
        
        <?php if( get_field('songs') ): ?>
        <div id="tabs1-songs" class="tab-content">
          <article class="artist-page songs">
            <script>
            // search songlist
            function searchSongs() {
              // Declare variables
              var input, filter, ul, songPara, a, i, txtValue;
              input = document.getElementById('myInput');
              filter = input.value.toUpperCase();
              ul = document.getElementById("myUL");
              songPara = ul.getElementsByTagName('p');

              // Loop through all list items, and hide those who don't match the search query
              for (i = 0; i < songPara.length; i++) {
                a = songPara[i];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  songPara[i].style.display = "";
                } else {
                  songPara[i].style.display = "none";
                }
              }
            }
            </script>

            <input type="text" id="myInput" onkeyup="searchSongs()" placeholder="Search for song names or artists..">
            <div id="myUL">
              <?php the_field('songs'); ?>
            </div>
          </article>
        </div>
        <?php endif; ?>

                
        <?php if( get_field('demo') ): ?>
        <div id="tabs1-demo" class="tab-content">    
          <article class="artist-page demo">
            <?php the_field('demo'); ?>
          </article>
        </div>
        <?php endif; ?>
                
                
        <?php if( have_rows('testimonial') ): ?>
        <div id="tabs1-testimonials" class="tab-content"> 
          <article class="artist-page testimonial">
            <div class="flexslider">
              <ul class="slides">
              <?php
              $rows = get_field('testimonial');
              if($rows) {
                foreach($rows as $row) {
                  $output = "<li>\n";
                  $output .= "  <p class='testimonial-text'>". $row['words'] ."</p>\n";
                  $output .= "  <small>" . $row['person'] . "</small>";
                  $output .= "</li>\r\n\n";
                  echo $output;
                }
              }
              ?>
              </ul>
            </div>
          </article>
        </div>
        <?php endif; ?>

        <button class="button-default" data-remodal-target="modal-booking">Book this act</button>

        <hr class="hr-grey">
                
      </div>

<?php
$categories = get_the_category();
 
if ( ! empty( $categories ) ) {
    $category_name = esc_html( $categories[0]->name );
    echo '<h4 class="more-acts-para">Check out more ' . $category_name . ':</h4>';
    echo do_shortcode('[ajax_load_more post_type="post" category="' . $category_name . '" scroll="false" posts_per_page="6"]');

    echo '<span class="visually-hidden cat-name-hidden">' . $category_name . '</span>';
    echo '<span class="visually-hidden act-name-hidden">' . get_the_title() . '</span>';
}
?>
    <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>