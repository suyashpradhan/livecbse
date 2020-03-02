jQuery(function ($) {
	"use strict";

	//Testimonial slide

	$("#testimonial-slide").owlCarousel({

		loop: false,
		margin: 30,
		nav: false,
		dots: true,
		items: 3,
		responsive: {
			0: {
				items: 1
			},


			600: {
				items: 1
			}
		}

	});

	$(".performers-slide").owlCarousel({

		loop: false,
		margin: 10,
		nav: false,
		dots: true,
		items: 3,
		responsive: {
			0: {
				items: 2
			},

			600: {
				items: 2
			},

			900: {
				items: 3
			}
		}

	});

	var btn = $('#back-to-top-btn');

	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});

	btn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, '300');
	});

});