<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package argent
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-50801394-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-50801394-2', { 'optimize_id': 'GTM-WDRBX9D'});
  </script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WZ8K7C4');</script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="apple-touch-icon" sizes="57x57" href="http://grandstandagency.com.au/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="http://grandstandagency.com.au/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="http://grandstandagency.com.au/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="http://grandstandagency.com.au/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="http://grandstandagency.com.au/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="http://grandstandagency.com.au/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="http://grandstandagency.com.au/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="http://grandstandagency.com.au/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="http://grandstandagency.com.au/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="http://grandstandagency.com.au/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="http://grandstandagency.com.au/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="http://grandstandagency.com.au/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="http://grandstandagency.com.au/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="http://grandstandagency.com.au/favicons/manifest.json">
  <link rel="shortcut icon" href="http://grandstandagency.com.au/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="msapplication-TileImage" content="http://grandstandagency.com.au/favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="http://grandstandagency.com.au/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZ8K7C4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=146512698822022";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="hfeed site remodal-bg">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'argent' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="header-wrapper">
      <!-- logo -->
      <a class="header-home-logo header-element" href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/svg/grandstand-logo.svg"><span>Grandstand Agency</span>
      </a>

      <!-- naviagation -->
      <nav id="site-navigation" class="main-navigation header-element" role="navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'argent' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      </nav>

      <!-- search -->
      <form class="search-form header-search header-element" action="http://grandstandagency.com.au/" method="get" role="search">
        <label class="search-text-field">
          <span class="screen-reader-text">Search event type, band type etc.</span>
          <input title="Search for:" name="s" value="" placeholder="Search event type, band type etc." class="search-field" type="search">
        </label>
        <button class="search-form-submit" type="submit">
          <i class="fa fa-search"></i>
          <p>Search</p>
        </button>
      </form>
    </div>
  </header><!-- #masthead -->
  <!-- entertainment menu -->
  <div class="header-menu-bottom-wrapper">
    <div class="header-menu-large header-element">
      <p>Browse Entertainment <i class="fa fa-chevron-down"></i></p>
      <div class="entertainment-menu">

        <?php
        hierarchical_category_tree( 0 ); // the function call; 0 for all categories; or cat ID  

        function hierarchical_category_tree( $cat ) {
          $next = get_categories('hide_empty=0&orderby=menu_order&order=ASC&parent=' . $cat);

          if( $next ) :    
            foreach( $next as $cat ) :
            echo '<ul><li><a href="' . get_category_link( $cat->term_id ) . '" title="' . sprintf( __( "View all acts in %s" ), $cat->name ) . '" ' . '>' . $cat->name . '</a>';
            ; 
            hierarchical_category_tree( $cat->term_id );
            endforeach;    
          endif;

          echo '</li></ul>'; echo "\n";
        }  
        ?>
      </div>
    </div>
  </div>

  <div class="remodal" data-remodal-id="modal-register">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>We love to hear from new talent.</h1>
    <p>Please provide as much of the below information and materials as possible.</p>
    <br>
    <?php
      echo do_shortcode('[contact-form-7 id="5030" title="Artist register"]');
    ?>
    <button data-remodal-action="cancel" class="button button-grey button-small">Close</button>
  </div>

  <div class="remodal" data-remodal-id="modal-contact">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Ready to book your band?</h1>
    <p>Fill in the form and we’ll get right on it.</p>
    <br>
    <?php
      echo do_shortcode('[contact-form-7 id="5021" title="Main booking"]');
    ?>
    <button data-remodal-action="cancel" class="button button-grey button-small">Close</button>
  </div>

  

  <div id="content" class="site-content">