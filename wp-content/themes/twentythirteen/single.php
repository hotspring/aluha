<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
	<header id="masthead" class="site-header" role="banner">
<?php 
	$categoryId = get_category_root_id(the_category_ID(false));
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
		

		<div id="main" class="site-main">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				
				

			<?php endwhile; ?>

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
<div id="secondary" class="sidebar-container" role="complementary">
	<div class="widget-area">
		<aside id="categories-2" class="widget widget_categories">
			<ul>
				<?php wp_list_categories( $args ); ?>
			</ul>
		</aside>		
	</div><!-- .widget-area -->
</div><!-- #secondary -->
<?php get_footer(); ?>