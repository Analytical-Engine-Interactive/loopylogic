window.viewportUnitsBuggyfill.init();

jQuery( function( $ ){
	
		$(document).ready(function() {
			$('.fade').hover(
				function(){
					$(this).find('.caption').fadeIn(350);
				},
				function(){
					$(this).find('.caption').fadeOut(350);
				}
			);
		});
		
});
 
