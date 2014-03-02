<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php 
$custom = get_post_custom(); 
$custom = get_post_meta($custom["_thumbnail_id"][0], 
'_wp_attached_file',true); 
?> 
<article id="post-<?php the_ID(); ?>" <?php post_class('app-posts'); ?>>
	<section class="app-entry-left">
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>

			<div class="entry-meta">
				<?php twentythirteen_entry_meta(); ?>
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php trt_excerpt('trt_excerptlength_teaser', 'trt_excerptmore'); ?> 
		</div><!-- .entry-content -->
		<p class="app-entry-readmore">
			<a class="read_mor" href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">-----继续阅读</a>
		</p>
		<?php endif; ?>

	</section>
	
	<section class="app-entry-right">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<img src="<?php $uploads = wp_upload_dir(); echo $uploads['baseurl'] . '/' . $custom ?>"/>
		</div>
		<?php endif; ?>
	</section>
</article><!-- #post -->
