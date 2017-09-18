<?php
$page_id = get_the_ID();
$what_is_twigo_title = get_field( "what_is_twigo_title", $page_id );
$what_is_twigo_content = get_field( "what_is_twigo_content", $page_id );
$what_is_twigo_image = get_field( "what_is_twigo_image", $page_id );
$what_is_worldventures_title = get_field( "what_is_worldventures_title", $page_id );
$what_is_worldventures_content = get_field( "what_is_worldventures_content", $page_id );
$what_is_worldventures_image = get_field( "what_is_worldventures_image", $page_id );
$worldventures_videos = get_field( "worldventures_videos", $page_id );
$how_worldventures_works_title = get_field( "how_worldventures_works_title", $page_id );
$how_worldventures_works_content = get_field( "how_worldventures_works_content", $page_id );
?>

<div id="twigo-content" class="twigo-content">
	<div class="row">
		<div class="flex-container">
			<div class="content pr-1em">
				<h1 class="title"><?php echo $what_is_twigo_title; ?></h1>
				<div class="text"><?php echo $what_is_twigo_content; ?></div>
			</div>
			<div class="image-container">
				<div class="image" style="background-image: url('<?php echo $what_is_twigo_image; ?>');"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="flex-container">
			<div class="image-container">
				<div class="image" style="background-image: url('<?php echo $what_is_worldventures_image; ?>');"></div>
			</div>
			<div class="content pl-1em">
				<h1 class="title"><?php echo $what_is_worldventures_title; ?></h1>
				<div class="text"><?php echo $what_is_worldventures_content; ?></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="videos" class="flex-container">
			<?php
			$video_counter = 1;
			foreach ( $worldventures_videos as $video ) {
				if ( $video_counter < 3 ) {
				?>

				<a href="<?php echo $video[ "video_url" ]; ?>" target="_blank" class="video-anchor">
					<div id="video-<?php echo $video_counter; ?>" class="video-player" video-url="<?php echo $video[ "video_url" ]; ?>" style="background-image: url(<?php echo $video[ "video_preview" ]; ?>);">
						<h1 class="video-title"><?php echo $video[ "video_main_title" ]; ?></h1>
					</div>
				</a>

				<?php
				} else {
					?>

					<div id="video-<?php echo $video_counter; ?>" class="video-player" video-url="<?php echo $video[ "video_url" ]; ?>" style="background-image: url(<?php echo $video[ "video_preview" ]; ?>);">
						<h1 class="video-title"><?php echo $video[ "video_main_title" ]; ?></h1>
					</div>

					<?php
				}
				$video_counter += 1;
			}
			?>
		</div>
	</div>
	<div class="row">
		<div id="worldventures-explanation" class="full-textbox">
			<h1 class="title"><?php echo $how_worldventures_works_title; ?></h1>
			<div class="text"><?php echo $how_worldventures_works_content; ?></div>
		</div>
	</div>
</div>
