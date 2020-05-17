<?php
/*
*   View name: Homepage Content
*/

$page_id = get_the_ID();
$section_1_text = get_field( "section_1_text", $page_id );
$section_1_image = get_field( "section_1_image", $page_id );
$section_2_text = get_field( "section_2_text", $page_id );
$section_3_links = get_field( "section_3_links", $page_id );
$section_4_text = get_field( "section_4_text", $page_id );
$section_4_links = get_field( "section_4_links", $page_id );
$section_5_text = get_field( "section_5_text", $page_id );
$section_5_links = get_field( "section_5_links", $page_id );
$adventurer_diary_text = get_field( "adventurer_diary_text", $page_id );
$chapter_label = get_field( "chapter_label", $page_id );
?>
<div id="homepage-content" class="homepage-content">
    <div class="section">
        <div class="left-column">
            <div class="section-text">
				<?php echo $section_1_text; ?>
            </div>
        </div>
        <div class="right-column">
            <div class="section-banner" style="background-image: url(<?php echo $section_1_image; ?>);">
            </div>
        </div>
    </div>
    <div class="full-section">
		<div class="section-text">
			<?php echo $section_2_text;; ?>
		</div>
    </div>
	<div class="links-section">
		<?php
		foreach ( $section_3_links as $post_id ) {
			?>

			<a href="<?php echo get_permalink( $post_id ); ?>" class="link-block"><?php echo get_the_title( $post_id ); ?></a>

			<?php
		}
		?>
	</div>
	<div class="full-section">
		<div class="section-text">
			<?php echo $section_4_text;; ?>
		</div>
		<div class="owl-carousel owl-theme owl-loaded">
			<?php
			$args = array(
				"post_type" => "projects",
				"posts_per_page" => "-1",
				"post_status" => "publish",
				"orderby" => "ID",
				"order" => "DESC"
			);
			$posts_ = get_posts( $args );

			foreach ( $posts_ as $post_ ) {
				$post_featured_image = get_the_post_thumbnail_url( $post_->ID );
				?>

				<div class="owl-item">
					<div class="row-holder">
						<div class="left-column">
							<h1 class="row-title"><?php echo $post_->post_title; ?></h1>
							<div class="row-text"><?php echo wpautop( $post_->post_content, true ); ?></div>
						</div>
						<div class="right-column">
							<div class='row-banner' style='background-image: url(<?php echo $post_featured_image !== false ? $post_featured_image : get_template_directory_uri() ."/inc/images/no-icon.png"; ?>);'></div>
						</div>
					</div>
				</div>

				<?php
			}
			?>
		</div>
    </div>

    <div class="full-section">
        <div class="section-text"><?php echo str_replace( "%%site_url%%", get_site_url(), $adventurer_diary_text ); ?></div>
        <div class="chapters-holder">
            <?php
            $args = array(
                "posts_per_page" => 2,
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

	<div class="full-section">
		<div class="section-text">
			<?php echo $section_5_text; ?>
		</div>
    </div>
	<div class="links-section">
		<?php
		foreach ( $section_5_links as $post_ ) {
			?>

			<a href="<?php echo $post_->post_content; ?>" target="_blank" class="link-block"><?php echo $post_->post_title; ?></a>

			<?php
		}
		?>
	</div>
</div>
