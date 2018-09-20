$(document).ready(function(){

	var App = {
		name: "KPOS",
		api: "http://localhost:8000",
		dev:  "Axel Roz"
	}

	$.ajaxSetup({
	   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
	
	function ucwords (str) {
	    return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
	        return $1.toUpperCase();
	    });
	}

	$('#form-login').submit(function (event){
		event.preventDefault();

		var form = $('#form-login');
		var username = $('input[name=username]').val();
		var password = $('input[name=password]').val();

		console.log(form.prop('action'));

		$.ajax({
			url: form.prop('action'),
			type: 'POST',
			dataType: 'JSON',
			data: {
				username: username,
				password: password
			},
			success: function (data) {
				window.location.href = '/admin';
			},
			error: function (err) {
				console.log(err.responseText);
				displayValidationError($.parseJSON(err.responseText));
			}
		});
	});
	
});