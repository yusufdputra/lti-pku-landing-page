$(document).ready(function() {
   // Base URL
	const baseURL = 'http://ltipekanbaru.com/';
	
	$('.modal').modal();

	$('.textarea').characterCounter();

   // Web Konten Load Page
   $('.frame-pages .menu').click(function(e) {
		const page = $(this).attr('id');
		console.log(page);
      $('#page-content').load(baseURL + 'akses09/web-konten/pages/' + page); 
      e.preventDefault();
	});
	

   // Materialize - Dropdown
   $('.dropdown-trigger').dropdown({
      hover: true,
      coverTrigger: false
   });

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


	// carousel promo
	$('.carousel-promo.carousel').carousel({
		noWrap: false,
		dist: 0,
		padding: 30,
		indicators: true,
		numVisible: 3
	});

	// nav carousel promo
	$('.next-carousel-promo').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-promo.carousel').carousel('prev');
	});

	$('.prev-carousel-promo').click(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('.carousel-promo.carousel').carousel('next');
   });


});