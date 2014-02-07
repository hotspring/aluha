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
	<div id="page" class="hfeed site">
		

		<div id="main" class="site-main">
	<div id="primary" class="content-area appnewslist">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-appnews'); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => get_category_root_id(the_category_ID(false)),
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => '',
	'show_option_none'   => '',
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
); ?>
<div id="secondary" class="appweibo" role="complementary">
	<div style="width:100%;height:36px;border-bottom:5px solid #005a87;background-color:#009eec;margin-top:33px">
		<h4 style="height:36px;line-height:36px;color:white;font-size:18px;text-indent:15px">微博</h4>
	</div>
	<iframe width="400" height="750" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=400&height=750&fansRow=2&ptype=1&speed=0&skin=9&isTitle=0&noborder=1&isWeibo=1&isFans=1&uid=1708559120&verifier=bd483efb&colors=cee1f4,e8e8e8,666666,0082cb,cee1f4&dpc=1"></iframe>
</div><!-- #secondary -->
<?php get_footer(); ?>