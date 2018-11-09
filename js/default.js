jQuery(document).ready(function(){
    jQuery( '#split-menu-button' ).on('click',function( e ){
        e.preventDefault();
        jQuery('#split-menu-container').toggleClass( 'active' );
        return false;
    });
    jQuery( document ).scroll( function( e ){
        if( jQuery( window).scrollTop() > jQuery('header.site-header').height() / 2 ){
            if( !jQuery( 'header.site-header' ).hasClass('fixed') ){
                jQuery( 'header.site-header' ).addClass('fixed');
            }
        }
        else if( jQuery( 'header.site-header' ).hasClass('fixed') ){
            jQuery( 'header.site-header' ).removeClass( 'fixed' );
        }
        return true;
    } );
});



