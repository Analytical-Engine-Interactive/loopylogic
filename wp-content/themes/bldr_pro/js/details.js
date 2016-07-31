jQuery( function( $ ){
	
	$('.details').waypoint(function(down) {

		$('.odometer').each(function () {

			var $this = $(this); 

			$({ Counter: 0 }).animate({ Counter: $this.attr('id') }, {

				duration: 1000,

				easing: 'swing',

				step: function () {

				    $this.text(Math.ceil(this.Counter));

				}

			});

		});

	},	

	{

	  offset: '100%', 

	  triggerOnce: true

	});
	 
});