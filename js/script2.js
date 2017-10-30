$(document).ready(function(){
	$(window).resize(function(){
		$(".section").height($(window).height());
		console.log($(window).height());
		;})
	$(".section").height($(window).height());
	console.log($(window).height());
var speed = 500;
var sectio = 1; 
$('.section').click(function(){
	if (sectio < $('section').length) {
		sectio ++;		
	}else {
		sectio = 1;	
	}
	$('html').animate({scrollTop:$("#section"+sectio).offset().top},speed);	
});
});
