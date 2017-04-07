jQuery( document ).ready(function(){
    jQuery( window ).on( "scroll", function(){
        jQuery( "#homepage-intro #sb_instagram" ).css( "transform", "translateY(-"+ jQuery( document ).scrollTop() +"px)" );
    } );

    jQuery( "#homepage-intro #play" ).click(function() {
        slideTo( "#homepage-content" );
    });
});

function slideTo( element ) {
    jQuery( 'html, body' ).animate({
        scrollTop: jQuery( element ).offset().top - 10
    }, 1000);
}
