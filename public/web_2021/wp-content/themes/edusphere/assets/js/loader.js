(function ($) {
	"use strict";
	jQuery(document).ready(function () {
		var counter = 0;
		var count = 0;
		var i = setInterval(function () {
			jQuery(".loader .loader-counter h1").html(count + "%");
			counter++;
			count++;
			if (counter == 101) {
				clearInterval(i);
			}
		}, 50);
	});
})(jQuery);