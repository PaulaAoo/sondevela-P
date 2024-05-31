jQuery(document).ready(function($){

	$( ".cats" ).slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		variableWidth: true,
		prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev-white.png" className="slick-prev" class="slick-prev">',
		nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next-white.png" className="slick-next" class="slick-next">',
	});

	$( ".slider-barcos" ).slick({
		infinite: true,
		slidesToShow: 1,
		variableWidth: true,
		prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev.png" className="slick-prev" class="slick-prev">',
		nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next.png" className="slick-next" class="slick-next">',
	});

	$( ".slider-equipos" ).slick({
		autoplay: true,
		infinite: true,
		slidesToShow: 3,
		variableWidth: true,
	});


});