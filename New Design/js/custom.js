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

$('#play').on('click', function (e) {
	e.preventDefault();
	$("#player")[0].src += "?autoplay=1";
	$('#player').show();
	$('#video-cover').hide();
	$('#play').hide();
})

$('#play-1').on('click', function (e) {
	e.preventDefault();
	$("#player-1")[0].src += "?autoplay=1";
	$('#player-1').show();
	$('#video-cover-1').hide();
	$('#play-1').hide();
})