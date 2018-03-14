(function( $ ) {

	wp.customize( 'themesmatic_sharing_spacing', function( value ) {
		value.bind( function( to ) {
			$('ul.themesmatic-sharing li').css('margin-right', to + 'px' );
		} );
	} );
	
	wp.customize( 'themesmatic_sharing_headline_size', function( value ) {
		value.bind( function( to ) {
			$('.themesmatic-sharing-headline').css('font-size', to + 'px' );
			$('.themesmatic-sharing-headline').css('line-height', to + 'px' );
		} );
	} );
	
	wp.customize( 'themesmatic_sharing_icon_size', function( value ) {
		value.bind( function( to ) {
			$('ul.themesmatic-sharing li i.fa').css('font-size', to + 'px' );
		} );
	} );
	
	wp.customize( 'themesmatic_sharing_button_width', function( value ) {
		value.bind( function( to ) {
			$('ul.themesmatic-sharing li').css('width', to + 'px' );
		} );
	} );
	
	wp.customize( 'themesmatic_sharing_button_width', function( value ) {
		value.bind( function( to ) {
			$('ul.themesmatic-sharing.tm-sharing-circle li.tm-sharing-icon').css('height', to + 'px' );
			$('ul.themesmatic-sharing.tm-sharing-circle li.tm-sharing-icon').css('line-height', to + 'px' );
		} );
	} );
	
	wp.customize( 'themesmatic_social_popup_heading_size', function( value ) {
		value.bind( function( to ) {
			$('.themesmatic-sharing-popup-title').css('font-size', to + 'px' );
			$('.themesmatic-sharing-popup-title').css('line-height', to + 'px' );
		} );
	} );
	
} )( jQuery );