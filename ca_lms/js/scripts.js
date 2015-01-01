$(document).ready(function() {

	//GET BROWSER WINDOW HEIGHT
	var currHeight = $(window).height();
	//SET HEIGHT OF SIDEBAR AND CONTENT ELEMENTS
	$('#sidebar, #content').css('height', currHeight);

	//ON RESIZE OF WINDOW
	$(window).resize(function() {

		//GET NEW HEIGHT
		var currHeight = $(window).height();	
		//RESIZE BOTH ELEMENTS TO NEW HEIGHT
		$('#sidebar, #content').css('height', currHeight);

	});

	// hide tooltips
	$('.tooltips').tooltip('hide');

	

});

