jQuery( function( $ ){
	
		$(document).ready(function() {
			$('.hero-slider').slick({
			  dots: true,
			  infinite: true,
			  speed: 300,
			  fade: true,
			  slidesToShow: 1,
			  adaptiveHeight: true,
			  autoplay: true,
			  autoplaySpeed: 5000,
			});
		});	
});