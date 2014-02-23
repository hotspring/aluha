<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel='stylesheet' type='text/css' media='all' href="<?php echo get_template_directory_uri(); ?>/css/header.css"/>
	<script src="<?php echo get_template_directory_uri(); ?>/js/plax.js"></script>
	
</head>

<body <?php body_class(); ?>>
	<nav class="navbar" >
        <div id="navbar-wapper">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					<img src="wp-content/uploads/2014/01/aluha_logo.png" alt="">
				</a>
			</div>
		 
			<div class="collapse navbar-collapse pull-right">
				<ul class="nav navbar-nav">
					<li><a href="/">首页</a></li> 
					<li><a href="index.php?cat=9">Aluha GIRLS</a></li>
					<li><a href="index.php?cat=2">产品动态</a></li>
					<li><a href="index.php?cat=3">关于我们</a></li>
					<li><a href="index.php?page_id=2">帮助中心</a></li> 
					<li><a href="charge.php">充值中心</a></li>        
				</ul>    
			</div>
        </div>
    </nav>
    