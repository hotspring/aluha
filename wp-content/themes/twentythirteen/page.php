<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?> 		
	<header id="masthead" class="site-header" role="banner">
		<div id="parallaxWapper">
    		<img src="<?php echo get_template_directory_uri(); ?>/images/headers/help1.png" alt="" data-xrange="20" data-yrange="20" id="help1" />
    		<div id="help2" data-xrange="20" data-yrange="20" data-invert="true">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/help2.png" alt="" data-xrange="40" data-yrange="40" />
    		</div>
    		<div id="help3" data-xrange="20" data-yrange="20" data-invert="true">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/help3.png" alt="" data-xrange="40" data-yrange="40" />
    		</div>
    		<div id="help4" data-xrange="20" data-yrange="20" data-invert="true">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/help4.png" alt="" data-xrange="40" data-yrange="40" />
    		</div>
    	</div>

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

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					
				</article><!-- #post -->


			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>