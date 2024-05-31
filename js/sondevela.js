jQuery(document).ready(function($){

	$( ".site-main" ).find( ".slider" ).each(function(){
		$(this).slick({
			dots: false,
			arrows: false,
			infinite: true,
			autoplay: true,
			speed: 300,
			slidesToShow: 1,
			centerMode: true,
			variableWidth: true
		});
	})
});