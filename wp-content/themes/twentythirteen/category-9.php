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

get_header('girls'); ?>
<header id="masthead" class="site-header" role="banner">
<?php 
	$current_category = single_cat_title('', false);//获得当前分类目录名称
	$categoryId = get_category_root_id(get_cat_ID($current_category));
?>
 		<div id="parallaxWapper">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/aluha_girls.png" alt="" data-xrange="20" data-yrange="20" id="girls1" />
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/about2.png" alt="" data-xrange="40" data-yrange="40" id="girls2" />
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/about3.png" alt="" data-xrange="20" data-yrange="20" id="girls3" />
    	</div>
	</header><!-- #masthead -->
	<section id="breadcrumbs">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
	</section>
	<div id="page" class="hfeed site">
		<div id="main" class="site-main ">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-girls' ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

<?php get_footer('girls'); ?>