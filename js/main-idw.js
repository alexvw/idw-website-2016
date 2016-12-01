$( document ).ready(function() {

	var figure = $(".hover-container").hover( hoverVideo, hideVideo );

	function hoverVideo(e) { $('video', this).get(0).play(); }
	function hideVideo(e) { $('video', this).get(0).pause(); }
	
	$( document ).ready(function() {
		$('#fixed-contact').hover(
				  function() {
					    $('#phone-number-hide').fadeIn();
					  }, function() {
						  $('#phone-number-hide').fadeOut();
					  }
					);
	});
	
});


