jQuery( document ).ready(function(){
    jQuery( window ).on( "scroll", function(){
        jQuery( "#homepage-intro #sb_instagram" ).css( "transform", "translateY(-"+ jQuery( document ).scrollTop() +"px)" );

		if( jQuery( window ).scrollTop() + jQuery( window ).height() > jQuery( document ).height() - 100 ) {
			jQuery( "#colophon" ).removeClass( "slideOutDown" ).addClass( "slideInUp" );
		} else {
			jQuery( "#colophon" ).removeClass( "slideInUp" ).addClass( "slideOutDown" );
		}
	} );

    jQuery( "#homepage-intro #play" ).click(function() {
        slideTo( "#homepage-content" );
    });

	jQuery( '.owl-carousel' ).owlCarousel({
	    center: true,
	    items:1,
	    loop:true,
	    margin:10,
	    responsive:{
	        600:{
	            items:1
	        }
	    }
	});

    if ( jQuery( "body" ).hasClass( "page-template-store" ) ) {
        jQuery( ".page-template-store" ).find( ".buy-button" ).each( function(){
            jQuery( this ).on( "click", function(){
                view_ = "\
                <div id='popup'>\
                    <div id='inner-popup'>\
                        <button id='close-button'>\
                            <span class='bar'></span>\
                            <span class='bar'></span>\
                        </button>\
                        <div class='product-info'>\
                            <h1 class='product-title'>Product Name</h1>\
                            <h2 class='product-price'>15lv</h2>\
                        </div>\
                        <div class='paypal-button-handler'></div>\
                        <div class='product-content'>\
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\
                        </div>\
                        <div class='product-reviews'>\
                            <a href='https://images.unsplash.com/photo-1465308452258-70fc6a9b67a8' target='_blank' class='image-anchor'>\
                                <img src='https://images.unsplash.com/photo-1465308452258-70fc6a9b67a8' class='image' />\
                            </a>\
                            <a href='https://images.unsplash.com/photo-1465308452258-70fc6a9b67a8' target='_blank' class='image-anchor'>\
                                <img src='https://images.unsplash.com/photo-1465308452258-70fc6a9b67a8' class='image' />\
                            </a>\
                            <a href='https://images.unsplash.com/photo-1465308452258-70fc6a9b67a8' target='_blank' class='image-anchor'>\
                                <img src='https://images.unsplash.com/photo-1465308452258-70fc6a9b67a8' class='image' />\
                            </a>\
                        </div>\
                    </div>\
                </div>\
                ";

                jQuery( "body" ).append( view_ );

                jQuery( "#popup #close-button" ).on( "click", function(){ jQuery( "#popup" ).remove(); } );
            } );
        } );
    }

	if ( jQuery( "#twigo-content" ).length ) {
		jQuery( "#video-3" ).on( "click", function(){
			video_src = jQuery( this ).attr( "video-url" );
			view_ = "\
			<div id='popup' class='popup video-popup animated fadeIn'>\
				<div id='video-popup' class='video-container'>\
					<video id='player' controls autoplay>\
						<source src='"+ video_src +"' type='video/mp4'></source>\
					</video>\
				</div>\
			</div>\
			";
			jQuery( "body" ).append( view_ );
			jQuery( "#popup" ).on( "click", function( e ){
				if ( e.target == this ) {
					jQuery( this ).removeClass( "fadeIn" ).addClass( "fadeOut" );
					setTimeout( function(){ jQuery( "#popup" ).remove() }, 750 );
				}
			} );
		} );

		// jQuery( "#videos .video-player" ).each(function(){
		// 	jQuery( this ).on( "click", function(){
		// 		video_src = jQuery( this ).attr( "video-url" );
		// 		view_ = "\
		// 		<div id='popup' class='popup video-popup animated fadeIn'>\
		// 			<div id='video-popup' class='video-container'>\
		// 				<video id='player' controls autoplay>\
		// 					<source src='"+ video_src +"' type='video/ogg'></source>\
		// 				</video>\
		// 			</div>\
		// 		</div>\
		// 		";
		// 		jQuery( "body" ).append( view_ );
		// 		jQuery( "#popup" ).on( "click", function( e ){
		// 			if ( e.target == this ) {
		// 				jQuery( this ).removeClass( "fadeIn" ).addClass( "fadeOut" );
		// 				setTimeout( function(){ jQuery( "#popup" ).remove() }, 750 );
		// 			}
		// 		} );
		// 	} );
		// });
	}
});

function slideTo( element ) {
    jQuery( 'html, body' ).animate({
        scrollTop: jQuery( element ).offset().top - 10
    }, 1000);
}
