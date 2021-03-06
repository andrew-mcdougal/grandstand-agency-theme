<?php 
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


if(false === get_option("medium_crop"))
    add_option("medium_crop", "1");
else
    update_option("medium_crop", "1");

/**
 * Move jQuery to the footer. 
 */
function wpse_173601_enqueue_scripts() {
    wp_scripts()->add_data( 'jquery', 'group', 1 );
    wp_scripts()->add_data( 'jquery-core', 'group', 1 );
    wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'wpse_173601_enqueue_scripts' );
	
	
/**
 * Proper way to enqueue scripts and styles
 */
function load_custom_script() {

    // Load scripts into footer
    //wp_enqueue_script( 'slick-script', get_stylesheet_directory_uri() . '/js/slick.min.js', array(), '', true ); // slick slider
	//wp_enqueue_script( 'equal-heights', get_stylesheet_directory_uri() . '/js/jquery.equalheights.js', '', '', true); // equal heights
	//wp_enqueue_script( 'tabs-js', get_stylesheet_directory_uri() . '/js/jquery.easytabs.js', '', '', true ); // tabs
	//wp_enqueue_script( 'haschange-js', get_stylesheet_directory_uri() . '/js/jquery.hashchange.min.js', '', '', true ); // hashchange
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', '', true ); // custom
    wp_enqueue_script( 'modal-js', get_stylesheet_directory_uri() . '/assets/js/remodal.js', '', true ); // custom
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', '', true ); // custom
	
    // Styles
    wp_enqueue_style( 'modal-style', get_stylesheet_directory_uri() . '/assets/css/remodal.css', array(), '' );
    wp_enqueue_style( 'modal-theme-style', get_stylesheet_directory_uri() . '/assets/css/remodal-default-theme.css', array(), '' );
    //wp_enqueue_style( 'slick-theme-style', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), '' ); // Slick slider theme css
    //wp_enqueue_style( 'skeleton-style', get_stylesheet_directory_uri() . '/css/skeleton-lite.css?v=10', array(), '' ); // Skeleton grid
    //wp_enqueue_style( 'ontrend-styles', get_stylesheet_directory_uri() . '/css/ontrendwebsites2.css?v=4' ); // ontrend v 2
    //wp_enqueue_style( 'custom-styles', get_stylesheet_directory_uri() . '/css/custom.css?v=2' ); // custom

    //wp_enqueue_style( 'custom-styles', get_stylesheet_directory_uri() . '/css/combined.css'); // combined all styles
}
add_action( 'wp_enqueue_scripts', 'load_custom_script' );


// load styles into footer
function prefix_add_footer_styles() {
    wp_enqueue_style( 'custom-styles', get_stylesheet_directory_uri() . '/css/combined.css?v=1', '', '1.3'); // combined all styles
    wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' ); // fontawesome
};
add_action( 'get_footer', 'prefix_add_footer_styles' );









// Add class to body for css overriding
function my_plugin_body_class($classes) {
    $classes[] = 'ontrend';
    return $classes;
}



function the_breadcrumb() {

    $sep = ' <i class="fa fa-chevron-right"></i> ';

    if (!is_front_page()) {

        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">Home';
        echo '</a>' . $sep;

        if (is_category() || is_single() ){

             if( is_category() )
            {

                echo '<a href="' . esc_url( home_url( '' ) ) . '/entertainment/">Entertainment</a>' . $sep;
                single_term_title();
            }
            elseif (is_single() )
            {

                echo '<a href="../entertainment/">Entertainment</a>' . $sep;
                $cats = get_the_category( get_the_ID() );
                $cat = array_shift($cats);
                echo '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $cat->name ) ) . '">'. $cat->name .'</a>';
                echo "  ";
                
            }

        	

            
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }

        if (is_single()) {
            echo $sep;
            the_title();
        }

        if (is_page()) {
            echo the_title();
        }

        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}

// header email link in nav
function add_last_nav_item($items) {
  return $items .= '<li><button data-remodal-target="modal-contact"><img src="' . get_stylesheet_directory_uri() . '/assets/svg/music.svg"> Contact</button></li>';
}
add_filter('wp_nav_menu_items','add_last_nav_item');


if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'new-size', 450, 200, array( 'center', 'top' ) ); // Hard crop left top
}
add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
$addsizes = array(
"new-size" => __( "Single Artist page")
);
$newsizes = array_merge($sizes, $addsizes);
return $newsizes;
}


add_filter( 'wp_list_categories', function( $html ) {
    return str_replace( ' current-cat', ' active', $html );
});









?>