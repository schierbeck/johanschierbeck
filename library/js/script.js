$(document).ready(function() {

	setTimeout(function() {
		$('#me').removeClass('spin');
	}, 1000);

    $('#me').hover(function() {
        $(this).addClass('spin');
    }, function() {
    	$('#me').removeClass('spin');
    });

}); // end of jQuery