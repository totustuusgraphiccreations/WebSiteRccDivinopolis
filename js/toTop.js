"use strict";

// JavaScript Document

( function( $ )
{
	var winObj = $( window ),
		bodyObj = $( 'body' ),
		headerObj = $( 'header' );
		
		/*----------------------------------------------------*/
	/*	Animated Scroll To Top
	/*----------------------------------------------------*/
	var toTop = $( '#toTop' );
	toTop.on( 'click', function()
	{
		$( 'html, body' ).animate( {
			scrollTop: 0
		}, 600 );
		return false;
	} );

	winObj.on( 'scroll', function()
	{
		if( $( this ).scrollTop() != 0 )
		{
			toTop.fadeIn();
		}
		else
		{
			toTop.fadeOut();
		}
	} );

}( jQuery ) );