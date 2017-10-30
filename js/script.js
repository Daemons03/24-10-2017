$(document).ready(function(){
var regex = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
$('#email1').blur(function(){
	if (!regex.test(this)) {
		$(this).css('backgroundColor', 'red');
	}
});




});
