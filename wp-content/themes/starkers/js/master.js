$(document).ready(function() {

// FADES
	$('body').hide().delay(300).fadeIn(300);

// NAVIGATION
	$('a.switch').bind('click', function() {
		$('nav').toggleClass('narrow');
		$('.page-wrap').toggleClass('expanded');
		$('.icon-plus').toggleClass('switch');
		return false;
	});
	$('.page-nav ul').tinyNav();
     
});