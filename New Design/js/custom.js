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
				items: 1,
			},

			600: {
				items: 1,
			},
		},
	});

	$(".performers-slide").owlCarousel({
		loop: false,
		margin: 10,
		nav: false,
		dots: true,
		items: 3,
		responsive: {
			0: {
				items: 2,
			},

			600: {
				items: 2,
			},

			900: {
				items: 3,
			},
		},
	});

	var btn = $("#back-to-top-btn");

	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass("show");
		} else {
			btn.removeClass("show");
		}
	});

	btn.on("click", function (e) {
		e.preventDefault();
		$("html, body").animate({
				scrollTop: 0,
			},
			"300"
		);
	});
});

$("#play").on("click", function (e) {
	e.preventDefault();
	$("#player")[0].src += "?autoplay=1";
	$("#player").show();
	$("#video-cover").hide();
	$("#play").hide();
});

$("#play-1").on("click", function (e) {
	e.preventDefault();
	$("#player-1")[0].src += "?autoplay=1";
	$("#player-1").show();
	$("#video-cover-1").hide();
	$("#play-1").hide();
});

//Timer
const second = 1000,
	minute = second * 60,
	hour = minute * 60,
	day = hour * 24;

let countDown = new Date("April 10, 2020 00:00:00").getTime(),
	x = setInterval(function () {
		let now = new Date().getTime(),
			distance = countDown - now;

		(document.getElementById("days").innerText = Math.floor(distance / day)),
		(document.getElementById("hours").innerText = Math.floor(
			(distance % day) / hour
		)),
		(document.getElementById("minutes").innerText = Math.floor(
			(distance % hour) / minute
		)),
		(document.getElementById("seconds").innerText = Math.floor(
			(distance % minute) / second
		));
	}, second);