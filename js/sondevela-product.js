jQuery(document).ready(function($){

	$( ".gal-slider" ).slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		variableWidth: false,
		prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev-white.png" className="slick-prev">',
		nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next-white.png" className="slick-next">',
	});

	$( ".reserva .gallery" ).slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev-white.png" className="slick-prev">',
		nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next-white.png" className="slick-next">',
	});

	$('.gallery_tab_tab').on('click', function() {
		$('#tab-gallery_tab').imagesLoaded(function () {
			var gallery = $('.gallery_tab')
			gallery.masonry({
				//fitWidth: true,
				gutter: 10,
				itemSelector: '.grid-item'
			});
		});
	});

	$( ".product-slider" ).slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: true,
		arrows: false
	});

	$( ".hotspot-slider" ).slick({
		arrows: true,
		infinite: true,
		slidesToShow: 1,
		prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev.png" className="slick-prev">',
		nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next.png" className="slick-next">',
	});

	$('.adicional').on('click', '.add', function(){
		console.log('click');
		var title = $(this).data('title');
		var subtitle = $(this).data('subtitle');
		var content = $(this).data('content');
		var link = $(this).data('link');

		$(this).find('.title').each(function(){
			$('.extra-popup .title').text(title);
		});

		$(this).find('.subtitle').each(function(){
			$('.extra-popup .subtitle').text(subtitle);
		});

		$(this).find('.content').each(function(){
			$('.extra-popup .content').html(content);
		});

		$(this).find('.link').each(function(){
			$('.extra-popup .link').html('<a class="btn" href="'+link+'"></a>');
		});

		$('.extra-popup').addClass('active');
	});

	$('.adicional').on('click', '.extra-popup', function(){
		$('.extra-popup').removeClass('active');
	});

	$('.reviews_tab_tab').on('click', function() {
		$(".reviews-slider").slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			dots: false,
			arrows: false
		});
	});
});