$(document).ready(function() {

	setTimeout(function() {
		$('#me').removeClass('wayoutwest');
	}, 1000);

    $('#menu-icon').on("click", function(){

        $('#menu').toggleClass('slide-menu');
        $('#menu-icon')
            .toggleClass('fa-bars')
            .toggleClass('fa-times')
            .toggleClass('fixed-icon');

        $('body').toggleClass('overflow-hidden');
    });

}); // end of jQuery