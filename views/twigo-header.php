<div id="twigo-header" class="twigo-header">
	<h1 class="main-header">
		<span class='green'>#</span>
		<span class='yellow'>T</span>
		<span class='orange'>W</span>
		<span class='red'>I</span>
		<span class='purple'>G</span>
		<span class='blue'>O</span>
	</h1>
	<h2 class="sub-header">Travel With Gero</h2>
	<div id="feed" class="feed">
		<?php
		if ( !wp_is_mobile() ) { echo do_shortcode( "[instagram-feed num=5 cols=5 sortby='']" ); }
		else { echo do_shortcode( "[instagram-feed num=3 cols=3 sortby='']" ); }
		?>
	</div>
</div>
