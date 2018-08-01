(function ($) {
			// map button toggle
			$( ".gmap-btn" ).click(function(){
				$( "#map-btn1" ).toggleClass( "btn-show", "btn-hide", 1000 );
				$( "#map-btn1" ).toggleClass( "btn-hide", "btn-show", 1000 );
				$( "#map-btn2" ).toggleClass( "btn-hide", "btn-show", 1000 );
				$( "#map-btn2" ).toggleClass( "btn-show", "btn-hide", 1000 );
				$( "#map-btn2" ).toggleClass( "close-map-button", "open-map-button", 1000 );
				$( "#map-btn2" ).toggleClass( "open-map-button", "close-map-button", 1000 );
				$( "#map" ).toggleClass( "close-map", "open-map", 1000 );
				$( "#map" ).toggleClass( "open-map", "close-map", 1000 );
				return false;
			});

			function toggleBounce() {

			  if (marker.getAnimation() != null) {
				marker.setAnimation(null);
			  } else {
				marker.setAnimation(google.maps.Animation.BOUNCE);
			  }
			}

			//google.maps.event.addDomListener(window, 'load', initialize);

})(jQuery);
