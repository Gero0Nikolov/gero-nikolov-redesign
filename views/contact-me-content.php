<?php
/*
*   View name: Homepage Intro
*/

global $post;
?>
<div class="contact-me-page page-wrapper">
	<a href="<?php echo get_site_url(); ?>" class="back-arrow">Home</a>
	<div class="content">
		<h1 class="header"><?php echo $post->post_title; ?></h1>
		<div class="form">
			<?php echo do_shortcode( $post->post_content ); ?>
		</div>
	</div>
</div>
