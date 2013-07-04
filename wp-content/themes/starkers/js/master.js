$(document).ready(function() {

// FADES
	$('.page-wrap').hide().delay(200).fadeIn(200);

// NAVIGATION
	$('.switch').click(function() {
		$('nav').toggleClass('narrow');
		$('.page-wrap').toggleClass('expanded');
		$('.icon-plus').toggleClass('switch');
		return false;
	});
	$('.page-nav ul').tinyNav();
     
});