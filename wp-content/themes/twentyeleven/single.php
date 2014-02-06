<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<?php get_template_part( 'content', get_post_format() ); ?>
			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>