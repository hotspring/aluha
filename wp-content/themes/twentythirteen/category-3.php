<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<header id="masthead" class="site-header" role="banner">
<?php 
	$current_category = single_cat_title('', false);//获得当前分类目录名称
	$categoryId = get_category_root_id(get_cat_ID($current_category));
 	if($categoryId == 2):?>
		<div id="parallaxWapper">
    		<img src="<?php echo get_template_directory_uri(); ?>/images/headers/news1.png" alt="" data-xrange="20" data-yrange="20" id="new1"/>
    		<img src="<?php echo get_template_directory_uri(); ?>/images/headers/news2.png" alt="" data-xrange="40" data-yrange="40"  id="new2"/>
    		<img src="<?php echo get_template_directory_uri(); ?>/images/headers/news3.png" alt="" data-xrange="20" data-yrange="40" data-invert="true"  id="new3" />
    	</div>
 <?php elseif($categoryId == 3):?>
 		<div id="parallaxWapper">
				<img src="<?php echo get_template_directory_uri(); ?>/images/headers/about1.png" alt="" data-xrange="20" data-yrange="20" id="about1" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/headers/about2.png" alt="" data-xrange="40" data-yrange="40" id="about2" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/headers/about3.png" alt="" data-xrange="20" data-yrange="20" id="about3" />
    	</div>
 <?php endif;?>
	</header><!-- #masthead -->
	<section id="breadcrumbs">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	</section>

	<div id="page" class="hfeed site">
		<div id="main" class="site-main" style="margin-top:40px">
			<a href="?cat=4" style="float:left;display:block;width:400px;height:360px;padding-top:40px;background-color:#f3f3f3;">
				<p style="text-align:center;margin:0;">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_starvision.png" alt="">
				</p>
				<h1 style="text-align:center">
					公司简介
				</h1>
			</a>

			<a href="?cat=6" style="float:left;display:block;width:400px;height:360px;padding-top:40px;background-color:#f3f3f3;margin-left:75px">
				<p style="text-align:center;margin:0;">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_contact.png" alt="">
				</p>
				<h1 style="text-align:center">
					联系方式
				</h1>
			</a>

			<a href="?cat=5" style="float:right;display:block;width:400px;height:360px;padding-top:40px;background-color:#f3f3f3;">
				<p style="text-align:center;margin:0;">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_joinus.png" alt="">
				</p>
				<h1 style="text-align:center">
					加入我们
				</h1>
			</a>


<?php get_footer(); ?>