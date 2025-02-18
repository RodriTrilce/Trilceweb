(function( $ ) {
	"use strict";

	window.bt_bb_floating_image_loop = function() {
		var win_w = window.innerWidth;
		var win_h = window.innerHeight;
		console.log('bt_bb_floating_image_loop');
		$( 'html:not(.bt_bb_touch) .bt_bb_floating_image' ).each(function() {
			var elem = $(this).find('.bt_bb_floating_image_image');
			var bounds = this.getBoundingClientRect();
			if ( bounds.top < win_h && bounds.bottom > 0 ) {
				var speed = $(this).attr( 'data-speed' ) / 10;
				var ypos = ( bounds.top - win_h/2 ) * speed;
				elem.css( 'transform', 'translateY(' + ypos + 'px)' );
			}

		});
		window.bt_bb_floating_image_lock = false;
	}
	
	window.bt_bb_floating_image_lock = false;
	
	$( window ).on( 'scroll', function() {
		if ( ! window.bt_bb_floating_image_lock ) {
			window.bt_bb_floating_image_lock = true;
			bt_bb_requestAnimFrame( bt_bb_floating_image_loop );
		}
	});
	
	bt_bb_requestAnimFrame( bt_bb_floating_image_loop );

	$( window ).on( "load", function() { 
		bt_bb_requestAnimFrame( bt_bb_floating_image_loop );		
	});
	
})( jQuery );