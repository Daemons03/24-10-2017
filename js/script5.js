$(document).ready(function(){
var email= /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
$('#email').blur(function(){
	if (!email.test(this)) {
		$(this).css('backgroundColor', 'red');
		alert("Email n'est pas remplis.")
	}
});
$('#nom').blur(function(){
	if($(this) == ""){
		$(this).css('backgroundColor', 'red');
	}
});
});
