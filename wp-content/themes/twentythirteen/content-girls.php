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
<article id="post-<?php the_ID(); ?>" <?php post_class("girlsArticle"); ?>>
	<!-- <header> -->
	<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<!-- <div class="entry-thumbnail"> -->
			<!-- <img src="<?php $uploads = wp_upload_dir(); echo $uploads['baseurl'] . '/' . $custom ?>"/> -->
			<?php the_post_thumbnail("single-post-thumbnail"); ?>
		<!-- </div> -->
		<?php endif; ?>
	</a>
	<!-- </header> -->
	<section class="entry-meta">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<h1 class="entry-title">
				昵称：<?php the_title(); ?>
			</h1>
			<h1 class="entry-title">
				Aluha ID：<?php echo get_the_excerpt(); ?>
			</h1>
		</a>
	</section>
	<footer style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/gridbottom.png')">
	</footer><!-- .entry-meta -->
</article><!-- #post -->
