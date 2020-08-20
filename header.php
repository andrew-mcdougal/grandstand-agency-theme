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

<style type="text/css">
@charset "UTF-8";
.main-navigation a{text-transform:uppercase}.category-links,ul{list-style:none}.main-navigation a,a{text-decoration:none}a,body,div,form,h1,h2,html,iframe,label,li,p,span,ul{font-family:inherit;font-size:100%;font-weight:inherit;font-style:inherit;margin:0;padding:0;vertical-align:baseline;border:0;outline:0}h2{line-height:1;margin-bottom:1em}p{margin-bottom:1.7778em}html{font-size:62.5%;overflow-y:scroll;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;box-sizing:border-box}aside,header,main,nav{display:block}body,button,input{color:#404040;font-family:Merriweather,sans-serif;font-size:20px;font-size:2rem;line-height:1.7778}h1,h2{font-family:Quicksand,sans-serif;font-weight:700}h1{font-size:40px;font-size:4rem;line-height:1.6;margin-bottom:.8em}h2{font-size:36px;font-size:3.6rem}p:last-child{margin-bottom:0}i{font-style:italic}*,:after,:before{box-sizing:inherit}body{background:#fff}ul{margin:0 0 1.7778em 1em}ul{list-style-type:disc}img{height:auto;max-width:100%}button,input[type=submit]{background:0 0;border:2px solid #999;color:rgba(0,0,0,.5);display:inline-block;font-size:14px;font-size:1.4rem;height:2.9em;letter-spacing:.03em;padding:0 24px;text-transform:uppercase}input[type=search]{font-size:16px;font-size:1.6rem;border:2px solid #999}input[type=search]{height:2.5em;padding:0 7px}a{color:#999}.page-content a{border-bottom:2px solid transparent}.main-navigation{background:#000;clear:both;display:block;padding:.8889em 0;width:100%}.main-navigation ul{margin:0}.main-navigation ul li{border-bottom:1px solid rgba(255,255,255,.3);padding:0}.main-navigation ul li:last-child{border-bottom:none;padding-right:0}.main-navigation a{font-family:Quicksand,sans-serif;color:#fff;display:block;font-size:15px;font-size:1.5rem;line-height:2;letter-spacing:.03em;padding:.3889em 0 .3889em 1.5556em}.menu-toggle{color:#fff;display:block;margin:0 auto}.menu-toggle:before{border:none;content:'\f419';display:inline-block;padding-right:8px;font-family:Genericons;font-weight:400;font-style:normal;vertical-align:top}.main-navigation ul{display:none}.screen-reader-text{clip:rect(1px,1px,1px,1px);position:absolute!important;height:1px;width:1px;overflow:hidden}.site-content:after,.site-content:before,.site-header:after,.site-header:before{content:"";display:table}.site-content:after,.site-header:after{clear:both}.widget{margin:0 0 1.7778em;overflow:hidden}.widget input[type=submit]{border:2px solid #ccc;color:#ccc}.widget_search .search-field{width:100%}.widget_search .search-submit{display:none}.site-main{margin:3.5556em 0}.home .page-content:after{display:block;color:#ddd;content:'\002A \002A \002A \002A \002A';letter-spacing:25px;line-height:1;font-size:5rem;font-family:Arial,serif;margin:.64em 0;text-align:center;text-indent:25px}.page-content:last-child:after{display:none}.page .page-content{font-size:18px;font-size:1.8rem}.page-content{margin:.75em 0 0}iframe{max-width:100%}.page-content img{vertical-align:middle}@media screen and (max-width:600px){.menu-toggle{display:block}.main-navigation ul{display:none}}@media screen and (max-width:767px){.home .page-content{margin-right:2em;margin-left:2em}}@media screen and (min-width:768px){.page-content{width:660px;margin-right:auto;margin-left:auto}.menu-toggle{display:none}.main-navigation{padding:0}.main-navigation ul{display:block;list-style:none;margin:0;padding-left:0;text-align:center}.main-navigation ul li{border-bottom:none;display:inline-block;padding:.75em 1em .75em 0;position:relative}.main-navigation a{padding:.8889em 0}}.home .extra h2,.home .extra p{font-size:16px}.container,.header-logo{position:relative}.columns,.container{width:100%;box-sizing:border-box}.container{max-width:960px;margin:0 auto;padding:0 20px}.columns{float:left}@media (min-width:400px){.container{width:85%;padding:0}}@media (min-width:550px){.container{width:80%}.columns{margin-left:4%}.columns:first-child{margin-left:0}.four.columns{width:30.6666666667%}.eight.columns{width:65.3333333333%}.twelve.columns{width:100%;margin-left:0}}.container:after,.row:after{content:"";display:table;clear:both}.page-content{margin:0 auto;width:960px;padding:0}#content .page-content,#content .site-main{width:100%;max-width:960px;margin:1em auto;position:relative}.menu-main-container{max-width:960px;margin:auto}.header-logo{width:130px;height:130px;background:url(../img/grandstand-agency-logo-white.png) no-repeat;background-size:130px auto;text-indent:-9999px;left:-20px}.home .header-logo{display:none}.home .site-header .main-navigation ul li{padding:1em 1em .75em 0}.site-header .main-navigation ul li{padding:1.75em 1em .75em 0}.main-navigation .current_page_item a{color:#E23350}@media all and (max-width:767px){.header-logo{display:none}.home .site-header .main-navigation ul li{text-align:center;padding:.5em 1em .25em 0}}.home #content .home-page #main,.home-page #main .page-content{margin:0 auto}.home .extra{border:1px solid rgba(0,0,0,.3);padding:1em;margin-bottom:1em}.home .extra p{margin-bottom:.5em}.welcome-text img{width:40%;min-width:380px}@media all and (max-width:700px){.welcome-text img{width:40%;min-width:300px}}.welcome-text{margin:.5em 0 0}.home #content .site-main{margin:1em auto 0}.home #page .page-content::after{display:none}#main p a{color:#E23350;border-bottom:2px solid rgba(255,51,80,.3)}.search-field{border:none!important;border-radius:4px}.widget.widget_search{max-width:300px;margin:4em auto 3em;position:relative}.widget.widget_search input{-webkit-appearance:none;border-radius:4px;display:block;border:none!important;padding:6px 10px}#secondary .search-button p{display:none}@media all and (max-width:1050px){#content .site-main{width:94%}}@media all and (max-width:767px){#site-navigation .menu-toggle::before{content:"\f001";font-family:fontawesome}#site-navigation .menu-toggle{border:2px solid rgba(255,51,80,.5);color:rgba(255,255,255,.8)}}#primary h1,#primary h2{font-family:Quicksand,sans-serif;font-style:normal;font-weight:700;line-height:120%}#primary .welcome-text h1,#primary p{font-family:Merriweather,sans-serif}body{line-height:120%}.home .extra{box-sizing:border-box;line-height:130%;text-align:left;border-radius:5px}.header-facebook{position:absolute;top:35px;right:5px;background:#fff;width:25px;height:25px;font-size:18px;text-align:center;line-height:140%;border-radius:50%;color:#222}#primary .welcome-text .home-intro{display:flex;margin:3em auto}#primary .welcome-text .home-intro .columns{margin:auto}#primary .welcome-text h1{font-weight:300}#primary .welcome-text img{width:30%;min-width:300px}@media all and (max-width:920px){#primary .welcome-text .home-intro{margin:2em auto}#primary .welcome-text h1{font-size:2em}#primary .welcome-text img{width:100%;min-width:auto}}@media all and (max-width:650px){#primary .welcome-text .home-intro{margin:1em auto;display:block}#primary .welcome-text h1{font-size:1.5em}#primary .welcome-text img{width:100%;min-width:auto}.home .extra{margin-top:2em}}@media all and (max-width:550px){#primary .welcome-text .home-intro{text-align:center}#primary .welcome-text img{max-width:250px;margin:2em auto 0}}.header-search{background:rgba(0,0,0,.86);padding:.5em}.header-search .widget.widget_search{max-width:none;margin:0 auto;position:relative;border-radius:4px}.header-search form.search-form{width:255px}.header-search .widget.widget_search input{font-family:Merriweather,sans-serif;-webkit-appearance:none;border-radius:4px 0 0 4px;display:block;border:none!important;padding:22px 15px;font-size:.7em;box-sizing:border-box}@media all and (max-width:1080px){.header-search .widget.widget_search input{border-radius:4px}}.header-search .search-submit{border:none;width:40px;height:40px;position:absolute;top:0;right:0;text-indent:-9999px;padding:0;line-height:0;margin:0}.header-search .search-button{font-size:22px;position:absolute;right:0;top:0;z-index:3000;padding:10px 12px;border-radius:0 4px 4px 0;background:#ff3350}@media all and (max-width:1080px){.header-search .search-button{border-radius:4px}}.header-search .search-button .fa{color:#FFF;position:relative;top:-5px}.header-search .search-button p{color:#fff;position:absolute;bottom:-4px;font-size:10px;text-transform:lowercase;left:6px}.category-links,.header-search-box{display:inline-block;vertical-align:top}.header-search-box{width:30%}.category-links{width:65%}@media all and (max-width:1024px){.header-search-inner{text-align:center}.header-search-inner .category-links,.header-search-inner .header-search-box{display:block}.header-search-inner .header-search-box{width:300px}.header-search-inner .category-links{margin:.5em 0 0;width:100%}}.header-search-inner .category-links{display:none}@media all and (min-width:768px){.header-search-inner .category-links{display:inline-block}}@media all and (max-width:360px){.header-search-inner{padding:0}}.category-links{margin-bottom:0;line-height:100%}.category-links li{font-size:.7em;font-weight:100;display:inline-block;vertical-align:top;font-family:Quicksand,sans-serif;margin:0 .5em}#main p .button-red{font-family:Quicksand,sans-serif}.category-links li a{color:rgba(255,255,255,.8)}.category-links li a .post-count{background:rgba(226,51,80,.4);width:18px;height:18px;border-radius:50%;line-height:140%;display:inline-block;text-align:center;font-size:.8em}.home #main .extra h2{font-size:24px}.home #main .extra p{font-size:18px;line-height:140%;margin-bottom:1.5em}#main p .button-red{background:#E23350;border-radius:3px;padding:.5em 1em;box-shadow:0 4px 0 #99162c;color:#FFF;font-weight:700;position:relative;top:0;text-transform:uppercase}@media all and (max-width:767px){.site-header .main-navigation ul li{padding:0}}
</style>
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
			$count = '';

			$category1 = get_category('1094');
			$category2 = get_category('1095');
			$category3 = get_category('1096');
			$category4 = get_category('1097');
			$category5 = get_category('1098');

			$count = $category1->category_count + $category2->category_count + $category3->category_count + $category4->category_count + $category5->category_count;

			$othernumber = $othercategories->category_count;
			$categories = get_categories( array(
				'orderby' => 'menu_order',
				'order'   => 'ASC',
				'exclude'	=> '54, 1094, 1095, 1096, 1097, 1098'
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
			<li><a href="#">Other Entertainment <span class="post-count"><?php echo $count; ?></span></a></li>

			</ul>
		</div>
	</div>

	<div id="content" class="site-content">
		<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
			//yoast_breadcrumb();
		}
		?>


<?php the_breadcrumb() ?>