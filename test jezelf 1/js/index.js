$(document).ready(function() {
	var down = true;

	$(".down").click(function() {
		if (down) {
			$(this).parents(".wrapper").animate({
				height: "300px"
			});

			$(".place-image").fadeIn();
			down = false;
		} else {
			$(".place-image").fadeOut();

			$(this).parents(".wrapper").animate({
				height: "116px"
			});
			down = true;
		}
	});

});