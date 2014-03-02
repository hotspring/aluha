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
<header id="masthead" class="site-header aboutusBg" role="banner">
<?php 
	$current_category = single_cat_title('', false);//获得当前分类目录名称
	$categoryId = get_category_root_id(get_cat_ID($current_category));
 ?>	
	<div id="parallaxWapper">
		<section id="parallaxLeft">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/about1.png" alt="" data-xrange="20" data-yrange="20" id="about1" />
			
		</section>
		<section id="parallaxRight">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/aboutus_diamond.png" alt="" data-xrange="20" data-yrange="20" id="about2" />
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/aboutus_aluha.png" alt="" data-xrange="40" data-yrange="40" id="about3" />
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/aboutus_phone.png" alt="" data-xrange="20" data-yrange="20" id="about4" />
		</section>
	</div>
</header><!-- #masthead -->
	<section id="breadcrumbs">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	</section>

	<div id="page" class="hfeed site">
		<div id="main" class="site-main" style="margin-top:40px">
			<div style="width:33%;float:left">
				<a href="?cat=4" style="width:95%;display:block;max-width:400px;margin:0 auto;height:360px;padding-top:40px;background-color:#f3f3f3;">
					<p style="text-align:center;margin:0;">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_starvision.png" alt="">
					</p>
					<h1 style="text-align:center">
						公司简介
					</h1>
				</a>
			</div>
			<div style="width:34%;float:left">
				<a href="?cat=6" style="display:block;max-width:400px;width:95%;height:360px;padding-top:40px;background-color:#f3f3f3;margin:0 auto">
					<p style="text-align:center;margin:0;">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_contact.png" alt="">
					</p>
					<h1 style="text-align:center">
						联系方式
					</h1>
				</a>
			</div>
			
			<div style="width:33%;float:right">
				<a href="?cat=5" style="margin:0 auto;display:block;max-width:400px;width:95%;height:360px;padding-top:40px;background-color:#f3f3f3;">
					<p style="text-align:center;margin:0;">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_joinus.png" alt="">
					</p>
					<h1 style="text-align:center">
						加入我们
					</h1>
				</a>
			</div>


<?php get_footer(); ?>