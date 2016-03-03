$( document ).ready(function() {
    /*
	$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	*/

	var figure = $(".hover-container").hover( hoverVideo, hideVideo );

	function hoverVideo(e) { $('video', this).get(0).play(); }
	function hideVideo(e) { $('video', this).get(0).pause(); }
	
	
	/* $.format.locale({
        number: {
            groupingSeparator: ',',
            decimalSeparator: '.'
        }
    });
	
	var stolen = 1023108267;
	
	function incrementStolen(){
		$('#stolen-count').html($.format.number(stolen+=64, '#,###'));
	}
	
	setInterval(incrementStolen, 2000);
	
	*/
	
	
});


