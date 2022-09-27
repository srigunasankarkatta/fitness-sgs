/* Loader */
jQuery(window).on("load", function () {
	$(".loader-wrap").delay(3000).fadeOut();

	/* Icon Loader */
	var $imgs = $(".multi-icon").find(".icon"),
	i = 0;

	function changeImage(){
		var next = (++i % $imgs.length);
		$($imgs.get(next - 1)).fadeOut(500);
		$($imgs.get(next)).fadeIn(500);
	}
	var interval = setInterval(changeImage, 1000);
});

$(document).ready(function(){
	$(window).trigger('resize');

	var positionValue = 0;

	if($(window).width() >= 992) {
		positionValue = 0;
	}
	else {
		positionValue = 180;
	}
	$('.header .navbar-expand-lg .navbar-nav .nav-link').click(function(){
		$(".nav-item .active").removeClass("active");     
		$(this).parent().addClass("active");

		$('html, body').stop().animate({
			scrollTop: $($(this).attr('href')).offset().top - positionValue
		}, 700);
		return false;
	});

	$('.navbar-collapse .nav-link').click(function(){
		$(".navbar-collapse").collapse('hide');
	});

	/* PAssword View */
	$('.text-password').click(function(){
		var input = $(this).prev();
		var iconClass = ("icon-password");
		input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
		$(this).children().toggleClass('icon-password');
	});


	/* DASHBAORD TOGGLE */
	$("#sidebarMenu, .main-sidebar-close").on('click', function(e) {
		$("body").toggleClass("sidebar-toggled");
		$(".main-sidebar").toggleClass("toggled");
	});

	$("#rightSidebarMenu, .right-sidebar-close").on('click', function(e) {
		$("body").toggleClass("right-sidebar-toggled");
		$(".right-sidebar").toggleClass("toggled");
	});

	/* SELECT */
	if($(".select2").length > 0) {
		var placeholder = "select";
		$(".select2").select2({
			placeholder: "Please Select",
			allowClear: false,
			minimumResultsForSearch: -1,
			width: '100%'
		});
	}

	/* RANGE SLIDER */
	if($(".range-slider").length > 0) {
		$(".range-slider").ionRangeSlider({
			type: "double",
			skin: "round",
			min: 0,
			max: 1000,
			from: 400,
			to: 600,
			drag_interval: true,
			min_interval: null,
			max_interval: null
		});		
	}

	/* AUTO VIDEO LOAD */
	if($(".section-video").length > 0) {
		$(".section-video iframe")[0].src += "?autoplay=1&controls=0&rel=0&modestbranding=1&mute=0";
	}
})

$(document).on('hidden.bs.modal', function (event) {
	if ($('.modal:visible').length) {
		$('body').addClass('modal-open');
	}
});

/** SWIPER SLIDER **/
if($(".swiper-container").length > 0) {
	const swiperPartner = new Swiper('.swiper-partner', {
		slidesPerView: 1,
		spaceBetween: 0,

		pagination: {
			el: '.swiper-partner-pagination',
		},

		navigation: {
			nextEl: '.swiper-partner-button-next',
			prevEl: '.swiper-partner-button-prev',
		},

		scrollbar: {
			el: '.swiper-partner-scrollbar',
		},
	});

	const swiperExplore = new Swiper('.swiper-explore', {
		slidesPerView: 1.9,
		spaceBetween: 25,

		pagination: {
			el: '.swiper-explore-pagination',
		},

		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		scrollbar: {
			el: '.swiper-explore-scrollbar',
		},

		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			480: {
				slidesPerView: 1.4,
			},
			680: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 1.3,
			},
			1280: {
				slidesPerView: 1.7,
			},
			1700: {
				slidesPerView: 2.4,
			},
		}
	});

	const swiperMeet = new Swiper('.swiper-meet', {
		slidesPerView: 2,
		spaceBetween: 15,

		pagination: {
			el: '.swiper-meet-pagination',
		},

		navigation: {
			nextEl: '.swiper-meet-button-next',
			prevEl: '.swiper-meet-button-prev',
		},

		breakpoints: {
			0: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 3,
			},
			992: {
				slidesPerView: 4,
			}
		}
	});

	const swiperType = new Swiper('.swiper-type', {
		spaceBetween: 25,
		
		pagination: {
			el: '.swiper-type-pagination',
		},

		navigation: {
			nextEl: '.swiper-type-button-next',
			prevEl: '.swiper-type-button-prev',
		},

		scrollbar: {
			el: '.swiper-type-scrollbar',
		},

		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			480: {
				slidesPerView: 1.4,
			},
			768: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 2.2,
			},
			1700: {
				slidesPerView: 2.4,
			},
		}
	});

	const swiperSession = new Swiper('.swiper-session', {
		spaceBetween: 25,
		
		pagination: {
			el: '.swiper-session-pagination',
		},

		navigation: {
			nextEl: '.swiper-session-button-next',
			prevEl: '.swiper-session-button-prev',
		},

		scrollbar: {
			el: '.swiper-session-scrollbar',
		},

		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			480: {
				slidesPerView: 1.4,
			},
			768: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 2.2,
			},
			1700: {
				slidesPerView: 2.4,
			},
		}
	});

	const swiperSliderDetail = new Swiper('.swiper-slider-detail', {
		slidesPerView: 1,
		spaceBetween: 0,
		pagination: {
			el: '.swiper-slider-detail-pagination',
		},

		navigation: {
			nextEl: '.swiper-slider-detail-button-next',
			prevEl: '.swiper-slider-detail-button-prev',
		},

		scrollbar: {
			el: '.swiper-slider-detail-scrollbar',
		},
	});

	var swiperDateweek = new Swiper('.swiper-dateweek', {
		spaceBetween: 0,
		slidesPerView: 9,
		freeMode: true,
		slideToClickedSlide: true,
		centeredSlides: true,
		speed:500,
		navigation: {
			nextEl: '.swiper-slider-dateweek-button-next',
			prevEl: '.swiper-slider-dateweek-button-prev',
		},
		breakpoints: {
			0: {
				slidesPerView: 3,
			},
			576: {
				slidesPerView: 4,
			},
			768: {
				slidesPerView: 6,
			},
			992: {
				slidesPerView: 10,
			},
		}
	});
	var swiperDateday = new Swiper('.swiper-dateday', {
		spaceBetween: 10,
		slidesPerView: 1,
		simulateTouch:false,
		allowTouchMove: false,
		effect: 'fade',
		fadeEffect: {
			crossFade: true
		},
	});
	var swiperPlan = new Swiper('.swiper-plan', {
		spaceBetween: 10,
		slidesPerView: 1,
		simulateTouch:false,
		allowTouchMove: false,
		effect: 'fade',
		fadeEffect: {
			crossFade: true
		},
	});
	swiperDateweek.controller.control = swiperDateday;
	swiperDateday.controller.control = swiperDateweek;

	swiperDateday.controller.control = swiperPlan ;
	swiperPlan.controller.control = swiperDateday;

	// swiperDateweek.controller.control = [swiperDateday, swiperPlan];


	/* RATING CIRCLE */
	if($(".rating-wrap-overall-circle").length > 0) {
		var $circle = document.querySelector('.r-progress-bar > .bar');
		var $wrapper = document.querySelector('.rating-wrap-overall-circle');

		var val = $wrapper.getAttribute('data-percentage');
		var r = $circle.getAttribute('r');
		var c = Math.PI * (r * 2);
		var pct = ((100 - val) / 100) * c;

		$circle.style.strokeDashoffset = pct;
		$wrapper.setAttribute('data-percentage', val);
	}
}

/* MENU ACTIVE ADMIN */
$(function(){
	var url = window.location.pathname, 
	urlRegExp = new RegExp(url.replace(/\/$/,'') + "$");
	$('.main-sidebar .navbar-nav li a').each(function(){
		if(urlRegExp.test(this.href.replace(/\/$/,''))){
			$(this).parent().addClass('active');
		}
	});
});

/* FULL CALENDER */
if($("#calendar").length > 0) {
	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			initialView: 'dayGridMonth',
			initialDate: '2021-03-07',
			headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},
			events: [
			{
				title: 'Cardio - 10 Member',
				start: '2021-03-01'
			},
			{
				title: 'Yoga - 5 Members',
				start: '2021-03-07',
				// end: '2021-03-10'
			},
			{
				groupId: '999',
				title: 'Cardio - 10 Member',
				start: '2021-03-09'
			},
			{
				groupId: '999',
				title: 'Yoga - 5 Members',
				start: '2021-03-16'
			},
			{
				title: 'Zumba - 15 Members',
				start: '2021-03-11',
				// end: '2021-03-13'
			},
			{
				title: 'Cardio - 10 Member',
				start: '2021-03-12',
				// end: '2021-03-12T12:30:00'
			},
			{
				title: 'Zumba - 15 Members',
				start: '2021-03-12'
			},
			{
				title: 'Yoga - 5 Members',
				start: '2021-03-12'
			},
			{
				title: 'Yoga - 5 Members',
				start: '2021-03-13'
			},
			{
				title: 'Cardio - 10 Member',
				// url: 'http://google.com/',
				start: '2021-03-28'
			}
			]
		});

		calendar.render();
	});
}




$(window).resize(function() {
	if($(window).width() >= 992) {
		var headerContainer = $(".header .container").offset();
		var headerContainerCalc = headerContainer.left + 15;
		$(".video-content").css("margin-left", headerContainerCalc);
		$(".section-video .px-lg-0").addClass("container-fluid").removeClass("container");
	}
	else {
		$(".video-content").css("margin-left", '0');
		$(".section-video .px-lg-0").addClass("container").removeClass("container-fluid");
	}
});