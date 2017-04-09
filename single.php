<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gero\'s
 */

get_header(); ?>

	<div class="contact-me-page page-wrapper">
		<a href="<?php echo get_site_url(); ?>" class="back-arrow">Home</a>
		<div class="post-container">
		<?php
		while ( have_posts() ) : the_post();

			$post_id = get_the_ID();
			$featured_image = get_the_post_thumbnail_url( $post_id, "full" );

			if ( $featured_image !== false ) {
				?>

				<div class="post-banner" style="background-image: url(<?php echo $featured_image; ?>);"></div>

				<?php
			}

			get_template_part( 'template-parts/content', get_post_format() );

		endwhile; // End of the loop.
		?>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
