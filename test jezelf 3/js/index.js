$(document).ready(function() {

	$("p").click(function() {
		if ($(this).hasClass("strike")) {
			$(this).removeClass("strike");
		} else {
			$(this).addClass("strike");
		}
	});

});