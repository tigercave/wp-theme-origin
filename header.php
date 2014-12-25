<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package origin
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if (is_search()) {echo "<meta name='robots' content='noindex, nofollow'/>";} ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page-wrap">
			<div id="header">
				<h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- end div#header -->
			<div id="top-bar" class="clearfix">
				<?php    /**
					* Displays a navigation menu
					* @param array $args Arguments
					*/
					$args = 
				
					wp_nav_menu(array('theme_location' => 'main_nav','container' => '')); ?>
				
				<div id="search-box">
					<form id="searchForm" action="" method="get">
						<input type="text" name="s" id="s" value=""/>
						<input type="submit" name="submit" value="Search"/>
					</form>
				</div><!-- end div#search-box -->
			</div><!-- end div#top-bar -->