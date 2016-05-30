$(document).ready(function() {
	checkLoginFields();
	checkRegistrationFields();
});

function checkLoginFields() {
	$('.login-form').on('submit', function(e) {
		var email = document.getElementById("form-email-login");
		var password = document.getElementById("form-password-login");

		if (email.value == '') {
			e.preventDefault()
			email.style.borderWidth = 'thin';
			email.style.borderColor = 'red';
		} else {
			email.style.borderWidth = '3px';
			email.style.borderColor = '#fff';
		}

		if (password.value == '') {
			e.preventDefault()
			password.style.borderWidth = 'thin';
			password.style.borderColor = 'red';
		} else {
			password.style.borderWidth = '3px';
			password.style.borderColor = '#fff';
		}
	});
}

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
		var firstName = document.getElementById("form-first-name");
		var lastName = document.getElementById("form-last-name");
		var email = document.getElementById("form-email-registration");
		var password = document.getElementById("form-password-registration");

		if (firstName.value == '') {
			e.preventDefault()
			firstName.style.borderWidth = 'thin';
			firstName.style.borderColor = 'red';
		} else {
			firstName.style.borderWidth = '3px';
			firstName.style.borderColor = '#fff';
		}

		if (lastName.value == '') {
			e.preventDefault()
			lastName.style.borderWidth = 'thin';
			lastName.style.borderColor = 'red';
		} else {
			lastName.style.borderWidth = '3px';
			lastName.style.borderColor = '#fff';
		}

		if (email.value == '') {
			e.preventDefault()
			email.style.borderWidth = 'thin';
			email.style.borderColor = 'red';
		} else {
			email.style.borderWidth = '3px';
			email.style.borderColor = '#fff';
		}

		if (password.value == '') {
			e.preventDefault()
			password.style.borderWidth = 'thin';
			password.style.borderColor = 'red';
		} else {
			password.style.borderWidth = '3px';
			password.style.borderColor = '#fff';
		}

		var re = new RegExp(".{6,}");
	    var validPassword = re.test(password.value);
	    console.log(password.value);
	    console.log(validPassword);

		if (!validEmail)
			e.preventDefault();

		if (!validPassword) {
			e.preventDefault();
			$("#failed-login").fadeIn();
		}
	});
}