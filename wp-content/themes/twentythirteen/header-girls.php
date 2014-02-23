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
	<link rel='stylesheet' type='text/css' media='all' href="<?php echo get_template_directory_uri(); ?>/css/girls.css"/>
	<script src="<?php echo get_template_directory_uri(); ?>/js/plax.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.infinitescroll.min.js"></script>
	<script src="js/vendor/masonry.pkgd.min.js"></script>
	<script type="text/javascript">
		window.$ = jQuery;	
		$(document).ready(function(){
			$('#main').infinitescroll({
			    loading: {
			        finished: undefined,
			        finishedMsg: "<em>Congratulations, you've reached the end of the internet.</em>",
			        img: "data:image/GIF;base64,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",
			        msg: null,
			        msgText: "<em>Loading the next set of posts...</em>",
			        selector: ".scrollLoading",
			        speed: 'slow',
			        start: undefined
			    },
			    state: {
			        isDuringAjax: false,
			        isInvalidPage: false,
			        isDestroyed: false,
			        isDone: false, // For when it goes all the way through the archive.
			        isPaused: false,
			        currPage: 1
			    },
			    debug: true,
			    behavior: undefined,
			    binder: $(window), // used to cache the selector for the element that will be scrolling
			    nextSelector: ".nav-previous a",
			    navSelector: "nav.navigation",
			    contentSelector: "#main", // rename to pageFragment
			    extraScrollPx: 150,
			    itemSelector: "#main article",
			    animate: false,
			    pathParse: undefined,
			    dataType: 'html',
			    appendCallback: false,
			    bufferPx: 40,
			    errorCallback: function () { },
			    infid: 0, //Instance ID
			    pixelsFromNavToBottom: undefined,
			    path: undefined, // Can either be an array of URL parts (e.g. ["/page/", "/"]) or a function that accepts the page number and returns a URL
			    prefill: false, // When the document is smaller than the window, load data until the document is larger or links are exhausted
			    maxPage:undefined // to manually control maximum page (when maxPage is undefined, maximum page limitation is not work)
			},function(newEle){
				// var grid = document.querySelector('#main');
				// var articles = newEle.toArray();
				// Array.prototype.forEach.call(articles, function(article) {
				//     article.style.display = "block";
		  //     	});
				// salvattore['append_elements'](grid, articles);
				var $container = $('#main');
				$container.append(newEle);
				$container.masonry( 'appended', newEle )
			});
		});
	</script>
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
    