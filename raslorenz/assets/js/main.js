// JavaScript Document

$(document).ready(function(){
	
	$('.sidenav').sidenav({
		edge: 'left'
	});
	
	$('.carousel.carousel-slider').carousel({
    fullWidth: true,
		indicators: true,
		duration: 500
    });
	var n = 4500;
    autoplay();
	function autoplay() {
		$('.carousel.carousel-slider').carousel('next');
		setTimeout(autoplay, n);
	}
	
	$('#carousel-wrapper').click(function(){
		n = 20000;	
	});
	
	$('#carousel-wrapper').mouseleave(function(){
		n = 3500;
	});
});