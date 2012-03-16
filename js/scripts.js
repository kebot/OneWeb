/* Author:
Seth Warburton | @nternetinspired
*/

jQuery(document).ready(function(){

// Run Mathias Bynens jQuery placeholder plugin (see plugins.js)
if (jQuery.fn.placeholder) {
	jQuery('input, textarea').placeholder();
}

/* Mobile Menu - Seth Warburton @nternetinspired */
var menu = jQuery('#menu');

menu.addClass('visuallyhidden');
jQuery('#mobileMenu').click(function(event) {
	event.preventDefault();
	menu.toggleClass('visuallyhidden');
	jQuery(this).toggleClass('active');
});	
function menuSwitch(width) {
	width = jQuery(window).width();
	if (width > 750){
		menu.removeClass('visuallyhidden');
					}
	else 	{
		menu.addClass('visuallyhidden');
			}
}
menuSwitch();

/* Chris Coyier's elegant screensize test http://css-tricks.com/resolution-specific-stylesheets/ */
	jQuery(function() {
    menuSwitch(jQuery(window).width());
    jQuery(window).resize(function() {
        menuSwitch(jQuery(window).width());
    });
});	

});