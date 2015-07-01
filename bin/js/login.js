// selfload function
$(function() {

	// check username value
	$('#wrapper form .left').bind('change paste keyup', function() {
		if($(this).val().length > 0) {
			$('#wrapper form .right').addClass('visible');
		} else {
			$('#wrapper form .right').removeClass('visible');
		}
	});
	$('#wrapper form .right').bind('change paste keyup', function() {
		if($(this).val().length > 0) {
			$('#wrapper form .submit').addClass('visible');
		} else {
			$('#wrapper form .submit').removeClass('visible');
		}
	});
});