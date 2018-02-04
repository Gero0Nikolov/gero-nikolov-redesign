<?php
/*
*   View name: Blog
*/
?>

<div class="contact-me-page page-wrapper">
	<a href="<?php echo get_site_url(); ?>" class="back-arrow">Home</a>
	<div class="blog-posts-list">
		<?php
		$args = array(
			"post_type" => "post",
			"post_status" => "publish",
			"posts_per_page" => -1,
			"orderby" => "ID",
			"order" => "DESC"
		);
		$posts_ = get_posts( $args );

		foreach ( $posts_ as $post_ ) {
			?>

			<a href="<?php echo get_permalink( $post_->ID ); ?>" class="post-anchor">
				<div class="post-container">
					<h1 class="post-title"><?php echo $post_->post_title; ?></h1>
					<div class="post-text"><?php echo wp_trim_words( $post_->post_content, 35, "..." ); ?></div>
				</div>
			</a>

			<?php
		}
		?>
	</div>
</div>

<?php get_footer(); ?>
