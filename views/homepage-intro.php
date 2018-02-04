<?php
/*
*   View name: Homepage Intro
*/

$page_id = get_the_ID();
$logo_url = get_field( "logo", $page_id );
$quote_ = get_field( "quote", $page_id );
?>
<div id="homepage-intro" class="intro-part">	
    <div class="overlay">
        <div class="top">
            <div id="logo" class="logo animated fadeInDown" style="background-image: url(<?php echo $logo_url; ?>);"></div>
            <div id="quote" class="quote animated fadeInDown"><?php echo $quote_; ?></div>
        </div>
        <div class="bottom animated fadeInUp">
            <button id="play" class="play-button animated pulse infinite"></button>
        </div>
    </div>
    <?php echo do_shortcode( "[instagram-feed]" ); ?>
</div>
