/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var nav = $('#site-navigation'), button, menu;
	if ( ! nav )
		return;
	button = $('.menu-btn')[0];
	menu   = nav.find( '.menu-main-container ul' )[0];
	if ( ! button )
		return;

	// Hide button if menu is missing or empty.
	if ( ! menu || ! menu.childNodes.length ) {
		button.style.display = 'none';
		return;
	}
	
	$('#page').on('click', '.menu-btn', function() {
		$('.menu-main-container').toggle();
		$(button).toggleClass('toggled-on');//.toggle();
		$(menu).toggleClass('toggled-on');//.toggle();
	});

} )();