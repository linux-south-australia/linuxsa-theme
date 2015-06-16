<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * Updated all the old shit in TwentyThirteen to use HTML5 Boilerplate & Bootstrap -bp 2015/4
 */

?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<?php // These 3 meta tags must come first in <head> ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <?php // The main stylesheet ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--

                    <?php get_search_form(); ?>

    -->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Project name</a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,               // no container
                    'menu_class' => 'nav navbar-nav',
                    'echo' => true,
                ));
            ?>

            <!--
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
            </ul>
            -->

            <!--
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            -->

        </div><!--/.navbar-collapse -->
    </div>
    </nav>

    <div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img class="tux center-block" src="<?php echo get_template_directory_uri(); ?>/images/tux_good.svgz">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                </a>
            </div>

            <div class="col-xs-12 col-md-offset-2 col-md-6">
                <h2 class="site-description visible-md-block visible-lg-block"><?php bloginfo( 'description' ); ?></h1>
            </div>
        </div>
    </div>
    </div>

	<div id="foo" class="container hfeed">

        <div class="row">

		<div id="main" class="col-xs-12 col-md-8">

