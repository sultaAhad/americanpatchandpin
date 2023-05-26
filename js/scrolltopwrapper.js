$(document).ready(function () {
	/******************************
        BOTTOM SCROLL TOP BUTTON
     ******************************/

	// declare variable
	var scrollTop = $(".scrollTop");

	$(window).scroll(function () {
		// declare variable
		var topPos = $(this).scrollTop();

		// if user scrolls down - show scroll to top button
		if (topPos > 100) {
			$(scrollTop).css("opacity", "1");
		} else {
			$(scrollTop).css("opacity", "0");
		}
	}); // scroll END

	/*************************************
      LEFT MENU SMOOTH SCROLL ANIMATION
     *************************************/
	// declare variable
});
// Click event to scroll to top

$(document).ready(function () {
	$(window).scrollTop(0);
});
var btn = $("#button");

$(window).scroll(function () {
	if ($(window).scrollTop() > 300) {
		btn.addClass("show");
	} else {
		btn.removeClass("show");
	}
});

btn.on("click", function (e) {
	e.preventDefault();
	$("html, body").animate({ scrollTop: 0 }, "300");
});
