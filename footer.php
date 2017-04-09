<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gero\'s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer animated slideOutDown" role="contentinfo">
		<div class="footer-row">
			<a href="<?php echo get_site_url(); ?>" class="brand-link">Gero's</a>
			<span class="bull">&bull;</span>
			<a href="<?php echo get_permalink( 177 ); ?>" class="brand-link">Contact me</a>
			<span class="bull">&bull;</span>
			<a href="<?php echo get_permalink( 16 ); ?>" class="brand-link">Blog</a>
			<span class="bull">&bull;</span>
			<a href="<?php echo get_post_type_archive_link( "checkin" ); ?>" class="brand-link">My places</a>
		</div>
		<?php get_search_form( true ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
