$(document).ready(function() {
	var validEmail = true;
	$("input[name='email']").on("change paste keyup", function() {
	    var email = $("input[name='email']").val();
	    var re = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
	    validEmail = re.test(email);
	    if (!validEmail && email != "")
	    	$("input[name='email']").css('color', 'red');
	    else
	    	$("input[name='email']").css('color', '#888');
	});

	$('#changeSettings').on('submit', function(e) {
		if (!validEmail)
			e.preventDefault();
	});
	
});