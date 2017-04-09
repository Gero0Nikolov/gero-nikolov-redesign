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
});

function slideTo( element ) {
    jQuery( 'html, body' ).animate({
        scrollTop: jQuery( element ).offset().top - 10
    }, 1000);
}
