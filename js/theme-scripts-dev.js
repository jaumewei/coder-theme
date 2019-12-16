jQuery(document).ready(function(){
    jQuery('.responsive-menu-icon').on('click',function(e){

        e.preventDefault();

        /*Activar / Desactivar la clase active que hará emerger/ocultar el menú */
        jQuery( this ).next( '.genesis-nav-menu').toggleClass( 'active' );
        
    });
    //Split MENU SCRIPT
    jQuery( '#split-menu-button' ).on('click',function(e){

        if( jQuery('#split-menu-container' ).hasClass('active')) {
            
            jQuery('#split-menu-container').removeClass('active');
        }
        else{
            jQuery('#split-menu-container').addClass('active');
        }
        
    });
    
    //funciones  de scroll y fijado de la cabecera
    jQuery( document ).scroll( function( eScroll ){

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


