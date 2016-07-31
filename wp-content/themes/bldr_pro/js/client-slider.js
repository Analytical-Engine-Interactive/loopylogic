jQuery( function( $ ){
	
	$(document).ready(function() {
		$('.client-carousel').slick({
			  dots: false,
			  infinite: true,
			  speed: 300,
			  slidesToShow: 4,
			  centerMode: false,
			  variableWidth: true,
			  autoplay: true, 
			  autoplaySpeed: 2000
			});
		});	
});