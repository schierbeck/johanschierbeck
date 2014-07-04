$(document).ready(function() {

	var game = $('.image-grid').find('div');

	function changeGameHeight() {
		var gameHeight = game.width();
		game.height(gameHeight);
	}
	changeGameHeight();

	window.onresize = function(event) {
	  changeGameHeight();
	};

	$('.image').click(function() {

		if( $(this).hasClass('active')) {
			$(this).removeClass('active');
			$('.overlay').removeClass('active');
		} else {
			$(this).addClass('active');
			$('.overlay').addClass('active');
		}
		
	});

	$('a').click(function (e) {
		e.stopPropagation();
	});

}); // end of jQuery