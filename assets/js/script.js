$(document).ready(function () {
	// Navbar Scroll
	$(document).scroll(function () {
		const navbar = $('.navbar');
		navbar.toggleClass('navbar-fixed', $(this).scrollTop() > navbar.height() - 30);
	});

	// Image Float Landing
	$(window).mousemove(function (e) {
		let change;
		let posX = e.clientX;
		let posY = e.clientY;
		let left = change * 20;

		posX = posX * 2;
		posY = posY * 2;

		$('.image-float .img-1').css('bottom', ((-5 + (posY / 150)) + "px"));
		$('.image-float .img-1').css('right', ((-18 + (posX / 100)) + "px"));

		$('.image-float .img-2').css('bottom', ((-5 + (posY / 170)) + "px"));
		$('.image-float .img-2').css('right', ((-18 + (posX / 130)) + "px"));
	});

	// event link
	
	// dropdown trigger
	$('.dropdown-trigger').dropdown({
		hover: true,
		coverTrigger: false
	});

	// dropdown trigger
	$('.dropdown-trigger2').dropdown({
		hover: true,
		coverTrigger: false
	});

	// sidenav
	$('.sidenav').sidenav();

	// sidenav collapsible
	$('.collapsible').collapsible();

	// slider awards
	$('.slider-awards.slider').slider();

	$('.next-slider-awards').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.slider-awards.slider').slider('prev');
	});

	$('.prev-slider-awards').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.slider-awards.slider').slider('next');
	});

	// carousel awards mobile
	$('.carousel-awards-mobile.carousel').carousel({
		noWrap: true,
		dist: 0,
		padding: 20,
		indicators: true
	});

	$('.next-carousel-awards-mobile').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-awards-mobile.carousel').carousel('prev');
	});

	$('.prev-carousel-awards-mobile').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-awards-mobile.carousel').carousel('next');
	});


	// carousel testimonial
	$('.carousel-testimonial.carousel-slider').carousel({
		fullWidth: true,
		indicators: true,
		noWrap: true
	});

	$('.next-carousel-testi').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-testimonial.carousel-slider').carousel('prev');
	});

	$('.prev-carousel-testi').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-testimonial.carousel-slider').carousel('next');
	});

	// carousel testimonial mobile
	$('.carousel-testimonial-mobile.carousel').carousel({
		noWrap: true,
		dist: 0,
		padding: 20,
		indicators: true
	});

	$('.next-carousel-testi-mobile').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-testimonial-mobile.carousel').carousel('prev');
	});

	$('.prev-carousel-testi-mobile').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-testimonial-mobile.carousel').carousel('next');
	});


	// carousel courses
	$('.carousel-courses.carousel').carousel({
		noWrap: false,
		dist: 0,
		padding: 30,
		indicators: true,
		numVisible: 5
	});

	// nav carousel courses desktop
	$('.next-carousel-courses').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-courses.carousel').carousel('prev');
	});

	$('.prev-carousel-courses').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-courses.carousel').carousel('next');
	});


	// nav carousel courses mobile
	$('.next-carousel-courses-mobile').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-courses.carousel').carousel('prev');
	});

	$('.prev-carousel-courses-mobile').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-courses.carousel').carousel('next');
	});


	// carousel schedule toefl
	$('.carousel-schedule-toefl.carousel').carousel({
		noWrap: false,
		dist: 0,
		padding: 20,
		indicators: true,
		numVisible: 5
	});

	// nav carousel schedule-toefl desktop
	$('.next-carousel-schedule-toefl').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-schedule-toefl.carousel').carousel('prev');
	});

	$('.prev-carousel-schedule-toefl').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-schedule-toefl.carousel').carousel('next');
	});


	// nav carousel schedule-toefl mobile
	$('.next-carousel-schedule-toefl-mobile').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-schedule-toefl.carousel').carousel('prev');
	});

	$('.prev-carousel-schedule-toefl-mobile').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-schedule-toefl.carousel').carousel('next');
	});


})