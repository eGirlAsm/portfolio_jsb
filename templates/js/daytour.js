$(document).ready(function() {
	// Save  the jQuery objects for later use.
	var outer		= $("#preview_outer");
	var arrow		= $("#arrow");
	var thumbs		= $("#thumbs span");

	var preview_pos;
	var preview_els	= $("#preview_inner div");
	var image_width	= preview_els.eq(0).width(); // Get width of imaages
	
	// Hook up the click event
	thumbs.click(function() {
		// Get position of current image
		preview_pos = preview_els.eq( thumbs.index( this) ).position();

		// Animate them!
		outer.stop().animate( {'scrollLeft' : preview_pos.left},	500 );
		arrow.stop().animate( {'left' : $(this).position().left },	500 );
	});

	// Reset positions on load
	arrow.css( {'left' : thumbs.eq(0).position().left } ).show();
	outer.animate( {'scrollLeft' : 0}, 0 );

	// Set initial width
	$("#preview_inner").css('width', preview_els.length * image_width);
});

