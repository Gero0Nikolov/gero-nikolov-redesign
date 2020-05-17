<?php
/*
*   View name: Adventurer Diary
*/

$page_id = get_the_ID();
$page_ = get_post( $page_id );
?>

<div class="adventurer-diary-page page-wrapper">
	<a href="<?php echo get_site_url(); ?>" class="back-arrow">Home</a>
    <h1 class="page-title"><?php echo $page_->post_title; ?></h1>
	<div class="page-content">
		<div class="text"><?php echo wpautop( $page_->post_content, true ); ?></div>
		<div class="arrow"></div>
	</div>
	<div class="chapters-holder">
		<?php
		$args = array(
			"posts_per_page" => -1,
			"post_type" => "adventure_diary",
			"orderby" => "ID",
			"order" => "DESC",
			"meta_key" => "page_language",
			"meta_value" => "en",
			"meta_compare" => "="
		);
		$stories = get_posts( $args );
		if ( !empty( $stories ) ) {
			foreach ( $stories as $story ) {
				$featured_image = get_the_post_thumbnail_url( $story->ID, "full" );
				$chapter_number = get_post_meta( $story->ID, "chapter_number", true );
				?>

				<a href="<?php echo get_permalink( $story->ID ); ?>" class="story-anchor">
					<div id="chapter-<?php echo $story->ID; ?>" class="chapter" style="background-image: url(<?php echo $featured_image; ?>);">
						<div class="overlay">
							<span class="chapter-label"><?php echo $chapter_label ." ". $chapter_number; ?></span>
							<h1 class="title"><?php echo $story->post_title; ?></h1>
						</div>
					</div>
				</a>

				<?php
			}
		}
		?>
	</div>
</div>
