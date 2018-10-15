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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'argent' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'argent' ); ?></button>
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<a class="header-facebook" href="https://www.facebook.com/grandstandagency/"  target="_blank" onClick="ga('send', 'event', { eventCategory: 'Header', eventAction: 'click', eventLabel: 'Facebook icon'});"><i class="fa fa-facebook"></i></a>

	</header><!-- #masthead -->

	<div class="header-search">
		<div class="header-search-inner container">
			<aside id="search-2" class="widget widget_search header-search-box">
				<form action="http://grandstandagency.com.au/" class="search-form" method="get" role="search">
				    <label class="search-text-field">
				        <span class="screen-reader-text">Search event type, band type etc.</span>
				        <input title="Search for:" name="s" value="" placeholder="Search event type, band type etc." class="search-field" type="search">
				    </label>
				    <label for="searchSubmit" class="search-button">
				    	<i class="fa fa-search"></i>
				        <p>Search</p>
				    </label>
				    <input id="searchSubmit" value="Search" class="search-submit" type="submit">
				</form>
			</aside>
			<ul class="category-links">

			<?php
			$categories = get_categories( array(
				'orderby' => 'menu_order',
				'order'   => 'ASC'
			) );
			
			foreach( $categories as $category ) {
				$category_link = sprintf( 
					'<a href="%1$s" alt="%2$s">%3$s <span class="post-count">' . $category->count . '</span></a>',
					esc_url( get_category_link( $category->term_id ) ),
					esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
					esc_html( $category->name )
				);

				echo '<li>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li> ';
			} ?>

			</ul>
		</div>
	</div>

	<div id="content" class="site-content">
		<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
			//yoast_breadcrumb();
		}
		?>


<?php the_breadcrumb() ?>