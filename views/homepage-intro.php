<?php
/*
*   View name: Homepage Intro
*/
?>
<div id="homepage-intro" class="intro-part">
    <div class="overlay">
        <div class="top">
            <div id="logo" class="logo animated fadeInDown"></div>
            <div id="quote" class="quote animated fadeInDown">Every motion is emotion - G. N.</div>
        </div>
        <div class="bottom animated fadeInUp">
            <button id="play" class="play-button animated pulse infinite"></button>
        </div>
    </div>
    <?php echo do_shortcode( "[instagram-feed]" ); ?>
</div>
