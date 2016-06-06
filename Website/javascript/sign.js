$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip();
	checkRegistrationFields();
});

function checkRegistrationFields() {
	var validEmail = true;

	$("input[name='emailReg']").on("change paste keyup", function() {
	    var email = $("input[name='emailReg']").val();
	    var re = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
	    validEmail = re.test(email);
	    if (!validEmail && email != "")
	    	$("input[name='emailReg']").css('color', 'red');
	    else
	    	$("input[name='emailReg']").css('color', '#888');
	});

	$('.registration-form').on('submit', function(e) {
		var email = document.getElementById("form-email-registration");
		var password = document.getElementById("form-password-registration");
		var re = new RegExp(".{6,}");
	    var validPassword = re.test(password.value);

	    $("#form-email-registration").tooltip('disable');
	    $("#form-password-registration").tooltip('disable');

	    email.style.borderWidth = '3px';
		email.style.borderColor = '#fff';
		password.style.borderWidth = '3px';
		password.style.borderColor = '#fff';

		if (!validEmail) {
			e.preventDefault();
			$("#form-email-registration").tooltip('enable').attr('title', "Enter a valid email address").tooltip('fixTitle').tooltip('show');
			email.style.borderColor="#990000";
	    	email.style.borderWidth="thin";
		}
		
		if (!validPassword) {
			e.preventDefault();
			$("#form-password-registration").tooltip('enable').attr('title', "Password should have at least 6 characters").tooltip('fixTitle').tooltip('show');
			password.style.borderWidth = 'thin';
			password.style.borderColor = '#990000';
		}
	});
}