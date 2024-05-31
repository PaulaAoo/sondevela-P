jQuery(document).ready(function($){

	$( ".product-slider" ).slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: true,
		arrows: false
	});

	$( ".exp1 .products" ).slick({
		arrows: true,
		infinite: true,
		slidesToShow: 2,
		centerMode: true,
		variableWidth: true,
		prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev.png" className="slick-prev">',
		nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next.png" className="slick-next">',
	});

	$( ".exp2 .products" ).slick({
		arrows: true,
		infinite: true,
		slidesToShow: 2,
		centerMode: true,
		variableWidth: true,
		prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev-white.png" className="slick-prev">',
		nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next-white.png" className="slick-next">',
	});

	$( ".hotspot-slider" ).slick({
		arrows: true,
		infinite: true,
		slidesToShow: 1,
		prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev.png" className="slick-prev">',
		nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next.png" className="slick-next">',
	});

	$( ".alquila-slider" ).slick({
		infinite: true,
		slidesToShow: 1,
		prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev-white.png" className="slick-prev">',
		nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next-white.png" className="slick-next">',
	});

	$('.adicional').on('click', '.add', function(){
		console.log('click');
		var title = $(this).data('title');
		var subtitle = $(this).data('subtitle');
		var content = $(this).data('content');

		$(this).find('.title').each(function(){
			$('.extra-popup .title').text(title);
		});

		$(this).find('.subtitle').each(function(){
			$('.extra-popup .subtitle').text(subtitle);
		});

		$(this).find('.content').each(function(){
			$('.extra-popup .content').html(content);
		});

		$('.extra-popup').addClass('active');
	});

	$('.adicional').on('click', '.extra-popup', function(){
		$('.extra-popup').removeClass('active');
	});

});